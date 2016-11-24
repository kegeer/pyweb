@extends('layouts.default')


@section('content')

    <section class="section page-title page-title-xl">
        <div class="overlay">
            <div class="overlay-wrapper">
                <div class="overlay-inner parallax-background" style="background-image: url('images/baba-index.jpg')">
                </div>
                <div class="overlay-inner b-d op-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-6 text-left">
                <h3 class="text-white no-top-margin">
                    粑粑说
                </h3>
                <h5 class="text-primary">新一代的健康检测产品</h5>
                <p class="n-b-m text-white">
                    肠道菌群约占全身菌群总数的<strong>80%</strong>,肠道是人体最重要的营养消化和吸收的场所,基于此我们退出了基于二代测序技术的肠道健康检测产品
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row header">
                <div class="col-md-12">
                    <h2 class="subtitle text-center">
                        产品特点
                    </h2>
                    <h3 class="text-center">
                        那些肠道的优点
                    </h3>
                </div>
            </div>
            <div class="row m-b-30">
                <div class="col-md-3">
                    <div class="icon-box bordered sm-mb-30">
                        <div class="box-container">
                            <div class="icon-box-icon circle">
                                <div class="icon-container">
                                    <i class="fa fa-cube"></i>
                                </div>

                            </div>
                            <h3>无创取粑粑</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box bordered sm-mb-30">
                        <div class="box-container">
                            <div class="icon-box-icon circle">
                                <div class="icon-container">
                                    <i class="fa fa-cube"></i>
                                </div>

                            </div>
                            <h3>常温保存寄送</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box bordered sm-mb-30">
                        <div class="box-container">
                            <div class="icon-box-icon circle">
                                <div class="icon-container">
                                    <i class="fa fa-cube"></i>
                                </div>

                            </div>
                            <h3>快速获取数据</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box bordered sm-mb-30">
                        <div class="box-container">
                            <div class="icon-box-icon circle">
                                <div class="icon-container">
                                    <i class="fa fa-cube"></i>
                                </div>

                            </div>
                            <h3>个体化的健康管理</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="section">
        <div class="overlay">
            <div class="overlay-wrapper">
                <div class="overlay-inner parallax-background" style="background-image: url('images/baba-intro.jpg');background-size: contain">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row header m-b-130">
                <div class="col-md-12">
                    <h2 class="subtitle text-center">
                        产品流程
                    </h2>
                    <h3 class="text-center">
                        见证一坨粑粑的神器旅程
                    </h3>
                </div>
            </div>
            <div class="row">
                <ul class="col-md-4 col-md-offset-4 text-center text-white list-steps">
                    <li class="left">
                        <h3>样品采集</h3>
                    </li>
                    <li class="right">
                        <h3>样品寄送</h3>
                    </li>
                    <li class="left">
                        <h3>实验处理</h3>
                    </li>
                    <li  class="right">
                        <h3>分析解读</h3>
                    </li>
                    <li class="left">
                        <h3>肠道健康报告</h3>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row header">
                <div class="col-md-12">
                    <h2 class="subtitle text-center">
                        微信公众号
                    </h2>
                    <h3 class="text-center">
                        跟谁我们一起见证更多
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <img src="/images/qrcode.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </section>

@stop