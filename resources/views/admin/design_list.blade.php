@extends('template.partials.default')
@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-header">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="section-header-breadcrumb-content">
                  
                  
                </div>
              </div>
              
            </div>
          </div>
          <div class="row">
              
              <div class="col-12 col-md-6 col-lg-12">
                
                <div class="card">
                  <div class="card-header">
                    <h4>User Design List:</h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Sesion ID</th>
                          <th scope="col">Identifier Code</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php $i=1
                        @endphp
                        @foreach($design_list as $d)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$d->session_id}}</td>
                          <td>{{$d->identifier_code}}</td>
                          <td>@if($d->status==0)<button class= "btn btn-primary">Pending</button>@elseif($d->status==1)<button class="btn badge-dark">Approved</button>@elseif($d->status==-1)<button class="btn btn-outline-secondary">Disapproved</button>@endif</td>
                          <td>
                    <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Action
                      </button>
                      <div class="dropdown-menu" style="will-change: transform;">
                        <a class="dropdown-item has-icon" href="{{route('design-approve',['id'=>$d->id,'type'=>'Approve'])}}"><i class="far fa-user"></i>Approve</a>
                         <a class="dropdown-item has-icon" href="{{route('design-approve',['id'=>$d->id,'type'=>'Disapprove'])}}"><i class="far fa-user"></i>Disapprove</a>
                        <a class="dropdown-item has-icon" href="{{route('admin-design-delete',['id'=>$d->id])}}"><i class="fas fa-times"></i>Delete</a>
                        
                      </div>
                    </div>
                  </td>
                        </tr>
                        @endforeach()
                        
                        
                        
                      </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
            {!! $design_list->links() !!}
        </div>
                  </div>
                </div>
                
              </div>
              
            </div>
  </section>
</div>

@endsection()