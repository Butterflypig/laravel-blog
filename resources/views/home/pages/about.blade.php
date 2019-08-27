<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css')}}/home.css">
    <link rel="stylesheet" href="{{asset('css')}}/about.css">
    <title>Document</title>
</head>
<body>

@extends('home/home')

@section('about')

    <div>
        <header class="header" >
            <img src="" alt="">
            <h2>{{$dataAbout[0]->name}}</h2>
            <div>
                <span>web前端</span>
                <span>| 24岁</span>
                <span>| 2年工作经验</span>
            </div>
        </header>
        <section class="aboutMe">
            <h3>
                <span>关于我</span>
                <span>About Me</span>
            </h3>
            <div class="content">
                <div>
                    <svg class="icon aboutAcon" aria-hidden="true">
                        <use xlink:href="#icon-dianhua"></use>
                    </svg>
                    <span>173-6487-1109</span>
                </div>
                <div>
                    <svg class="icon aboutAcon" aria-hidden="true">
                        <use xlink:href="#icon-qq"></use>
                    </svg>
                    <span>346519079</span>
                </div>
                <div>
                    <svg class="icon aboutAcon" aria-hidden="true">
                        <use xlink:href="#icon-weixin"></use>
                    </svg>
                    <span>Butterfly-1995lj</span>
                </div>
                <div>
                    <svg class="icon aboutAcon" aria-hidden="true">
                        <use xlink:href="#icon-tubiao209"></use>
                    </svg>
                    <span>346519079@qq.com</span>
                </div>
            </div>
        </section>
        <div class="line"></div>
        <section class="aboutMe">
            <h3>
                <span>教育信息</span>
                <span>Educational Information</span>
            </h3>
            <div>
                <span></span>
                <span>本科</span>

            </div>
        </section>
        <div class="line"></div>
        <section class="aboutMe">
            <!-- workExperience -->
            <h3>
                <span>工作经历</span>
                <span>Work Experience</span>
            </h3>
            <div class="workExperienceContent">
                <div>
    {{--                <span>{{personalInfo.companyName}}</span>--}}
    {{--                <span>{{personalInfo.workDate}}</span>--}}
    {{--                <span>{{personalInfo.position}}</span>--}}
                </div>
                <p>
                    我所任职的是杭州惊叹号科技有限公司的开发部，进入公司参与公司的宠物平台项目，负责顾客模块的开发工作，后续又参与完成了该项目的微信小程序版本的开发
                </p>
            </div>
        </section>
        <div class="line"></div>
        <section class="aboutMe">
            <h3>
                <span>个人技能</span>
                <span>Personal Skills</span>
            </h3>
            <div class="skillsContent">
                <ul>
    <!-- {{--                <li v-for="item in workingAbility" :key="item.id">{{item.skill}}</li>--}} -->
                </ul>
            </div>
        </section>

        <div class="line"></div>
        <section class="aboutMe">
            <h3>
                <span>项目经验</span>
                <span>Work Experience</span>
            </h3>
        </section>
        <div class="line"></div>
        <section class="aboutMe">
            <h3>
                <span>自我评价</span>
                <span>Self-Evaluation</span>
            </h3>
        </section>
    </div>
@endsection

</body>
</html>
