@extends('layouts.default')
@section('styles')
<link rel="stylesheet" href="/vendor/swiper/dist/css/swiper.min.css" media="screen" title="no title">
@stop
@section('content')
<section class="section nopadding">
    <!-- Swiper -->
    <div class="swiper-slider fullwidth">
        <div class="swiper-container" data-slidesperview="1" data-autoplay="5000" data-loop="false" data-keyboardcontrol="true">
            <div class="swiper-wrapper">
                <div class="swiper-slide p-t-80 p-b-80">
                    <div class="overlay">
                        <div class="overlay-wrapper">
                            <div class="overlay-inner parallax-background" style="background-image: url('/images/index-1.jpg');"></div>
                            <div class="overlay-inner b-d op-3"></div>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div class="table-container">
                            <div class="table-content">
                                <div class="container text-center">
                                    <h1 class="text-white font-large font-light animated">中国数字微生态领军者</h1>
                                    <p class="lead text-white animated">数十年的技术积累，数以万计的项目经验已为谱元打下了坚实的技术基础。。。</p>
                                    <div class="buttons-group animated">
                                        <a href="/partner" class="button button-border button-rounded button-white">洽谈合作</a>
                                        <a href="#number" class="button button-white button-link icon-right scrollto">了解更多<i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide p-t-80 p-b-80">
                    <div class="overlay">
                        <div class="overlay-wrapper">
                            <div class="overlay-inner parallax-background" style="background-image: url('/images/index-2.jpg');"></div>
                            <div class="overlay-inner b-d op-3"></div>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div class="table-container">
                            <div class="table-content">
                                <div class="container text-center">
                                    <h1 class="text-white font-large font-light animated">粑粑说</h1>
                                    <p class="lead text-white animated">基于人体“第二基因组”的权威健康检测产品</p>
                                    <a href="/baba" class="button button-border button-rounded button-white">了解产品</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide p-t-80 p-b-80">
                    <div class="overlay">
                        <div class="overlay-wrapper">
                            <div class="overlay-inner parallax-background" style="background-image: url('/images/index-3.jpg');"></div>
                            <div class="overlay-inner b-d op-3"></div>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div class="table-container">
                            <div class="table-content">
                                <div class="container text-center">
                                    <h1 class="heading-uppercase text-white font-bold font-xxlarge marginbottom-25 animated">健康肠道</h1>
                                    <p class="lead text-white animated">肠道微生物在人体健康中扮演着举足轻重的角色，谱元基于此开发出了多种适合个年龄层的检测产品</p>
                                    <div class="buttons-group animated">
                                        <a href="/partner" class="button button-border button-rounded button-white">洽谈合作</a>
                                        <a href="#number" class="button button-white button-link icon-right scrollto">了解更多<i class="fa fa-angle-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
        </div>
    </div>
</section>
<section id="number" class="section text-center">
    <div class="container">
        <div class="row header">
            <div class="col-md-12">
                <h2 class="subtitle">
                走进谱元
                </h2>
                <h3>
                数据说话
                </h3>
            </div>
        </div>
        <div class="row number">
            <div class="col-sm-6 col-md-3">
                <div class="number-block">
                    <span class="count">10<span class="index">1</span></span>
                    <span class="text">十年的微生物（宏）基因组研究经验</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="number-block">
                    <span class="count">10<span class="index">3</span></span>
                    <span class="text">1000㎡P2+级别高规格生物实验室</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="number-block">
                    <span class="count">10<span class="index">4</span></span>
                    <span class="text">10000份微生物样品处理经验</span>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="number-block">
                    <span class="count">10<span class="index">5</span></span>
                    <span class="text">100000份微生物基因数据分析经验</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section p-t-130 p-b-130 sm-pt-90 sm-n-p-b" style="background-color: #f5f7f9">
    <div class="container">
        <div class="row">
            <div class="col-md-5 text-left sm-text-center">
                <h4 class="subtitle">关于谱元</h4>
                <h3 class="m-b-50">中国微生态研究的引领者</h3>
                <p>
                    谱元始建于2014年，在建立之初就是为了填补中国微生态研究领域的空白，谱元科技专注于微生物检测领域，公司骨干成员在《自然》、《科学》、《新英格兰医学杂志》等知名刊物上发表过数十篇高水平的SCI论文，并拥有数项国内外技术发明专利...<a href="/us" class="button-link">了解更多</a>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid container-overlay">
        <div class="row">
            <div class="col-md-6 col-md-offset-6 col-background full-background bg-bottom-right" style="background-image:url('/images/puyuan.png')">
                <img src="/images/puyuan.png" class="img-responsive mobile-image" alt="">
            </div>
        </div>
    </div>
</section>
<section class="section" id="steps-path">
    <div class="container">
        <div class="row header">
            <div class="col-md-12">
                <h2 class="subtitle text-center">
                肠道微生物
                </h2>
                <h3 class="text-center">
                人体第二基因组
                </h3>
            </div>
        </div>
        <ul class="step-path-block">
            <li>
                <div class="step-img"><img src="/images/index-step-1.png" class="screen" alt=""></div>
                <div class="step-text">
                    <h3 class="title">样品采集</h3>
                    <p>专利型采样管，保证样品采集与运输稳定可靠</p>
                </div>
            </li>
            <li class="reverse">
                <div class="step-img"><img src="/images/index-step-2.png" class="screen" alt=""></div>
                <div class="step-text">
                    <h3 class="title">样品寄送</h3>
                    <p>常温运输一样可以保证样品稳定</p>
                </div>
            </li>
            <li>
                <div class="step-img"><img src="/images/index-step-3.png" class="screen" alt=""></div>
                <div class="step-text">
                    <h3 class="title">实验处理</h3>
                    <p>富有经验的团队和专业的高通量测序仪</p>
                </div>
            </li>
            <li class="reverse">
                <div class="step-img"><img src="/images/index-step-4.png" class="screen" alt=""></div>
                <div class="step-text">
                    <h3 class="title">分析解读</h3>
                    <p>数万份数据分析经验，挖掘你想要的任何信息</p>
                </div>
            </li>
            <li>
                <div class="step-img"><img src="/images/index-step-5.png" class="screen" alt=""></div>
                <div class="step-text">
                    <h3 class="title">肠道健康管理</h3>
                    <p>专业的营养师团队随时为您服务</p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="section">
    <div class="overlay">
        <div class="overlay-wrapper">
            <div class="overlay-inner cover-background" style="background-image: url('/images/banner-4.jpg')"></div>
            <div class="overlay-inner op-8" style="background-color: #5fcf80;"></div>
        </div>
    </div>
    <div class="container">
        <div class="row header">
            <div class="col-md-12">
                <h2 class="subtitle text-white-light text-center">
                病原微生物
                </h2>
                <h3 class="text-center text-white">
                极速探明未知致病源
                </h3>
            </div>
        </div>
        <div class="row patho-steps">
            <span class="patho-progress"></span>
            <div class="col-md-2 m-b-100">
                <div class="bx-container">
                    <div class="icon-bx">
                        <img src="/images/by-index-1.png">
                    </div>
                    <h3>核苷酸提取</h3>
                </div>
            </div>
            <div class="col-md-2 m-b-100">
                <div class="bx-container">
                    <div class="icon-bx">
                        <img src="/images/by-index-2.png">
                    </div>
                    <h3>测序文库构建</h3>
                </div>
            </div>
            <div class="col-md-2 m-b-100">
                <div class="bx-container">
                    <div class="icon-bx">
                        <img src="/images/by-index-3.png">
                    </div>
                    <h3>序列测定</h3>
                </div>
            </div>
            <div class="col-md-2 m-b-100">
                <div class="bx-container">
                    <div class="icon-bx">
                        <img src="/images/by-index-6.png">
                    </div>
                    <h3>序列分析</h3>
                </div>
            </div>
            <div class="col-md-2 m-b-100">
                <div class="bx-container">
                    <div class="icon-bx">
                        <img src="/images/by-index-5.png">
                    </div>
                    <h3>信息解读</h3>
                </div>
            </div>
            <div class="col-md-2 m-b-100">
                <div class="bx-container">
                    <div class="icon-bx">
                        <img src="/images/by-index-4.png">
                    </div>
                    <h3>报告撰写</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section text-center">
    <div class="container">
        <div class="row header">
            <div class="col-md-12">
                <h2 class="subtitle">
                他们选择相信我们
                </h2>
                <h3>
                我们的合作伙伴
                </h3>
            </div>
        </div>
        <div class="row clients-row">
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/pt-1.jpg" width="90" height="78">
                <p>深圳市罗湖总医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/pt-2.jpg" width="90" height="78">
                <p>深圳市儿童医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom border-right">
                <img src="/images/pt-3.jpg" width="90" height="78">
                <p>第四军医大学附属西京医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-bottom">
                <img src="/images/pt-4.jpg" width="90" height="78">
                <p>中国人民解放军总医院</p>
            </div>
        </div>
        <div class="row clients-row">
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/pt-5.jpg" width="90" height="78">
                <p>深圳市第二人民医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/pt-6.jpg" width="90" height="78">
                <p>北京大学人民医院</p>
            </div>
            <div class="col-md-3 col-sm-6 client border-right">
                <img src="/images/pt-7.jpg" width="90" height="78">
                <p>中国军事医学科学院</p>
            </div>
            <div class="col-md-3 col-sm-6 client">
                <img src="/images/pt-8.jpg" width="90" height="78">
                <p>中国医学科学院肿瘤医院</p>
            </div>
        </div>
    </div>
</section>
@stop
@section('scripts')
<script src="/vendor/swiper/dist/js/swiper.jquery.min.js" charset="utf-8"></script>
@endsection