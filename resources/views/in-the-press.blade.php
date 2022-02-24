@extends('frontEnd.layouts.layout') @section('admin_content')

<style>
    .in-the-press-lt h2 {
    font-size: 16px;
    font-weight: 700;
}
    .in-the-press-rt ul li {
    text-decoration: none;
    list-style: none;
}
    .name-sec h3 {
    font-size: 16px;
    font-weight: 600;
        margin-bottom: 2px;
}
    .name-sec {
    margin-bottom: 10px;
}
    .name-sec p {
    font-size: 14px;
    font-weight: 400;
        color: #595A5C;
        
}
    .discription-se p {
    font-size: 14px;
    font-weight: 400;
    color: #030303;
    margin-bottom: 0px;
            line-height: 18px;
}
    .discription-se span {
    font-size: 12px;
    font-weight: 400;
        color: #595A5C;
}
    .in-the-press-rt ul {
    padding-left: 0px;
}
    /*.in-the-press-rt {
    display: flex;
    min-height: 432px;
    align-items: flex-end;
}*/
    .in-the-press h2 {
    font-size: 16px;
    font-weight: 700;
    color: #000000;
}
    .in-the-press ul {
    list-style: none;
    padding-left: 0px;
}
    .in-the-press span {
    font-size: 12px;
    color: #979797;
}
    .in-the-press h4 {
    margin-top: 0px;
    font-size: 16px;
    color: #030303;
    line-height: 20px;
}
    .in-the-press ul li {
    padding: 15px 25px;
    border: 1px solid #E0E0E0;
    box-sizing: border-box;
    border-radius: 5px;
    margin-bottom: 20px;
}
    @media(min-width:1183px){
        .in-the-press-rt {
    display: flex;
    min-height: 365px;
    align-items: flex-end;
}
    }
    </style>
			
            <section class="section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-7">
                            <div class="in-the-press-lt">
                                <h2>Message from our Chief Guest</h2>
                                      <div class="item">    
								<iframe style="    width: 100%;    height: 320px;" src="https://www.youtube.com/embed/OI497TGoZvk?controls=0" title="YouTube 								video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 									picture-in-picture" allowfullscreen></iframe></div>
                                <!--<img src="images/in-the-press.png">-->
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="in-the-press-rt">
                                <ul>
                                    <li><div class="name-sec">
                                        <h3>Mr. Piyush Goyal </h3>
                                        <p>Hon’ble Minister for Commerce and Industry</p>
                                        </div>
                                        <div class="discription-se">
                                            <p>Speaking at Womennovator Global Summit 2021</p>
                                            <span>22nd October, 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="press-faq">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div  class="">
								<div class="panel row">
                                    <div class="col-sm-1">
									<h4> <a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse1" class="collapsed">- 2021</a> </h4>
                                    </div>
                                    <div class="col-sm-10">
									<div id="faq-collapse1" class="panel-collapse in collapse show">
										<div class="in-the-press">
                                            <h2>In the Press</h2>
                                            <ul>
                                                <li>
                                                    <span>20th October, 2021 <!-- |  Yourstory--></span>
                                                <a href="https://www.oneindia.com/india/womennovator-global-summit-2021-kickstarts-union-minister-piyush-goyal-to-be-present-3325664.html?story=6"><h4>Gvriksh kickstarts 7th edition of 'Womennovator Global Summit 2021'</h4></a>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  <!--|  News Patrolling--></span>
                                                <a href="https://indiaeducationdiary.in/womennovator-global-summit-2021-starts-creating-business-and-trading-opportunities-for-emerging-enterprises-and-forging-global-partnerships-to-train-women/"><h4>Womennovator Global Summit 2021 Starts Creating Business And Trading Opportunities For Emerging Enterprises And Forging Global Partnerships To Train Women</h4></a>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  <!--|  OneIndia--></span>
                                                <a href="https://aajkitaazanews.com/gvriksh-kickstarts-seventh-version-of-womennovator-global-summit-2021-piyush-goyal-to-be-current/"><h4>Gvriksh kickstarts Seventh version of ‘Womennovator Global Summit 2021’; Piyush Goyal to be current</h4></a>
                                                </li>
                                                 <li>
                                                    <span>20th October, 2021  <!--|  OneIndia--></span>
                                                <a href=" https://www.womenentrepreneurindia.com/news/gvriksh-commences-womennovator-global-summit-2021-to-recognize-women-entrepreneurs-nwid-1011.html"><h4>GVRIKSH COMMENCES WOMENNOVATOR GLOBAL SUMMIT 2021 TO RECOGNIZE WOMEN ENTREPRENEURS</h4></a>
                                                </li>
                                                   <li>
                                                    <span>18th October, 2021  <!--|  OneIndia--></span>
                                                <a href="https://tecno.dailyhunt.in/news/srilanka/english/yourstory-epaper-yourstory/week+long+womennovator+global+summit+2021+kickstarts-newsid-n324992964?pgs=N&pgn=0&"><h4>Week-long Womennovator Global Summit 2021 kickstarts</h4></a>
                                                </li>
                                            </ul>
                                        </div>
									</div>
                                    </div>
								</div>
								<!--
                                <div class="panel row">
                                    <div class="col-sm-1">
									<h4> <a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse2" class="collapsed">- 2020</a> </h4>
                                    </div>
                                    <div class="col-sm-10">
									<div id="faq-collapse2" class="panel-collapse collapse">
										<div class="in-the-press">
                                            <h2>In the Press</h2>
                                            <ul>
                                                <li>
                                                    <span>22nd October, 2021  |  Yourstory</span>
                                                <h4>Week-long Womennovator Global Summit 2021 kickstarts </h4>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  |  News Patrolling</span>
                                                <h4>Womennovator Global Summit 2021 starts creating business and trading opportunities for emerging enterprises and forging global partnerships to train women</h4>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  |  OneIndia</span>
                                                <h4>Gvriksh kickstarts 7th edition of 'Womennovator Global Summit 2021'</h4>
                                                </li>
                                            </ul>
                                        </div>
									</div>
                                    </div>
								</div>
                                <div class="panel row">
                                    <div class="col-sm-1">
									<h4> <a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse3" class="collapsed">- 2019</a> </h4>
                                    </div>
                                    <div class="col-sm-10">
									<div id="faq-collapse3" class="panel-collapse collapse">
										<div class="in-the-press">
                                            <h2>In the Press</h2>
                                            <ul>
                                                <li>
                                                    <span>22nd October, 2021  |  Yourstory</span>
                                                <h4>Week-long Womennovator Global Summit 2021 kickstarts </h4>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  |  News Patrolling</span>
                                                <h4>Womennovator Global Summit 2021 starts creating business and trading opportunities for emerging enterprises and forging global partnerships to train women</h4>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  |  OneIndia</span>
                                                <h4>Gvriksh kickstarts 7th edition of 'Womennovator Global Summit 2021'</h4>
                                                </li>
                                            </ul>
                                        </div>
									</div>
                                    </div>
								</div>
                                <div class="panel row">
                                    <div class="col-sm-1">
									<h4> <a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse4" class="collapsed">- 2018</a> </h4>
                                    </div>
                                    <div class="col-sm-10">
									<div id="faq-collapse4" class="panel-collapse collapse">
										<div class="in-the-press">
                                            <h2>In the Press</h2>
                                            <ul>
                                                <li>
                                                    <span>22nd October, 2021  |  Yourstory</span>
                                                <h4>Week-long Womennovator Global Summit 2021 kickstarts </h4>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  |  News Patrolling</span>
                                                <h4>Womennovator Global Summit 2021 starts creating business and trading opportunities for emerging enterprises and forging global partnerships to train women</h4>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  |  OneIndia</span>
                                                <h4>Gvriksh kickstarts 7th edition of 'Womennovator Global Summit 2021'</h4>
                                                </li>
                                            </ul>
                                        </div>
									</div>
                                    </div>
								</div>
                                <div class="panel row">
                                    <div class="col-sm-1">
									<h4> <a data-toggle="collapse" data-parent="#faq-accordion" href="#faq-collapse5" class="collapsed">- 2017</a> </h4>
                                    </div>
                                    <div class="col-sm-10">
									<div id="faq-collapse5" class="panel-collapse collapse">
										<div class="in-the-press">
                                            <h2>In the Press</h2>
                                            <ul>
                                                <li>
                                                    <span>22nd October, 2021  |  Yourstory</span>
                                                <h4>Week-long Womennovator Global Summit 2021 kickstarts </h4>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  |  News Patrolling</span>
                                                <h4>Womennovator Global Summit 2021 starts creating business and trading opportunities for emerging enterprises and forging global partnerships to train women</h4>
                                                </li>
                                                <li>
                                                    <span>20th October, 2021  |  OneIndia</span>
                                                <h4>Gvriksh kickstarts 7th edition of 'Womennovator Global Summit 2021'</h4>
                                                </li>
                                            </ul>
                                        </div>
									</div>
                                    </div>
								</div>
								
								-->
								
							</div>
                            
                        </div>
                    </div>
                </div>
            </section>
			
		
			
                        
			
@endsection