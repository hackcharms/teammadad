@extends('layouts.app',['active'=>'about','title'=>'About'])
@section('content')
@include('layouts._index',['index'=>'About'])

<div class="site-section mb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 mb-5">
                <h1>Our History</h1>
            </div>
            <div class="col-md-6 para">
                <p class="lead">
                    टीम मदद ग्रुप की शुरुआत  राजकीय पॉलिटेक्निक लखनऊ के पूर्व छात्र मोहित सिंह ,रमन यादव और आयुष साहू ने कोरोना माहमारी
                     में लॉक  डाउन  के दौरान , बाहर से आने वाले लोगो और दिहाड़ी मजदूरों को खाने पीने की वस्तुए मुहैया कराकर प्रारंभ की।
                    </p>
                    <p>
                     जब यह बात सोशल मीडिया पर डाली गयी  तो राजकीय पॉलिटेक्निक के पूर्व छात्र और एलुमनी सपोर्ट में आये।
                    १ हफ्ते के अंदर टीम से 100 से अधिक लोग जुड़ गये और टीम  एक महीने तक लगातार कार्य करती रही।
                    जब यह बात स्टाफ को पता चली तब राजकीय  पॉलिटेक्निक लखनऊ के स्टाफ भी टीम के साथ समाज सेवा में आगे आये।
                    1 महीने के अंदर 321 लोग टीम मदद का हिस्सा बने और फिर  जरूरतमंद परिवारों को राशन की पूरी किट दी जाने लगी ।
                    टीम ने फिर <strong>back to home</strong> मिशन की शुरुआत की जिसकी जिम्मेदारी श्री अमित कुमार को दी गयी ।
                    इसके बाद टीम मदद ने नॉएडा  दिल्ली में फसे हुए जरूरतमंद लोगो की <strong>vivo mobile company</strong> में नौकरी की व्यवस्था करायी।
                    </p>
                </div>
                <div class="col-md-6 para">
                <p>
                    लोगो के लगातार सहयोग से  आज <strong>टीम मदद</strong> ने कई जिलों में कार्य   करना शुरू कर दिया है।
                    जिसमे मुख्य रूप से <strong> लखनऊ ,इलाहबाद ,कानपुर , कुशीनगर और बलिआ </strong> में कार्य कर रही है।
                    वर्तमान मे कई जिलों के पॉलिटेक्निक संस्थान के छात्र  और अन्य संस्थाओ के लोग टीम मदद  से  जुड़ कर टीम मदद
                    का हिस्सा बनकर जरूरतमंदो की सहायता कर रहे है।
                </p>
                <p> टीम मदद को नयी सोच देने में रजत श्रीवास्तव का महत्वपूर्ण योगदान रहा है।और इसको प्रारम्भ करने के बाद आगे बढ़ाने में
                    <strong> श्री सनत पांडेय सर ,श्री एस पी श्रीवास्तव सर ,श्री अनिल भारती सर , श्री दीपक सिंह सर ,और श्री अलोक मौर्या एवं श्री विपुल श्रीवास्तव ,त्रिभुवन सर,विनोद चौहान सर
                    ,दिग्विजय सर ,सचिन गौतम दिशा गुप्ता,विवेक गौतम ,रिषभ शर्मा ,सचिन गौतम </strong>।
                     इसको प्रमोट करने में <strong> ज़ुबैर अहमद , शशि  गोस्वामी और युवराज सिंह</strong> का  का महत्वपूर्ण योगदान रहा है ।
                    </p>
            </div>
            <div class="col-md-12 mb-2 mt-4">
                <h3>
                    {{-- टीम मदद का उद्देश्य --}}
                    Team Motive
                </h3>
            </div>
            <div class=" para">
                <p>
                    <ol>
                        <strong>
                        <li>

                            टीम मदद का मुख्य उद्देश्य जरूरत मंद और एक दूसरो की मदद करना है मदद किसी भी प्रकार की हो सकती है जैसे गरीबो को भोजन उपलब्ध कराना व  आर्थिक ,शैक्षिक ,रोजगार अन्य किसी भी प्रकार की मदद करना ।
                        </li>
                        <li>
                             डिप्लोमा के छात्र देश  विदेश में व् देश के कोने-कोने में मौजूद है उन सभी को एक ही प्लटफॉर्म पर लाना  एक दुसरे की मदद के लिए प्रेरित करना है ।
                        </li>
                        <li>

                             डिप्लोमा के नये छात्रों को सबसे ज्यादा बेरोजगारी की समस्या का सामना करना पड़ता है उन सभी के लिए ऐसा प्लटफॉर्म तैयार करना है जिससे फ्रेशर छात्रों को रोजगार आसानी से उपलब्ध हो सके ।
                        </li>
                        <li>
                            टीम मदद से ऐसे भी लोग जुड़े है जो डिप्लोमा करके खुद की कंपनी बनायी और आज कई लोगो को रोजगार दे रहे है ।
                            टीम मदद नये उद्यमी तैयार करेगी और उद्यमिता को बढ़ावा देगी व् उनको प्रमोट करेगी ।
                        </li>
                        <li>
                             टीम मदद प्रत्येक संसथान में टीम मदद बुक बैंक खोलेगी जिससे जरूरत मंद छात्रों को निशुल्क किताबे  प्राप्त हो सके और  उसे ख़रीदना न पड़े ।

                        </li>
                        <li>
                             यदि किसी छात्र एवं छात्रा  को  कोई  समस्या होती है तो टीम मदद उसे कानूनी रूप से  समाधान करने का प्रयास करेगी ।

                        </li>
                    </strong>
                    </ol>
                </p>
            </div>
            <div class="row col-12
            d-flex justify-content-center
            text-center
            ">
                <div class="col-md-12 mb-2 mt-4">
                    <h3>
                        {{-- टीम मदद का उद्देश्य --}}
                        Team Mission
                    </h3>
                </div>
                <div class=" para ">
                    <strong >
                        मानवता से बड़ा कोई धर्म नहीं होता है मानवता ,गरीबी और बहिष्कार, संघर्ष और आपदा की स्थितियों में काम करने वाला एक स्वतंत्र दान है।
                         समस्त मानव जाति को एक सूत्रधार में बांधना और धर्म ,जातिबंधन से हटकर एक दुसरे की मदद के लिए प्रेरित करना है
                          हम कमजोर लोगों के साथ उनकी बुनियादी जरूरतों को पूरा करने में मदद करते हैं,
                        उनकी रहने की स्थिति में सुधार करते हैं और उनकी गरिमा और मौलिक अधिकारों के लिए सम्मान को बढ़ावा देते हैं।
                    </strong>
            </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12 mb-5 text-center mt-5">
            <h2>Leadership</h2>
        </div>
        {{-- @include('layouts._userAbout',) --}}
    </div>
    @endsection
