@extends('layouts/app')
@section('title','Download Excel')


@section('content')

<div class="container">
    
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
                                        <a href="{{ route('exportAll') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Andhra Pradesh</td>
                                    <td> 
                                        <a href="{{ route('exportAP') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Arunachal Pradesh</td>
                                    <td> 
                                        <a href="{{ route('exportArunachalPradesh') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Assam</td>
                                    <td> 
                                        <a href="{{ route('exportAssam') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Bihar</td>
                                    <td> 
                                        <a href="{{ route('exportBihar') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Chhattisgarh</td>
                                    <td> 
                                        <a href="{{ route('exportChhattisgarh') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Goa</td>
                                    <td><a href="{{ route('exportGoa') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Gujarat</td>
                                    <td><a href="{{ route('exportGujarat') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Haryana</td>
                                    <td><a href="{{ route('exportHaryana') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">10</th>
                                    <td>Himachal Pradesh</td>
                                    <td><a href="{{ route('exportHimachalPradesh') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Jammu and Kashmir</td>
                                    <td><a href="{{ route('exportJK') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Jharkhand</td>
                                    <td><a href="{{ route('exportJharkhand') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Karnataka</td>
                                    <td><a href="{{ route('exportKarnataka') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Kerala</td>
                                    <td><a href="{{ route('exportKerala') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">15</th>
                                    <td>Madya Pradesh</td>
                                    <td><a href="{{ route('exportMadyaPradesh') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Maharashtra</td>
                                    <td><a href="{{ route('exportMaharashtra') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">17</th>
                                    <td>Manipur</td>
                                    <td><a href="{{ route('exportManipur') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">18</th>
                                    <td>Meghalaya</td>
                                    <td><a href="{{ route('exportMeghalaya') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">19</th>
                                    <td>Nagaland</td>
                                    <td><a href="{{ route('exportNagaland') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">20</th>
                                    <td>Orissa</td>
                                    <td><a href="{{ route('exportOrissa') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">21</th>
                                    <td>Punjab</td>
                                    <td><a href="{{ route('exportPunjab') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">22</th>
                                    <td>Rajasthan</td>
                                    <td><a href="{{ route('exportRajasthan') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">23</th>
                                    <td>Sikkim</td>
                                    <td><a href="{{ route('exportSikkim') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">24</th>
                                    <td>Tamil Nadu</td>
                                    <td><a href="{{ route('exportTamilNadu') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">25</th>
                                    <td>Telagana</td>
                                    <td><a href="{{ route('exportTelagana') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">26</th>
                                    <td>Tripura</td>
                                    <td><a href="{{ route('exportTripura') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">27</th>
                                    <td>Uttaranchal</td>
                                    <td><a href="{{ route('exportUttaranchal') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">28</th>
                                    <td>Uttar Pradesh</td>
                                    <td><a href="{{ route('exportUttarPradesh') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">29</th>
                                    <td>West Bengal</td>
                                    <td><a href="{{ route('exportWestBengal') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">30</th>
                                    <td>Andaman and Nicobar Islands</td>
                                    <td><a href="{{ route('exportAndamanAndNicobarIslands') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">30</th>
                                    <td>Chandigarh</td>
                                    <td><a href="{{ route('exportChandigarh') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">31</th>
                                    <td>Dadar and Nagar Haveli</td>
                                    <td><a href="{{ route('exportDadarAndNagarHaveli') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">32</th>
                                    <td>Daman and Diu</td>
                                    <td><a href="{{ route('exportDamanAndDiu') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">33</th>
                                    <td>Delhi</td>
                                    <td><a href="{{ route('exportDelhi') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">34</th>
                                    <td>Lakshadeep</td>
                                    <td><a href="{{ route('exportLakshadeep') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">35</th>
                                    <td>Pondicherry</td>
                                    <td><a href="{{ route('exportPondicherry') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">36</th>
                                    <td>Ladakh</td>
                                    <td><a href="{{ route('exportLadakh') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">37</th>
                                    <td>India ram pawn</td>
                                    <td><a href="{{ route('exportIndiaRamPawn') }}">Download</a></td>
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
                                        <a href="{{ route('exportAizawl') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Lunglei</td>
                                    <td> 
                                        <a href="{{ route('exportLunglei') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Mamit</td>
                                    <td> 
                                        <a href="{{ route('exportMamit') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Kolasib</td>
                                    <td> 
                                        <a href="{{ route('exportKolasib') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Champhai</td>
                                    <td> 
                                        <a href="{{ route('exportChamphai') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Serchhip</td>
                                    <td> 
                                        <a href="{{ route('exportSerchhip') }}">
                                            Download
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Siaha</td>
                                    <td><a href="{{ route('exportSiaha') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Lawngtlai</td>
                                    <td><a href="{{ route('exportLawngtlai') }}">Download</a></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Saitual</td>
                                    <td><a href="{{ route('exportSaitual') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">10</th>
                                    <td>Hnahthial</td>
                                    <td><a href="{{ route('exportHnahthial') }}">Download</a></td>
                                </tr>

                                <tr>
                                    <th scope="row">11</th>
                                    <td>Khawzawl</td>
                                    <td><a href="{{ route('exportKhawzawl') }}">Download</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
      </div>  
</div>



@endsection