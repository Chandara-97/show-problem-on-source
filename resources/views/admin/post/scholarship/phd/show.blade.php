@extends('layout.bone')

@section('title','ដំណឹងអាហារូករណ៍')


@section('style')

@endsection
@section('post2')
    <div class="row">
        <div class="col-xl-3 col-lg-2 col-md-2 col-2"></div>
        <div  data-aos="fade-left" class="btn btn-primary rounded-pill col" >
            <h3 class="header " class="btn btn-white rounded-circle animate__animated animate__bounce" data-aos="animate text on scroll">អនុវិទ្យាល័យនិងវិទ្យាល័យ
                <sup><img src="https://i.ibb.co/wNMDRM4/new.png" alt="new" class="new rounded-circle animate__animated animate__swing" style="width: 7%;"></sup>
            </h3>
        </div>
        <div class="col-xl-3 col-lg-2 col-md-2 col-2"></div>
    </div>
    @foreach($phds as $phd)
        <section class="card rounded card-post-size" data-aos="flip-right">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-3"><img src="{{asset("ScholarshipphdImages/".$phd->image)}}" class="imagepost" alt="imagepost"></div>
                <div class="col-4"></div>
            </div>


            <!-- <img src="https://i1.wp.com/phoura-y.com/wp-content/uploads/2020/11/image.png?resize=1024%2C822&ssl=1" alt=""> -->
            <div class="card-body">


                <div class="d-flex flex-column comment-section" id="myGroup">
                    <?php
                    echo $phd->description;
                    ?>
{{--                    @include('layout.like')--}}
                </div>
                <div>
                    {{$phd->created_at}}
                </div>
            </div>

        </section>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 400, // offset (in px) from the original trigger point
                delay: 0, // values from 0 to 3000, with step 50ms
                duration: 1000 // values from 0 to 3000, with step 50ms
            });
        </script>
        <script>
            function display_ct7() {
                var x = new Date()
                var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
                hours = x.getHours( ) % 12;
                hours = hours ? hours : 12;
                hours=hours.toString().length==1? 0+hours.toString() : hours;

                var minutes=x.getMinutes().toString()
                minutes=minutes.length==1 ? 0+minutes : minutes;

                var seconds=x.getSeconds().toString()
                seconds=seconds.length==1 ? 0+seconds : seconds;

                var month=(x.getMonth() +1).toString();
                month=month.length==1 ? 0+month : month;

                var dt=x.getDate().toString();
                dt=dt.length==1 ? 0+dt : dt;

                var x1=month + "/" + dt + "/" + x.getFullYear();
                x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
                document.getElementById('ct7').innerHTML = x1;
                display_c7();
            }
            function display_c7(){
                var refresh=1000; // Refresh rate in milli seconds
                mytime=setTimeout('display_ct7()',refresh)
            }
            display_c7()
        </script>
    @endforeach
@endsection
