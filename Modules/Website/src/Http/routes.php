<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



  //website  prefix Grouping 
 Route::group(array('prefix' => '/'), function() {

    //Namespace Grouping 
    Route::group(array('namespace' => 'Modules\Website\Http\Controllers'), function()
    {

        Route::get('/',[
                  'as' => '/',
                  'uses'  => 'ProductController@showProduct' 
                ]); 

        Route::get('page/{name}',[
                  'as' => 'pageContent',
                  'uses'  => 'HomeController@page' 
                ]); 


        Route::match(['post','get'],'cat','HomeController@index');



        Route::get('{name}/{id}',[
                  'as' => 'productDetails',
                  'uses'  => 'HomeController@productDetail'
                ])->where('id', '[0-9]+');


        Route::get('blog',[
                  'as' => 'blog',
                  'uses'  => 'HomeController@blog'
                ]); 

        Route::get('blog/{name}',[
                  'as' => 'blogDetails', 
                  'uses'  => 'HomeController@blogContent'
                ]);


        Route::get('category/{name}',[
                  'as' => 'productcategory',
                  'uses'  => 'HomeController@mainCategory'
                ]);


        Route::get('{subCategoryName}/{productName}',[
                  'as' => 'productName',
                  'uses'  => 'HomeController@productDetail'
                ]); 


        Route::get('{name}/addToCart/{id}', [ 
                'as' => '',
               'uses' =>   'ProductController@addToCart'
               ]);




        Route::get('category',[
                  'as' => 'productcategory',
                  'uses'  => 'HomeController@productCategory'
                ]); 

        Route::get('client/login',[
                  'as' => 'showLoginForm',
                  'uses'  => 'ProductController@showLoginForm'
                ])->where(['name'=>'myaccount','name'=>'[A-Za-z]+']); 

        Route::get('{category}/{name}',[
                  'as' => 'productcategoryByname', 
                  'uses'  => 'HomeController@productCategory'
                ]);



        Route::get('checkout',[
                  'as' => 'checkout',
                  'uses'  => 'HomeController@checkout'
                ]); 

        Route::get('home',[
                  'as' => 'home',
                  'uses'  => 'HomeController@home'
                ]);
        Route::get('category',[
                  'as' => 'category-front',
                  'uses'  => 'HomeController@category'
                ]); 
         Route::get('confirm-order',[
                  'as' => 'order',
                  'uses'  => 'ProductController@order'
                ]); 
          Route::get('faq',[
                  'as' => 'faq',
                  'uses'  => 'HomeController@faq'
                ]);
          Route::get('services',[
                  'as' => 'services',
                  'uses'  => 'HomeController@services'
                ]);       
          Route::get('training',[
                  'as' => 'training',
                  'uses'  => 'HomeController@training'
                ]);  
           Route::get('privacy-policy',[
                  'as' => 'privacy-policy',
                  'uses'  => 'HomeController@privacy'
                ]);       
           Route::get('terms-conditions',[
                  'as' => 'terms-conditions',
                  'uses'  => 'HomeController@tNc'
                ]);
            Route::get('contact',[
                  'as' => 'contact',
                  'uses'  => 'HomeController@contact'
                ]);
           Route::get('track-orders',[
                  'as' => 'trackOrder',
                  'uses'  => 'HomeController@trackOrder'
                ]); 
           Route::get('terms-conditions',[
                  'as' => 'trackOrder',
                  'uses'  => 'HomeController@tNc'
                ]); 
          
           
          Route::get('/cart', [ 
                'as' => '',
               'uses' =>   'ProductController@index'
               ]);

        Route::get('checkout',[
                  'as' => 'checkout',
                  'uses'  => 'ProductController@checkout'
                ]); 


          Route::get('/updateCart', [ 
                'as' => '',
               'uses' =>   'ProductController@updateCart'
               ]);

          Route::get('/product', [  
                'as' => '',
               'uses' =>   'ProductController@showProduct'
               ]);

          Route::get('/clear-cart',[  
                'as' => '',
               'uses' =>  'ProductController@clearCart'
               ]);

          Route::get('/getProduct',[  
                'as' => '',
               'uses' =>  'ProductController@getProduct'
               ]);




            Route::get('{name}/buyNow/{id}', [ 
                'as' => '',
               'uses' =>   'ProductController@buyNow'
               ]);


          Route::get('/removeItem/{id}',[ 
                'as' => '',
               'uses' =>  'ProductController@removeItem'
               ]);
          Route::get('auth/logout', 'Auth\AuthController@getLogout');

          
 

          Route::get('signup',[
                  'as' => 'register',
                  'uses'  => 'ProductController@showLoginForm'
                ]);       
          Route::post('signup',[
                  'as' => 'register',
                  'uses'  => 'UserController@signup'
                ]);  

          Route::get('login',[
                  'as' => 'login',
                  'uses'  => 'UserController@showLoginForm'
                ]);

          Route::post('userLogin',[
                  'as' => 'userLogin',
                  'uses'  => 'ProductController@userLogin'
                ]); 

        Route::match(['get','post'],'billing',[
                  'as' => 'billing',
                  'uses'  => 'ProductController@billing'
                ]);

        Route::post('shipping',[
                  'as' => 'shipping',
                  'uses'  => 'ProductController@shipping'
                ]);

        Route::post('shippingMethod',[
                  'as' => 'shippingMethod',
                  'uses'  => 'ProductController@shippingMethod'
                ]);

        Route::post('placeOrder',[
                  'as' => 'placeOrder',
                  'uses'  => 'ProductController@placeOrder'
                ]);

        Route::get('page-not-found',[
                  'as' => 'pageNotFound',
                  'uses'  => 'HomeController@pageNotFound'
                ]);



        Route::get('orderSuccess',[
                  'as' => 'orderSuccess',
                  'uses'  => 'ProductController@thankYou'
                ]); 

         Route::post('sendMail',[
                  'as' => 'sendMail',
                  'uses'  => 'HomeController@sendmail'
                ]);

        Route::get('signout', function(App\User $user , Illuminate\Http\Request $request) { 
        
        $request->session()->forget('current_user');
        $request->session()->flush();  

        return redirect()->intended('/'); 

        });

        Route::get('myaccount',[
              'as' => 'myaccount',
              'uses'  => 'ProductController@myaccount'
            ]);

        Route::post('login',function(App\User $user , Illuminate\Http\Request $request){ 

            $credentials = ['email' => Input::get('email'), 'password' => Input::get('password')];  
           
              if (Auth::attempt($credentials)) {
                 $request->session()->put('current_user',Auth::user());
                 
                    return redirect()->intended('/'); 
              }else{  
                  return redirect()
                              ->back()
                              ->withInput()  
                              ->withErrors(['message'=>'Invalid email or password. Try again!']);
                  } 
          }); 
                 



        Route::post('Ajaxlogin',function(App\User $user , Illuminate\Http\Request $request){ 
           
            $credentials = ['email' => Input::get('email'), 'password' => Input::get('password')];  

              if (Auth::attempt($credentials)) {
                 $request->session()->put('current_user',Auth::user());
                 $request->session()->put('tab',1);

                 if(Input::get('signup')=="signup")
                 {
                   echo "1";
                   exit();
                 }
               
                  return Redirect::to(url()->previous());
              }else{  
                   return  json_encode(['msg'=>'Invalid email or password','code'=>500,'data'=>$request->all()]); 
                   //return Redirect::to(url()->previous());
                  } 
          }); 
 

        });       

     });




          