@extends('layouts.default')

@section('content')
    <section class="section page-title page-title-xl">
        <div class="overlay">
            <div class="overlay-wrapper">
                <div class="overlay-inner parallax-background" style="background-image: url('images/mb-index.jpg')">
                </div>
                <div class="overlay-inner b-d op-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h3 class="text-white no-top-margin">
                    肠道菌群
                </h3>
                <p class="n-b-m text-white">
                    肠道菌群约占全身菌群总数的
                    <strong>80%</strong>
                    肠道是人体最重要的营养消化和吸收的场所基于二代测序技术的肠道健康检测产品
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container text-center">
            <h3 class="m-b-30">
                想要携手开拓肠道微生物的新领域？<br>
                或许我们可以帮助
            </h3>
            <a href="#" class="btn btn-default btn-xl n-b-m">联系我们</a>
        </div>
    </section>
    <section class="section" style="background-color: #f5f7f9">

        <div class="container">
            <div class="row m-b-80">
                <div class="col-md-8 col-md-push-5">
                    <img src="/images/mb-baba.jpeg" alt="" class="img-responsive img-shadow">
                </div>
                <div class="col-md-4 col-md-pull-8">
                    <div class="mb">
                        <h3>粑粑说</h3>
                        <p>通过获取少量粪便，让肠道微生物来告诉你的健康状态</p>
                        <ul class="list-items">
                            <li>
                                <i class="fa fa-check"></i>
                                无创取粑粑
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                常温保存寄送
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                获取肠道菌群数据
                            </li>
                            <li>
                                <i class="fa fa-check"></i>
                                个体化的健康管理方案
                            </li>
                        </ul>
                        <a href="/baba" class="btn btn-default btn-xl">去查看</a>
                    </div>
                </div>
            </div>

            <div class="row m-b-80">
                <div class="col-md-8 col-md-pull-1">
                    <img src="/images/mb-mum-baby.jpg" alt="" class="img-responsive img-shadow">
                </div>
                <div class="col-md-4">
                    <div class="panel-group mb" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseBaby" class="collapsed" aria-expanded="false">婴FEN说<i class="fa fa-plus-circle"></i></a>
                            </div>
                            <div id="collapseBaby" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    婴幼儿营养代谢检测 <br>
                                    <a href="/baby"><i class="fa fa-arrow-right"></i>去看看</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseMum" class="collapsed" aria-expanded="false">孕FEN说<i class="fa fa-plus-circle"></i></a>
                            </div>
                            <div id="collapseMum" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    孕期营养与妊娠疾病风险检测<br>
                                    <a href="/baby"><i class="fa fa-arrow-right"></i>去看看</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-push-5">
                    <img src="/images/mb-work.jpeg" alt="" class="img-responsive img-shadow">
                </div>
                <div class="col-md-4 col-md-pull-8">

                    <div class="panel-group mb" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseObesity" class="collapsed" aria-expanded="false">肥胖管理<i class="fa fa-plus-circle"></i></a>
                            </div>
                            <div id="collapseObesity" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    体重管理解决方案<br>
                                    <a href="/obesity"><i class="fa fa-arrow-right"></i>去看看</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseCardio" class="collapsed" aria-expanded="false">心血管健康<i class="fa fa-plus-circle"></i></a>
                            </div>
                            <div id="collapseCardio" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    心血管健康危险因子检测<br>
                                    <a href="/cardio"><i class="fa fa-arrow-right"></i>去看看</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseDiabetes" class="collapsed" aria-expanded="false">血糖管理<i class="fa fa-plus-circle"></i></a>
                            </div>
                            <div id="collapseDiabetes" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    糖尿病的早期预防及干预管理<br>
                                    <a href="/diabetes"><i class="fa fa-arrow-right"></i>去看看</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@stop
