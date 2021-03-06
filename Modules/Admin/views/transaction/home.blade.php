
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
 <div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
       @include('packages::partials.breadcrumb')

        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
             
            <div class="col-md-12">
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="portlet-body">
                                <div class="box-header">
                                     
                                </div><!-- /.box-header -->

                                
                                @if(Session::has('flash_alert_notice'))
                                     <div class="alert alert-success alert-dismissable" style="margin:10px">
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                      <i class="icon fa fa-check"></i>  
                                     {{ Session::get('flash_alert_notice') }} 
                                     </div>
                                @endif
                                  
                               <div class="table-scrollable" >
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead><tr>
                                                <th>Sno</th> 
                                                <th>Buyer Name</th>
                                                <th>Buyer Email</th>
                                                <th>Product Title</th>
                                                <th>Price</th> 
                                                <th>Payment Mode</th>
                                                 <th>Order Date</th>
                                                 <th>Status</th>
                                               <!--  <th>Action</th> -->
                                            </tr>
                                            @if(count($transaction)==0)
                                                <tr>
                                                  <td colspan="7">
                                                    <div class="alert alert-danger alert-dismissable">
                                                      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                                      <i class="icon fa fa-check"></i>  
                                                      {{ 'Record not found. Try again !' }}
                                                    </div>
                                                  </td>
                                                </tr>
                                              @endif
                                          </thead>
                                            @foreach ($transaction as $key => $result)  
                                         
                                        
                                          <tbody>    
                                           @if(isset($result->user->email))
                                            <tr>
                                                <td>{{ ++$key }}</td> 
                                                <td>{{ $result->user->first_name }} </td>
                                            <td>{{ $result->user->email }} </td>
                                                <td>{{ isset($result->product->product_title)?$result->product->product_title:'' }} </td>
                                                 <td>{{ $result->total_price }} </td>
                                                   <td>{{ $result->payment_mode }} </td> 
                                              
                                                <td>
                                                    {!! Carbon\Carbon::parse($result->created_at)->format('d-M-Y'); !!}
                                                </td>
                                                <td>
                                                    <span class="label label-{{ ($result->status==1)?'success':'warning'}} status" id="{{$result->id}}"  data="{{$result->status}}"  >
                                                         @if($result->status==1)
                                                         Pending
                                                         @elseif($result->status==2)
                                                         In Progress
                                                         @elseif($result->status==3)
                                                         Success
                                                         @elseif($result->status==4)
                                                         Cancel
                                                         @else
                                                         COD
                                                         @endif
                                                    </span>
                                                </td>
                                             <!--    <td>  

                                                    {!! Form::open(array('class' => 'form-inline pull-left deletion-form', 'method' => 'DELETE',  'id'=>'deleteForm_'.$result->id, 'route' => array('transaction.destroy', $result->id))) !!}
                                                    <button class='delbtn btn btn-danger btn-xs' type="submit" name="remove_levels" value="delete" id="{{$result->id}}"><i class="fa fa-fw fa-trash" title="Delete"></i></button>
                                                    
                                                     {!! Form::close() !!}

                                                </td> -->
                                            </tr>
                                            @endif
                                            @endforeach 
                                        </tbody></table>
                                </div><!-- /.box-body --> 
                                <div class="center" align="center">  {!! $transaction->appends(['search' => isset($_GET['search'])?$_GET['search']:''])->render() !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>


<!-- END QUICK SIDEBAR -->
</div>


