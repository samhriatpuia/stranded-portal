@extends('layouts/app')
@section('title','Tanpuina List')

@section('content')
  <div >


 
                    <table class="table mx-1" id="datatable">
                        <thead style="background-color: #2c6ac6; color: white;">
                            <tr>
                                <th scope="col"  width="4%">Id</th>
                                <th scope="col" width="8%">Name</th>
                                <th scope="col" width="10%">Father's Name</th>
                                <th scope="col" width="8%">Phone No.</th>

                                <!-- <th scope="col" width="23%">Password</th> -->
                                <th scope="col" width="10%"> District(Mzr)</th>
                                <th scope="col" width=5%">State</th>
                                <th scope="col" width="10%">A/c Number</th>
                                <th scope="col" style="text-align: center;" width="10%">A/c Name</th>
                                <th scope="col" width="10%">Branch</th>
                                <th scope="col" width="10%">Bank Name</th>
                                <th scope="col" width="5%">Geo_State</th>
                                <th scope="col" width="10%">IP Add</th>
                                <th scope="col" width="10%">Action</th>
                            </tr>


                        </thead>
                        <tbody id="myTable">
                        @foreach($tanpuinas as $tanpuina)
                            <tr class="table-light">
                                <td scope="row">{{ $tanpuina->id }}</td>
                                <td>{{ $tanpuina->name }}</td>
                                <td>{{ $tanpuina->fname }}</td>
                                <td>{{ $tanpuina->phone }}</td>

                                <td>{{ $tanpuina->mizoramdistrict}}</td>
                                <td>{{ $tanpuina->outsidestate }}</td>
                                <td>{{ $tanpuina->ac_number }}</td>
                                <td>{{ $tanpuina->ac_name }}</td>
                                <td>{{ $tanpuina->bank_branch }}</td>
                                <td>{{ $tanpuina->bank_name}}</td>
                                <td>{{ $tanpuina->geo_state}}</td>
                                <td>{{ $tanpuina->ip_address}}</td>
                                <td><a href = 'deleteT/{{ $tanpuina->id }}'>Delete</a></td>   
                                
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="paginator container">

                    {{ $tanpuinas->appends($_GET)->onEachSide(1)->links() }}

                </div>

                



                <!-- <div class=form-row>

                        <form class=" mx-sm-4 mt-3 mt-sm-5 mb-5" method="POST" action="{{ route('stateList') }}">
                        @csrf
                            <div class="mb-4">
                                    <label for="outsidestate">Mizoram pawn awmna State/UT*</label>
                                    <select name ="outsidestate" class="form-control" >
                                        <option value="" disabled selected>I State/UT list en duh kha select rawh le</option>
                                        @foreach($states as $state)
                                        <option value="{{$state->name}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>

                                <p class="text-danger">{{$errors->first('outsidestate')}}</p>
                            </div>
                        
                            <button  class="btn btn-primary">Display</button>
                        </form>


                        <form class="needs-validation mx-sm-4 mt-3 mt-sm-5 mb-5" method="POST" action="{{ route('districtList') }}">
                        @csrf
                           <div class=" mb-4">
                                    <label for="mizoramdistrict">District(Mizoram) *</label>
                                    <select name ="mizoramdistrict" id="mizoramdistrict" class="form-control" >
                                            <option value="" disabled selected>I District lakchhuah duh kha select rawh le</option>
                                                @foreach($districts as $district)
                                            <option value="{{$district->name}}">{{$district->name}}</option>
                                                @endforeach
                                    </select>

                                <p class=" text-danger">{{$errors->first('mizoramdistrict')}}</p>
                            </div>
                                <button  class="btn btn-primary">  Display </button>
                        </form>

                </div>  -->



@endsection
