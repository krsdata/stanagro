<?php

declare(strict_types=1);

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Modules\Admin\Helpers\Helper as Helper;
use Modules\Admin\Http\Requests\ProductRequest;
use Modules\Admin\Models\Category;
use Modules\Admin\Models\Product;
use Modules\Admin\Models\Transaction;
use Modules\Admin\Models\User;
use Route;
use View;

/**
 * Class AdminController
 */
class TransactionController extends Controller
{
    /**
     * @var  Repository
     */

    /**
     * Displays all admin.
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('admin');
        View::share('viewPage', 'Transaction');
        View::share('helper', new Helper);
        $this->record_per_page = 20;
        View::share('route_url', route('transaction'));
        View::share('heading', 'Transaction');
    }

    protected $categories;

    /*
     * Dashboard
     * */

    public function index(Transaction $transaction, Request $request)
    {
        $page_title  = 'Transaction';
        $page_action = 'View Transaction';

        if ($request->ajax()) {
            $id               = $request->get('id');
            $category         = Transaction::find($id);
            $category->status = $s;
            $category->save();

            exit();
        }

        $transaction = $transaction->with('user', 'product', 'coupan')->orderBy('id', 'desc')->Paginate(20);
       // dd($transaction);

        return view('packages::transaction.index', compact('transaction', 'page_title', 'page_action'));
    }

    /*
     * create  method
     * */

    public function create(Transaction $product)
    {
        $page_title         = 'Transaction';
        $page_action        = 'Create Transaction';
        $sub_category_name  = Product::all();
        $category           = Category::all();
        $cat                = [];
        foreach ($category as $key => $value) {
            $cat[$value->category_name][$value->id] =  $value->sub_category_name;
        }

        $categories =  Category::attr(['name' => 'product_category','class' => 'form-control form-cascade-control input-small'])
            ->selected([1])
            ->renderAsDropdown();

        return view('packages::product.create', compact('categories', 'cat', 'category', 'product', 'sub_category_name', 'page_title', 'page_action'));
    }

    /*
     * Save Group method
     * */

    public function store(ProductRequest $request, Transaction $product)
    {
        return Redirect::to(route('transaction'))
            ->with('flash_alert_notice', 'New Transaction was successfully created !');
    }
    /*
     * Edit Group method
     * @param
     * object : $category
     * */

    public function edit(Transaction $transaction)
    {
        $page_title  = 'Transaction';
        $page_action = 'Show Transaction';


        return view('packages::product.edit', compact('categories', 'product', 'page_title', 'page_action'));
    }

    public function update(ProductRequest $request, Transaction $transaction)
    {
        return Redirect::to(route('transaction'))
            ->with('flash_alert_notice', 'Transaction was  successfully updated !');
    }
    /*
     *Delete User
     * @param ID
     *
     */
    public function destroy(Request $request, $id)
    {
        Transaction::where('id', $id)->delete();

        return Redirect::to(route('transaction'))
            ->with('flash_alert_notice', 'Transaction was successfully deleted!');
    }

    public function show(Product $product)
    {
    }
}
