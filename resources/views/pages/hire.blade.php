@extends('layouts.default')

@section('content')
    <section class="section page-title page-title-xl">
        <div class="overlay">
            <div class="overlay-wrapper">
                <div class="overlay-inner parallax-background" style="background-image: url('images/hire-index.jpg')">
                </div>
                <div class="overlay-inner b-d op-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h3 class="text-white no-top-margin">
                    招聘
                </h3>
                <p class="n-b-m text-white">
                    求贤若渴
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row header">
                <div class="col-md-12">
                    <h3 class="text-center">
                        目前在求职位
                    </h3>
                    <h2 class="subtitle text-center">
                        不定期更新
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default job">
                        <div class="panel-heading">
                            <h3 class="m-t-20">生物信息分析工程师</h3>
                            <span><i class="fa fa-dollar">7000-8000</i></span>
                        </div>
                        <div class="panel-body">
                            <h4>岗位职责</h4>
                            <p>1、参与项目的调研和设计，提供生物信息解决方案；</p>
                            <a href="#" class="text-right" data-toggle="modal" data-target="#hirejob">了解更多</a>
                        </div>
                        <div class="panel-body">
                            <h5 class="text-muted"><strong>发布于:</strong> 2016年10月24日</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="modal fade" id="hirejob" tabindex="-1" role="dialog" aria-labelledby="hirejoblabel">
        <div class="modal-dialog" role="document" style="width:60%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">生物信息分析工程师</h4>
                </div>
                <div class="modal-body">
                    <h4>岗位职责</h4>
                    <ul>
                        <li>1、参与项目的调研和设计，提供生物信息解决方案；</li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">申请</button>
                </div>
            </div>
        </div>
    </div>
@stop
