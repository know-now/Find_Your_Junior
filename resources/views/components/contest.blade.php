{{-- <div>



    <ul>
         @foreach ($contests as $contest)
<li>
  <p> <b> {{ $contest["name"] }}</b></p>
  <a href={{ $contest ["url"] }} target=”_blank”>Register</a>
  <p>Start: {{ date('Y/m/d', (strtotime($contest["start_time"]))) }}</p>

</li>
    @endforeach
</ul>
    <!-- Well begun is half done. - Aristotle -->
</div> --}}

<div class="container">
    <div class="row">
        @foreach ($contests as $contest)
            <div class="col-sm-6 col-md-4 col-lg-2 contest-box">
        
                    <hr style="color:#00a2df;">
                    <p> <b> {{ $contest['name'] }}</b></p>
                    <p>{{ date('Y/m/d', strtotime($contest['start_time'])) }}</p>
                    <div class=""><a href={{ $contest['url'] }} target=”_blank”>Register</a></div>
                
            </div>
        @endforeach

    </div>
    <div class="row">


    </div>
</div>
