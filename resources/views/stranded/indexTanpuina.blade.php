@extends('layouts/app')
@section('title','Tanpuina')


@section('content')


<div class="container">
        <div class="mt-1" style="color:white;background:#007bff!important;padding:3px">
            <h2 style="text-align:center;opacity:0.8">Bank a/c submit tawhte download-na</h2>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="mt-2 mr-5">
                    <h3 class="mb-1" style="color:#007bff!important">
                         <b>States Of India</b>
                    </h3>
                    <div style="position: relative;height: 700px;overflow: auto; display: block;">
                        <table class="table table-striped mb-0" style="width:100%;">
                            <thead style="background:#3490dc!important">
                                <tr>
                                    <th scope="col" style="width:10%">#</th>
                                    <th scope="col" style="width:30%">State</th>
                                    <th scope="col" style="width:10%" >Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>All India</td>
                                    <td> 
                                        <a href="{{ route('exportTanpuina') }}">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Andhra Pradesh</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaAndra') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Arunachal Pradesh</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaArunachal') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Assam</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaAssam') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Bihar</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaBihar') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Chhattisgarh</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaChhattisgarh') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Goa</td>
                                    <td><a href="{{ route('tanpuinaGoa') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Gujarat</td>
                                    <td><a href="{{ route('tanpuinaGujarat') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Haryana</td>
                                    <td><a href="{{ route('tanpuinaHaryana') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">10</th>
                                    <td>Himachal Pradesh</td>
                                    <td><a href="{{ route('tanpuinaHimachal') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Jammu and Kashmir</td>
                                    <td><a href="{{ route('tanpuinaJnK') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Jharkhand</td>
                                    <td><a href="{{ route('tanpuinaJharkhand') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Karnataka</td>
                                    <td><a href="{{ route('tanpuinaKarnataka') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Kerala</td>
                                    <td><a href="{{ route('tanpuinaKerala') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">15</th>
                                    <td>Madya Pradesh</td>
                                    <td><a href="{{ route('tanpuinaMadya') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Maharashtra</td>
                                    <td><a href="{{ route('tanpuinaMaharashtra') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">17</th>
                                    <td>Manipur</td>
                                    <td><a href="{{ route('tanpuinaManipur') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">18</th>
                                    <td>Meghalaya</td>
                                    <td><a href="{{ route('tanpuinaMeghalaya') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">19</th>
                                    <td>Nagaland</td>
                                    <td><a href="{{ route('tanpuinaNagaland') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">20</th>
                                    <td>Orissa</td>
                                    <td><a href="{{ route('tanpuinaOrissa') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">21</th>
                                    <td>Punjab</td>
                                    <td><a href="{{ route('tanpuinaPunjab') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">22</th>
                                    <td>Rajasthan</td>
                                    <td><a href="{{ route('tanpuinaRajasthan') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">23</th>
                                    <td>Sikkim</td>
                                    <td><a href="{{ route('tanpuinaSikkim') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">24</th>
                                    <td>Tamil Nadu</td>
                                    <td><a href="{{ route('tanpuinaTamil') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">25</th>
                                    <td>Telagana</td>
                                    <td><a href="{{ route('tanpuinaTelagana') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">26</th>
                                    <td>Tripura</td>
                                    <td><a href="{{ route('tanpuinaTripura') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">27</th>
                                    <td>Uttaranchal</td>
                                    <td><a href="{{ route('tanpuinaUttaranchal') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">28</th>
                                    <td>Uttar Pradesh</td>
                                    <td><a href="{{ route('tanpuinaUttar') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">29</th>
                                    <td>West Bengal</td>
                                    <td><a href="{{ route('tanpuinaWB') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">30</th>
                                    <td>Andaman and Nicobar Islands</td>
                                    <td><a href="{{ route('tanpuinaAndaman') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">30</th>
                                    <td>Chandigarh</td>
                                    <td><a href="{{ route('tanpuinaChandigarh') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">31</th>
                                    <td>Dadar and Nagar Haveli</td>
                                    <td><a href="{{ route('tanpuinaDadar') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">32</th>
                                    <td>Daman and Diu</td>
                                    <td><a href="{{ route('tanpuinaDaman') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">33</th>
                                    <td>Delhi</td>
                                    <td><a href="{{ route('tanpuinaDelhi') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">34</th>
                                    <td>Lakshadeep</td>
                                    <td><a href="{{ route('tanpuinaLakshadeep') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">35</th>
                                    <td>Pondicherry</td>
                                    <td><a href="{{ route('tanpuinaPondicherry') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">36</th>
                                    <td>Ladakh</td>
                                    <td><a href="{{ route('tanpuinaLadakh') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">37</th>
                                    <td>India ram pawn</td>
                                    <td><a href="{{ route('tanpuinaOthers') }}">Download</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="mt-2 ml-5">
                    <h3 class="mb-1" style="color:#e3342f!important">
                         <b>Districts Of Mizoram</b>
                    </h3>
                    <div style="position: relative;height: 700px;overflow: auto; display: block;">
                        <table class="table table-striped mb-0" style="width:100%;">
                            <thead style="background:#3490dc!important">
                                <tr>
                                    <th scope="col" style="width:10%">#</th>
                                    <th scope="col" style="width:30%">District</th>
                                    <th scope="col" style="width:10%" >Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Aizawl</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaAizawl') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Lunglei</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaLunglei') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Mamit</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaMamit') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Kolasib</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaKolasib') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Champhai</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaChamphai') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Serchhip</td>
                                    <td> 
                                        <a href="{{ route('tanpuinaSerchhip') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Siaha</td>
                                    <td><a href="{{ route('tanpuinaSiaha') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Lawngtlai</td>
                                    <td><a href="{{ route('exportLawngtlai') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Saitual</td>
                                    <td><a href="{{ route('tanpuinaSaitual') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">10</th>
                                    <td>Hnahthial</td>
                                    <td><a href="{{ route('tanpuinaHnahthial') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">11</th>
                                    <td>Khawzawl</td>
                                    <td><a href="{{ route('tanpuinaKhawzawl') }}">Download</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
      </div>  
</div>
@endsection