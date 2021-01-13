@extends('layouts/app')
@section('title','Stranded List')

@section('content')
  <div >


 
                    <table class="table mx-1" id="datatable">
                        <thead style="background-color: #2c6ac6; color: white;">
                            <tr>
                                <th scope="col"  width="5%">Id</th>
                                <th scope="col" width="10%">Name</th>
                                <th scope="col" width="10%">Father's Name</th>
                                <th scope="col" width="10%">Phone No.</th>

                                <!-- <th scope="col" width="23%">Password</th> -->
                                <th scope="col" width="10%"> Address(Mzr)</th>
                                <th scope="col" width="10%">District</th>
                                <th scope="col" width="10%">State</th>
                                <th scope="col" style="text-align: center;" width="10%">Address(Outside)</th>
                                <th scope="col" width="10%">Problem</th>
                                <th scope="col" width="10%">Action</th>
                            </tr>


                        </thead>
                        <tbody id="myTable">
                        @foreach($strandeds as $stranded)
                            <tr class="table-light">
                                <td scope="row">{{ $stranded->id }}</td>
                                <td>{{ $stranded->name }}</td>
                                <td>{{ $stranded->fname }}</td>
                                <td>{{ $stranded->phone }}</td>

                                <td>{{ $stranded->mizoramaddress}}</td>
                                <td>{{ $stranded->mizoramdistrict }}</td>
                                <td>{{ $stranded->outsidestate }}</td>
                                <td>{{ $stranded->outsideaddress }}</td>
                                <td>{{ $stranded->problem }}</td>
                                <td><a href = 'delete/{{ $stranded->id }}'>Delete</a></td>

                                
                                
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="paginator container">

                    {{ $strandeds->appends($_GET)->onEachSide(1)->links() }}

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
