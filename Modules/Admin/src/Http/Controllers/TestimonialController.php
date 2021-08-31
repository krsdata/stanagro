<?php
dd('*'); exit;
declare(strict_types=1);

namespace Modules\Admin\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Input;
use Modules\Admin\Http\Requests\TestimonialRequest;
use Modules\Admin\Models\Roles;
use Modules\Admin\Models\Testimonial;
use Route;
use View;

/**
 * Class AdminController
 */
class TestimonialController extends Controller
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
        View::share('viewPage', 'Admin Testimonial');
        View::share('helper', new Helper);
        View::share('heading', 'Admin Testimonial');
        View::share('route_url', route('testimonial'));

        $this->record_per_page = Config::get('app.record_per_page');
    }

    protected $users;

    /*
     * Dashboard
     * */

    public function index(Testimonial $testimonial, Request $request)
    {
        $page_title  = 'Admin Testimonial';
        $page_action = 'Admin View Testimonial';

        if ($request->ajax()) {
            $id           = $request->get('id');
            $status       = $request->get('status');
            $testimonial         = Testimonial::find($id);
            $s            = ($status == 1) ? $status            = 0 : $status            = 1;
            $testimonial->status = $s;
            $testimonial->save();
            echo $s;

            exit();
        }
        // Search by name ,email and group
        $search    = Input::get('search');
        $status    = Input::get('status');
        $role_type = Input::get('role_type');

        if ((isset($search) && !empty($search)) or  (isset($status) && !empty($status)) or !empty($role_type)) {
            $search = isset($search) ? Input::get('search') : '';

            $users = User::where(function ($query) use ($search,$status,$role_type) {
                if (!empty($search)) {
                    $query->Where('first_name', 'LIKE', "%$search%")
                        ->OrWhere('last_name', 'LIKE', "%$search%")
                        ->OrWhere('email', 'LIKE', "%$search%");
                }

                if (!empty($status)) {
                    dd($role_type);
                    $status =  ($status == 'active')?1:0;
                    $query->Where('status', $status);
                }

                if ($role_type) {
                    $query->Where('role_type', $role_type);
                }
            })->where('role_type', '!=', 3)->Paginate($this->record_per_page);
        } else {
            $users = User::orderBy('id', 'desc')->where('role_type', '!=', 3)->Paginate($this->record_per_page);
        }
        $roles = Roles::all();

        $js_file = ['common.js','bootbox.js','formValidate.js'];

        return view('packages::users.user.index', compact('js_file', 'roles', 'status', 'users', 'page_title', 'page_action', 'roles', 'role_type'));
    }

    /*
     * create Group method
     * */

    public function create(Testimonial $testimonial)
    {
    	dd('here'); exit;
        $page_title  = 'Admin Testimonial';
        $page_action = 'Create Testimonial';
        $js_file     = ['common.js','bootbox.js','formValidate.js'];

        return view('packages::testimonial.create', compact('js_file', 'testimonial', 'page_title', 'page_action', 'groups'));
    }

    /*
     * Save Group method
     * */

    public function store(UserRequest $request, Testimonial $testimonial)
    {
        $testimonial->fill(Input::all());
        $action = $request->get('submit');


        if ($action == 'avtar') {
            if ($request->file('client_image')) {
                $client_image = Testimonial::createImage($request, 'client_image');
                $request->merge(['client_image' => $client_image]);
                $user->client_image = $request->get('client_image');
            }
        }
        $user->save();
        $js_file = ['common.js','bootbox.js','formValidate.js'];

        return Redirect::to(route('user'))
            ->with('flash_alert_notice', 'New record successfully created.');
    }

    /*
     * Edit Group method
     * @param
     * object : $testimonial
     * */

    public function edit(Testimonial $testimonial)
    {
        $page_title  = 'Admin Testimonial';
        $page_action = 'Show Testimonial';
        $role_id     = $testimonial->role_type;
        $roles       = Roles::all();
        $js_file     = ['common.js','bootbox.js','formValidate.js'];

        return view('packages::testimonial.edit', compact('js_file','testimonial', 'page_title', 'page_action'));
    }

    public function update(Request $request, User $user)
    {
        $user->fill(Input::all());


        $user->fill(Input::all());
        $action          = $request->get('submit');

        if ($action == 'avtar') {
            if ($request->file('client_image')) {
                $client_image = User::createImage($request, 'client_image');
                $request->merge(['client_image' => $client_image]);
                $user->client_image = $request->get('client_image');
            }
        } elseif ($action == 'businessInfo') {
        } elseif ($action == 'paymentInfo') {
        } else {
        }

        $user->save();


        if ($request->get('role') == 3) {
            $Redirect = 'clientuser';
        } else {
            $Redirect = 'testimonial';
        }

        return Redirect::to(route($Redirect))
            ->with('flash_alert_notice', 'Record successfully updated.');
    }
    /*
     *Delete Testimonial
     * @param ID
     *
     */
    public function destroy(Request $request, $id)
    {
        Testimonial::where('id', $id)->delete();

        return Redirect::to(route('testimonial'))
            ->with('flash_alert_notice', 'Testimonial deleted successfully .');
    }

    public function show(Testimonial $testimonial)
    {
    }
}
