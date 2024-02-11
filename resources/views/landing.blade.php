@extends('main')
@section('styles')
    <style>
        :root {
            --bg-rad1: #0D2601;
            --bg-rad2: #41672f;
            --color1: #37930d;
            --border1: #AD7419;
            --bg1: #E1A22C;
            --border2: #2D8A03;
            --bg2: #e00639;
            --bg3: #F3FFED;
            /* Set your desired color value */
        }

        .bg-gradiant {
            background-image: linear-gradient(180deg, #0D2601 0%, #41672f 100%);
            padding-bottom: 30px;
        }

        .border1 {
            margin: 10px 10px;
            padding: 30px 50px;
            border-radius: 10px;
            border: 1px solid #37930d;
        }

        .text1 {
            color: aliceblue;
            font-size: 38px;
            line-height: 50px;
            font-weight: bolder;
            text-align: center;
        }

        .order {
            width: fit-content;
            margin: 0 auto;
            padding: 10px 15px;
            border: 2px solid #AD7419;
            border-radius: 10px;
            background-color: #E1A22C;
            box-shadow: 5px 5px 5px #615b5b;
        }

        .land-video {
            margin: 15px 35px;
            border: 10px solid #2D8A03;
            border-radius: 10px;
            height: 300px;
        }

        .section2 {
            margin: 50px 10px;
            background-color: var(--border2);
            padding: 50px 0px 0px 0px;
            border-radius: 10px;
        }

        .card {
            width: 300px;
            margin: 25px auto;
            padding: 25px;
            border-radius: 10px;
            font-size: 20px;
            text-align: center;

        }

        .bg-color1 {
            background-color: var(--bg2);
            color: aliceblue;
        }

        .dotted-line {
            border-style: dotted;
            border-width: 2px;

        }

        .color1 {
            color: var(--border2);
        }

        .section3 {
            background-color: var(--bg3);
            padding: 100px 0 0 0;
        }

        .landing3 {
            background-color: rgb(254, 254, 254);
            margin: 0px 10px 0 10px;

        }

        .hcard {
            border: 10px solid var(--border2);
            border-radius: 20px;
            font-size: 20px;
            font-weight: 700;
            padding: 10px;
            text-align: center;
        }
        .landing3 li{
            display: flex;
            border-bottom: 1px solid rgb(42, 36, 36);
            margin: 10px 0;
        }
        .landing3 ul{
            margin-top: 40px;
        }

        @media(max-width:600px) {
            .text1 {
                font-size: 25px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container mx-auto">
        <div class=" bg-gradiant">
            <div class="w-full flex justify-center py-6">
                <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/logo.png" alt="">
            </div>
            <div class="border1">
                <div class="text1">প্রতিদিন ১ গ্লাস সজনে পাতার জুস আপনাকে ও আপনার পরিবারকে <span
                        class="text-yellow-600">৩০০টি রোগ</span>
                    থেকে রক্ষা করবে যা গবেষনায় পরীক্ষিত !!</div>
            </div>
            <div class="text-center text-white my-6 text-2xl mx-4">৫২৫ গ্রাম প্রিমিয়াম সজিনা পাউডার + ১০০ গ্রাম কালোজিরা মধু
                ফ্রি ।</div>
            <div class="order ">
                <a href="/landing-34#placeAnOrder" class="flex justify-center">
                    <span class="me-2 text-2xl font-bold text-white">অর্ডার করতে ক্লিক করুন</span>
                    <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/hand.png"
                        alt=""></a>
            </div>
            <div class="">
                <div id="" class="">
                    <div class="land-video">
                        <div style="width: 100%; height: 100%;"><iframe frameborder="0" allowfullscreen=""
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                title="Funnel Liner Logo Launching Vedio | The First Automated E Commerce Sales Funnel in Bangladesh."
                                width="100%" height="100%"
                                src="https://www.youtube.com/embed/uFjU5zFJx3E?autoplay=0&amp;mute=0&amp;controls=0&amp;origin=https%3A%2F%2Fpreview.funnelliner.xyz&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;enablejsapi=1&amp;widgetid=1"
                                id="widget2"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section2">
            <div class="card bg-color1">আমাদের থেকে বিস্তারিত জানতে এই নাম্বারে কল করুন <b> 1234567890 </b></div>
            <div class="card bg-white color1">
                <div class="line-through">৪০০ গ্রাম সজিনা পাতার পাউডারের রেগুলার প্রাইস- ১৫০০/=</div>
                <div class="dotted-line"></div>
                <div>৪০০ গ্রাম সজিনা পাতার পাউডারের <span>অফার প্রাইস- ১০৫০/=</span></div>
            </div>
            <div class="order ">
                <a href="/landing-34#placeAnOrder" class="flex justify-center">
                    <span class="me-2 text-2xl font-bold text-white">অর্ডার করতে ক্লিক করুন</span>
                    <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/hand.png"
                        alt=""></a>
            </div>
        </div>
        <div class="section3">
            <div class="landing3">
                <div class="hcard">সজিনা পাতার উপকারিতা</div>
                <ul>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>উচ্চ রক্তচাপ নিয়ন্ত্রণে রাখে।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>এটির এন্টি-ব্যাকটেরিয়াল বৈশিষ্ট্য বিদ্যমান। এটি যকৃত ও কিডনী সুস্থ্য রাখতে
                            এবং রূপের সৌন্দর্য বর্ধক হিসেবেও কাজ করে থাকে।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>রক্তে কোলেস্টেরল কমায়।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>এসিডিটি বা গ্যাস্ট্রিক নিয়ন্ত্রণে রাখে।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>শরীরে কোলেস্টেরল এর মাত্রা নিয়ন্ত্রণেও অন্যতম অবদান রাখে।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>রক্ত স্বল্পতা দুর করে।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>মানুষের শরীরের যে ৯ টি এমাইনো এসিড খাদ্যের মাধ্যমে সরবরাহ করতে হয়, তার
                            সবগুলোই এই সজনে পাতা গুড়ার মধ্যে বিদ্যমান।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>শরীরে সুগারের মাত্রা নিয়ন্ত্রণের মাধ্যমে ডায়াবেটিসের মত কঠিন রোগের বিরুদ্ধে
                            কাজ করে থাকে।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>ত্বকের জন্য উপকারী।</p>
                    </li>
                    <li> <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>ঠান্ডা জনিত সমস্যা দূর করে।</p>
                    </li>
                </ul>
          
            
                <div class="hcard">সেবনে সঠিক নিয়ম</div>
                <ul>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>খালি পেটে এক গ্লাস পানিতে ২ চা চামচ সজনে পাতা মিক্স করে খেতে পারেন।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>মধুর সাথে মিক্স করে খেতে পারেন।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>দুধের সাথে মিক্স করে খেতে পারেন।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>ডালের সাথে মিক্স করে খেতে পারেন।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>বিভিন্ন ধরনের ভাজির সাথে মিশিয়ে খাওয়া যায়।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>পেয়ারার সাথে মিক্স করে খেতে পারেন।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>আমড়ার সাথে মিক্স করে খেতে পারেন।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>কাঁচা আমের সাথে মিশিয়ে খেতে পারেন।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>তরকারির সাথে মিক্স করে খেতে পারেন।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>ত্বকের জন্য উপকারী।</p>
                    </li>
                    <li> <img
                            src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                            alt="">
                        <p>ঠান্ডা জনিত সমস্যা দূর করে।</p>
                    </li>
                </ul>
            </div>
            <div class="order">
                <a href="/landing-34#placeAnOrder" class="flex justify-center">
                    <span class="me-2 text-2xl font-bold text-white">অর্ডার করতে ক্লিক করুন</span>
                    <img src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/hand.png"
                        alt=""></a>
            </div>
        </div>
      
       

       
        <section class="Landing__34__benifit_sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="Landing__34__benifit_content">
                            <h2>সজিনা পাতার উপকারিতা</h2>
                            <ul>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>উচ্চ রক্তচাপ নিয়ন্ত্রণে রাখে।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>এটির এন্টি-ব্যাকটেরিয়াল বৈশিষ্ট্য বিদ্যমান। এটি যকৃত ও কিডনী সুস্থ্য রাখতে
                                        এবং রূপের সৌন্দর্য বর্ধক হিসেবেও কাজ করে থাকে।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>রক্তে কোলেস্টেরল কমায়।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>এসিডিটি বা গ্যাস্ট্রিক নিয়ন্ত্রণে রাখে।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>শরীরে কোলেস্টেরল এর মাত্রা নিয়ন্ত্রণেও অন্যতম অবদান রাখে।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>রক্ত স্বল্পতা দুর করে।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>মানুষের শরীরের যে ৯ টি এমাইনো এসিড খাদ্যের মাধ্যমে সরবরাহ করতে হয়, তার
                                        সবগুলোই এই সজনে পাতা গুড়ার মধ্যে বিদ্যমান।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>শরীরে সুগারের মাত্রা নিয়ন্ত্রণের মাধ্যমে ডায়াবেটিসের মত কঠিন রোগের বিরুদ্ধে
                                        কাজ করে থাকে।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>ত্বকের জন্য উপকারী।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arrow.png"
                                        alt="">
                                    <p>ঠান্ডা জনিত সমস্যা দূর করে।</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    
                    </div>
                    <div class="Landing__34__Button3">
                        <div class="Order"><a href="/landing-34#placeAnOrder">অর্ডার করতে ক্লিক করুন <img
                                    src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/hand.png"
                                    alt=""></a></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="Section__Gaps"></div>
        <section>
            <div class="container">
                <div class="justify-content-center row">
                    <div class="col-lg-6 col-12">
                        <div class="Landing__34__Banner2">
                            <h4>গ্রাম থেকে সংগ্রহ করা শতভাগ ন্যাচারাল সজিনা পাতা নিজেদের তত্বাবধানে স্বাস্থ্য সম্মত
                                পরিবেশে রোদে শুকিয়ে গুড়া করা হয়।প্রোডাক্ট হাতে পেয়ে, দেখে, কোয়ালিটি চেক করে পেমেন্টে
                                করার সুবিধা ।</h4><img
                                src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/order-baner.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="Landing__34__benifit_sec2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="Landing__34__benifit_contentDiv">
                            <h2 class="Landing__34__benifit_contenth2">আমাদের উপর কেন আস্থা রাখবেন ??</h2>
                        </div>
                    </div>
                </div>
                <div class=" d-flex align-items-center justify-content-between  row">
                    <div class="col-lg-6">
                        <div class="Landing__34__benifit_content2">
                            <ul>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arr2.png"
                                        alt="">
                                    <p>ধুলাবালিমুক্ত শতভাগ হাইজেনিক মেইনটেইন করে, সম্পুর্ন নিজস্ব তত্বাবধানে
                                        প্রস্তুতকৃত প্রিমিয়াম সজিনা পাতা গুড়া</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arr2.png"
                                        alt="">
                                    <p>প্রোডাক্ট হাতে পেয়ে, দেখে, কোয়ালিটি চেক করে পেমেন্টে করার সুবিধা ।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arr2.png"
                                        alt="">
                                    <p>সারা বাংলাদেশে কুরিয়ারের মাধ্যমে হোম ডেলিভারি পাবেন ।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arr2.png"
                                        alt="">
                                    <p>যে কোন সময় আমাদের সাথে যোগাযোগ করতে পারবেন ।</p>
                                </li>
                                <li> <img
                                        src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/arr2.png"
                                        alt="">
                                    <p>অগ্রীম এক টাকাও দিতে হবে না। ডেলিভারি ম্যান এর কাছ থেকে প্রোডাক্ট বুঝে পেয়ে
                                        তারপর টাকা দিবেন।</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="Landing__34__benifit_content4"><img
                                src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/moringa.png"
                                alt=""></div>
                    </div>
                </div>
                <div class="Landing__34__Button3">
                    <div class="Order"><a href="/landing-34#placeAnOrder">অর্ডার করতে ক্লিক করুন <img
                                src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/hand.png"
                                alt=""></a></div>
                </div>
            </div>
        </section>
        <section class="Landing__34__eat_sec2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="Landing__34__benifit_contentDiv">
                            <h2 class="Landing__34__benifit_contenth2  Landing__34__benifit_contenth3">এতো কিছু
                                থাকতে সজিনা পাতার গুড়া কেনো খাবেন ?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="Landing__34__why_card">
                            <p>শরীরে সুগারের মাত্রা নিয়ন্ত্রণের মাধ্যমে ডায়াবেটিসের মত কঠিন রোগের বিরুদ্ধে কাজ করে
                                থাকে।</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="Landing__34__why_card">
                            <p>নিয়মিত সজনে পাতা খেলে মুখে রুচি বাড়ে।</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="Landing__34__why_card">
                            <p>লিভার ও কিডনি সুস্থ রাখতে সহায়তা করে।</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="Landing__34__why_card">
                            <p>উচ্চ রক্ত চাপ নিয়ন্ত্রণে থাকবে।</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="Landing__34__why_card">
                            <p>শরীরে বয়সের ছাপ সহজে পরে না।</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="Landing__34__why_card">
                            <p>রোগ প্রতিরোধ ক্ষমতা বৃদ্ধি করে।</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="Landing__34__why_card">
                            <p>ওজন কমানোর জন্য দারুণ সহায়ক হবে।</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="Landing__34__why_card">
                            <p>জ্বর,কাশি ও ঠান্ডা জনিত সমস্যা দূর করে।</p>
                        </div>
                    </div>
                </div>
                <div class="Landing__34__Button3">
                    <div class="Order"><a href="/landing-34#placeAnOrder">অর্ডার করতে ক্লিক করুন <img
                                src="https://landing-page-images-1.s3.ap-south-1.amazonaws.com/landing-34/hand.png"
                                alt=""></a></div>
                </div>
            </div>
        </section>
        <div class="Section__Gaps"></div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="Landing__34__price">
                            <h2>মরিঙ্গা পাউডার প্রাইস</h2>
                            <p>সাশ্রয়ী দামে সেরা পণ্য</p>
                            <div class="Landing__34__price2">
                                <h4>৫০০ গ্রাম মরিঙ্গা পাউডার এর পূর্ব মূল্যঃ ১২৫০ টাকা</h4>
                                <h5>১০৫০ টাকার প্যাকেজটি ৮৫০ টাকা অফারটি সীমিত সময়ের জন্য</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="Section__Gaps"></div>
        <div id="CustomerReview" class="CustomerReview">
            <section id="CustomerReviewContent" class="customer-review_CustomerReviewContent__QAt_k">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>আমাদের কাস্টমার রিভিউ</h2>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div id="CustomerReviewImg" class="customer-review_CustomerReviewImg__1Fuey"><img
                                    src="/images/customer-review/customer-review1.png" alt=""></div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div id="CustomerReviewImg" class="customer-review_CustomerReviewImg__1Fuey"><img
                                    src="/images/customer-review/customer-review2.png" alt=""></div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div id="CustomerReviewImg" class="customer-review_CustomerReviewImg__1Fuey"><img
                                    src="/images/customer-review/customer-review3.png" alt=""></div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div id="CustomerReviewImg" class="customer-review_CustomerReviewImg__1Fuey"><img
                                    src="/images/customer-review/customer-review1.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="placeAnOrder">
            <section id="OrderConfirmFrom" class="order_OrderConfirmFrom__eiWmc">
                <div class="container">
                    <div class="row">
                        <h2>তাই আর দেরি না করে আজই অর্ডার করুন </h2>
                        <div class="col-lg-7">
                            <div id="OrderConfirmLeft" class="order_OrderConfirmLeft__HZHqT">
                                <h3>Billing details</h3>
                                <div id="CustomeInput" class="order_CustomeInput__k6j_b"><input type="text"
                                        name="" placeholder="আপনার নাম লিখুন *"></div>
                                <div id="CustomeInput" class="order_CustomeInput__k6j_b"><input type="text"
                                        name="" placeholder="আপনার মোবাইল নাম্বার লিখুন *"></div>
                                <div id="CustomeInput" class="order_CustomeInput__k6j_b"><input type="text"
                                        name="" placeholder="আপনার সম্পূর্ণ ঠিকানা লিখুন *"></div>
                                <div id="Payment" class="order_Payment__H_muv">
                                    <h3>Payment</h3>
                                    <div id="CustomeInput" class="order_CustomeInput__k6j_b order_d_flex__P2VQu">
                                        <input type="checkbox" name="" id="CashOn" checked=""><label
                                            for="CashOn">ক্যাশ অন ডেলিভারি</label>
                                    </div>
                                    <div id="ArrowBg" class="order_ArrowBg__aUsND">
                                        <p>Pay with cash on delivery.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div id="OrderConfirmRight" class="order_OrderConfirmRight__9BH89">
                                <h3>Your order</h3>
                                <ul>
                                    <li>
                                        <h4>Product</h4>
                                        <h5>Subtotal</h5>
                                    </li>
                                    <li>
                                        <div id="left" class="order_left__HNlRT order_d_flex__P2VQu">
                                            <div id="img" class="order_img__nMxcc"><img src="images/product.svg"
                                                    alt=""></div>
                                            <p>Flower Of Story Men’s Perfume Set Boss</p>
                                        </div>
                                        <div id="right" class="order_right__uO4sF order_d_flex__P2VQu"><input
                                                type="number">
                                            <h5> ৳ 1,690</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <h5>Subtotal</h5>
                                        <h5>1,690.00</h5>
                                    </li>
                                    <li>
                                        <h5>Shipping</h5>
                                        <h5>
                                            <div id="checkbox" class="order_checkbox__TScFd order_d_flex__P2VQu">
                                                <input type="radio" id="Inside" name="checkbox"><label
                                                    for="Inside">Inside Dhaka : ৳ 00.00</label>
                                            </div>
                                            <div id="checkbox" class="order_checkbox__TScFd order_d_flex__P2VQu">
                                                <input type="radio" id="Outside" name="checkbox"><label
                                                    for="Outside">Outside Dhaka: ৳ 00.00</label>
                                            </div>
                                        </h5>
                                    </li>
                                    <li>
                                        <h4>Total</h4>
                                        <h4>1,690.00</h4>
                                    </li>
                                </ul><button> <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 24 24" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.00436 6.41662L0.761719 3.17398L2.17593 1.75977L5.41857 5.00241H20.6603C21.2126 5.00241 21.6603 5.45012 21.6603 6.00241C21.6603 6.09973 21.6461 6.19653 21.6182 6.28975L19.2182 14.2898C19.0913 14.7127 18.7019 15.0024 18.2603 15.0024H6.00436V17.0024H17.0044V19.0024H5.00436C4.45207 19.0024 4.00436 18.5547 4.00436 18.0024V6.41662ZM6.00436 7.00241V13.0024H17.5163L19.3163 7.00241H6.00436ZM5.50436 23.0024C4.67593 23.0024 4.00436 22.3308 4.00436 21.5024C4.00436 20.674 4.67593 20.0024 5.50436 20.0024C6.33279 20.0024 7.00436 20.674 7.00436 21.5024C7.00436 22.3308 6.33279 23.0024 5.50436 23.0024ZM17.5044 23.0024C16.6759 23.0024 16.0044 22.3308 16.0044 21.5024C16.0044 20.674 16.6759 20.0024 17.5044 20.0024C18.3328 20.0024 19.0044 20.674 19.0044 21.5024C19.0044 22.3308 18.3328 23.0024 17.5044 23.0024Z">
                                        </path>
                                    </svg> Place Order BDT 1,690.00</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="footer4_Footer4__v948q">
            <section class="footer4_Footer4Sec__Xz0We">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer4_FooterMainDiv__uWQWn">
                                <div class="footer4_FooterMainDiv1__i4BvN"><a href="/landing-34#">
                                        <h4> <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 24 24" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path
                                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z">
                                                </path>
                                            </svg> Kuril, Vatara, Dhaka-1229, Bangladesh</h4>
                                    </a></div>
                                <div class="footer4_FooterMainDiv2__wjIT7"><a href="/landing-34">
                                        <h4> Privacy Policy</h4>
                                    </a><a href="/landing-34">
                                        <h4> Terms &amp; Conditions</h4>
                                    </a></div>
                            </div>
                            <div id="tinyFooter2" class="footer4_tinyFooter2__F01lH">
                                <div class="footer4_Hr__iD0vj"></div>
                                <div>
                                    <p>© 2024 All Rights Reserved Designed by <a href="https://funnelliner.com/">Funnel
                                            Liner</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

{{-- 
        <link rel="preload" href="https://preview.funnelliner.xyz/_next/static/css/25e2d5e4d00fc798.css" as="style">
        <link rel="stylesheet" href="https://preview.funnelliner.xyz/_next/static/css/25e2d5e4d00fc798.css" data-n-g="">
        <link rel="preload" href="https://preview.funnelliner.xyz/_next/static/css/2021418a5e7caf55.css" as="style">
        <link rel="stylesheet" href="https://preview.funnelliner.xyz/_next/static/css/2021418a5e7caf55.css" data-n-p=""><noscript
            data-n-css=""></noscript>
        <script type="text/javascript" id="www-widgetapi-script"
            src="https://www.youtube.com/s/player/5e928255/www-widgetapi.vflset/www-widgetapi.js" async=""></script>
        <script defer="" nomodule="" src="https://preview.funnelliner.xyz/_next/static/chunks/polyfills-78c92fac7aa8fdd8.js"></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/webpack-0883f6e602359584.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/framework-0d6ea1a7548c6e4f.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/main-a192e1d256adfc34.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/pages/_app-d01dcc6209908786.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/78e521c3-ed196b0c8bbd9143.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/252f366e-e1d2233e2219ef84.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/9678-e5b38d5ff87a497e.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/3931-78a709f20f6a2ca1.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/chunks/pages/landing-34-c05c7dd97be7a6bc.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/8ZCiJa4AZL4bT4qhWltbh/_buildManifest.js" defer=""></script>
        <script src="https://preview.funnelliner.xyz/_next/static/8ZCiJa4AZL4bT4qhWltbh/_ssgManifest.js" defer=""></script>
        <script type="text/javascript" charset="utf8" async="" src="https://www.youtube.com/iframe_api"></script>
     --}}
