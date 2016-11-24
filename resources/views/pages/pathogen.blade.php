@extends('layouts.default')

@section('content')
    <section class="section page-title page-title-xl">
        <div class="overlay">
            <div class="overlay-wrapper">
                <div class="overlay-inner parallax-background" style="background-image: url('images/pathogen-index.jpg')">
                </div>
                <div class="overlay-inner b-d op-3"></div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center">
                <h3 class="text-white no-top-margin">
                    病原微生物
                </h3>
                <p class="n-b-m text-white">
                    无需培养的病原微生物快速检测
                </p>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row header">
                <div class="col-md-12">
                    <h3 class="text-center">
                        脑元谱解决方案
                    </h3>
                    <h2 class="subtitle text-center">
                        基于高通量测序平台的检测系统,对脑脊液样本中的游离DNA进行分析
                    </h2>
                </div>
            </div>
            <div class="row pathos-row text-center">
                <div class="col-md-3 col-sm-6 patho border-bottom border-right">
                    <h3>病毒</h3>
                </div>
                <div class="col-md-3 col-sm-6 patho border-bottom border-right">
                    <h3>细菌</h3>
                </div>
                <div class="col-md-3 col-sm-6 patho border-bottom border-right">
                    <h3>古菌</h3>
                </div>
                <div class="col-md-3 col-sm-6 patho border-bottom">
                    <h3>支原体</h3>
                </div>
            </div>
            <div class="row pathos-row text-center">
                <div class="col-md-3 col-sm-6 patho border-right">
                    <h3>衣原体</h3>
                </div>
                <div class="col-md-3 col-sm-6 patho border-right">
                    <h3>螺旋体</h3>
                </div>
                <div class="col-md-3 col-sm-6 patho border-right">
                    <h3>立克次体</h3>
                </div>
                <div class="col-md-3 col-sm-6 patho">
                    <h3>真菌</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="disease">
                        <i class="fa fa-angle-down fa-3x text-primary m-b-15"></i>
                        <img src="/images/patho-disease-1.jpg" alt="" class="img-responsive">
                        <h3>脑病</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="disease">
                        <i class="fa fa-angle-down fa-3x text-primary m-b-15"></i>
                        <img src="/images/patho-disease-2.jpg" alt="" class="img-responsive">
                        <h3>化脑</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="disease">
                        <i class="fa fa-angle-down fa-3x text-primary m-b-15"></i>
                        <img src="/images/patho-disease-3.jpg" alt="" class="img-responsive">
                        <h3>结脑</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="disease">
                        <i class="fa fa-angle-down fa-3x text-primary m-b-15"></i>
                        <img src="/images/patho-disease-4.jpg" alt="" class="img-responsive">
                        <h3>其他</h3>
                    </div>
                </div>
            </div>
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
                        <h3>测序文件构建</h3>
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

    <section class="section" style="background-color: #f5f7f9">
        <div class="container">

            <div class="row">

                <div class="col-md-6 card-box">
                    <div class="image">
                        <div class="bg-image" style="background-image:url('images/patho-suit-1.jpg')">
                        </div>
                    </div>
                    <div class="content bg-white">
                        <h2><strong class="text-primary">样本类型：</strong>脑脊液</h2>
                        <p class="text-white-dark m-b-15">
                            快速病原检测
                        </p>
                        <ul class="list-items">
                            <li>
                                <span>取样要求</span>
                                <ul>
                                    <li>1,最佳采样时间为抗生素使用前</li>
                                    <li>2,采集后迅速4℃保存，4小时内冻存</li>
                                    <li>3,避免血液污染</li>
                                </ul>
                            </li>
                            <li><span>保存容器</span>非母乳喂养</li>
                            <li><span>保存条件</span>腹泻或便秘</li>
                            <li><span>运输条件</span>希望留下肠道最初状态的“快照”</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 card-box">
                    <div class="image">
                        <div class="bg-image" style="background-image:url('images/patho-suit-2.jpg')">
                        </div>
                    </div>
                    <div class="content bg-white">
                        <h2><strong class="text-primary">样本类型：</strong>血液</h2>
                        <p class="text-white-dark m-b-15">
                            快速病原检测
                        </p>
                        <ul class="list-items">
                            <li>
                                <span>取样要求</span>
                                <ul>
                                    <li>1,EDTA抗凝管采血</li>
                                    <li>2,采集后迅速4℃保存，6小时内分离血浆</li>
                                </ul>
                            </li>
                            <li><span>保存容器</span>1.5ml/2ml EP管或冻存管</li>
                            <li><span>保存条件</span>-20°保存一周,-80°长期保存</li>
                            <li><span>运输条件</span>干冰保存运输</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row header">
                <div class="col-md-12">
                    <h2 class="subtitle text-center">
                        为什么选择我们
                    </h2>
                    <h3 class="text-center">
                        你值得信赖的伙伴
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box">
                        <div class="box-container">
                            <div class="icon-box-icon">
                                <!-- <i class="fa fa-cube"></i> -->
                                <img src="/images/patho-chara-1.jpg" alt="">
                            </div>
                            <h3>更快速</h3>
                            <p>无需培养 测序速度快</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <div class="box-container">
                            <div class="icon-box-icon">
                                <!-- <i class="fa fa-cube"></i> -->
                                <img src="/images/patho-chara-2.jpg" alt="">
                            </div>
                            <h3>更灵敏</h3>
                            <p>50copies/ml的最低检测限 灵敏度高出市场同类产品1倍</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <div class="box-container">
                            <div class="icon-box-icon">
                                <!-- <i class="fa fa-cube"></i> -->
                                <img src="/images/patho-chara-3.jpg" alt="">
                            </div>
                            <h3>更全面</h3>
                            <p>大于2000种序列已知 的病原微生物</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop