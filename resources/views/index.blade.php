<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="ru"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>{{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="{{ setting('site.keywords') }}">
    <meta name="subject" content="We play music that we like first and foremost. Music that we can feel like our own, and bring these feelings to the viewer.">
    <meta name="robots" content="index,follow" />

    <meta name="author" content="Stanislav Shiptya, shiptya@icloud.com">
    <meta name="copyright" content="redbox.in.ua">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap Grid v4.1.0 -->
    <style>
        html {
            box-sizing: border-box;
            -ms-overflow-style: scrollbar
        }

        *, ::after, ::before {
            box-sizing: inherit
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width: 576px) {
            .container {
                max-width: 540px
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px
            }
        }

        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0
        }

        .no-gutters > .col, .no-gutters > [class*=col-] {
            padding-right: 0;
            padding-left: 0
        }

        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-first {
            -ms-flex-order: -1;
            order: -1
        }

        .order-last {
            -ms-flex-order: 13;
            order: 13
        }

        .order-0 {
            -ms-flex-order: 0;
            order: 0
        }

        .order-1 {
            -ms-flex-order: 1;
            order: 1
        }

        .order-2 {
            -ms-flex-order: 2;
            order: 2
        }

        .order-3 {
            -ms-flex-order: 3;
            order: 3
        }

        .order-4 {
            -ms-flex-order: 4;
            order: 4
        }

        .order-5 {
            -ms-flex-order: 5;
            order: 5
        }

        .order-6 {
            -ms-flex-order: 6;
            order: 6
        }

        .order-7 {
            -ms-flex-order: 7;
            order: 7
        }

        .order-8 {
            -ms-flex-order: 8;
            order: 8
        }

        .order-9 {
            -ms-flex-order: 9;
            order: 9
        }

        .order-10 {
            -ms-flex-order: 10;
            order: 10
        }

        .order-11 {
            -ms-flex-order: 11;
            order: 11
        }

        .order-12 {
            -ms-flex-order: 12;
            order: 12
        }

        .offset-1 {
            margin-left: 8.333333%
        }

        .offset-2 {
            margin-left: 16.666667%
        }

        .offset-3 {
            margin-left: 25%
        }

        .offset-4 {
            margin-left: 33.333333%
        }

        .offset-5 {
            margin-left: 41.666667%
        }

        .offset-6 {
            margin-left: 50%
        }

        .offset-7 {
            margin-left: 58.333333%
        }

        .offset-8 {
            margin-left: 66.666667%
        }

        .offset-9 {
            margin-left: 75%
        }

        .offset-10 {
            margin-left: 83.333333%
        }

        .offset-11 {
            margin-left: 91.666667%
        }

        @media (min-width: 576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-sm-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }

            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-sm-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-sm-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-sm-first {
                -ms-flex-order: -1;
                order: -1
            }

            .order-sm-last {
                -ms-flex-order: 13;
                order: 13
            }

            .order-sm-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-sm-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-sm-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-sm-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-sm-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-sm-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-sm-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-sm-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-sm-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-sm-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-sm-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-sm-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-sm-12 {
                -ms-flex-order: 12;
                order: 12
            }

            .offset-sm-0 {
                margin-left: 0
            }

            .offset-sm-1 {
                margin-left: 8.333333%
            }

            .offset-sm-2 {
                margin-left: 16.666667%
            }

            .offset-sm-3 {
                margin-left: 25%
            }

            .offset-sm-4 {
                margin-left: 33.333333%
            }

            .offset-sm-5 {
                margin-left: 41.666667%
            }

            .offset-sm-6 {
                margin-left: 50%
            }

            .offset-sm-7 {
                margin-left: 58.333333%
            }

            .offset-sm-8 {
                margin-left: 66.666667%
            }

            .offset-sm-9 {
                margin-left: 75%
            }

            .offset-sm-10 {
                margin-left: 83.333333%
            }

            .offset-sm-11 {
                margin-left: 91.666667%
            }
        }

        @media (min-width: 768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-md-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }

            .col-md-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-md-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-md-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-md-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-md-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-md-first {
                -ms-flex-order: -1;
                order: -1
            }

            .order-md-last {
                -ms-flex-order: 13;
                order: 13
            }

            .order-md-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-md-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-md-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-md-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-md-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-md-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-md-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-md-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-md-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-md-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-md-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-md-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-md-12 {
                -ms-flex-order: 12;
                order: 12
            }

            .offset-md-0 {
                margin-left: 0
            }

            .offset-md-1 {
                margin-left: 8.333333%
            }

            .offset-md-2 {
                margin-left: 16.666667%
            }

            .offset-md-3 {
                margin-left: 25%
            }

            .offset-md-4 {
                margin-left: 33.333333%
            }

            .offset-md-5 {
                margin-left: 41.666667%
            }

            .offset-md-6 {
                margin-left: 50%
            }

            .offset-md-7 {
                margin-left: 58.333333%
            }

            .offset-md-8 {
                margin-left: 66.666667%
            }

            .offset-md-9 {
                margin-left: 75%
            }

            .offset-md-10 {
                margin-left: 83.333333%
            }

            .offset-md-11 {
                margin-left: 91.666667%
            }
        }

        @media (min-width: 992px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-lg-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }

            .col-lg-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-lg-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-lg-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-lg-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-lg-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-lg-first {
                -ms-flex-order: -1;
                order: -1
            }

            .order-lg-last {
                -ms-flex-order: 13;
                order: 13
            }

            .order-lg-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-lg-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-lg-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-lg-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-lg-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-lg-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-lg-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-lg-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-lg-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-lg-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-lg-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-lg-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-lg-12 {
                -ms-flex-order: 12;
                order: 12
            }

            .offset-lg-0 {
                margin-left: 0
            }

            .offset-lg-1 {
                margin-left: 8.333333%
            }

            .offset-lg-2 {
                margin-left: 16.666667%
            }

            .offset-lg-3 {
                margin-left: 25%
            }

            .offset-lg-4 {
                margin-left: 33.333333%
            }

            .offset-lg-5 {
                margin-left: 41.666667%
            }

            .offset-lg-6 {
                margin-left: 50%
            }

            .offset-lg-7 {
                margin-left: 58.333333%
            }

            .offset-lg-8 {
                margin-left: 66.666667%
            }

            .offset-lg-9 {
                margin-left: 75%
            }

            .offset-lg-10 {
                margin-left: 83.333333%
            }

            .offset-lg-11 {
                margin-left: 91.666667%
            }
        }

        @media (min-width: 1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%
            }

            .col-xl-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: none
            }

            .col-xl-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%
            }

            .col-xl-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%
            }

            .col-xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%
            }

            .col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }

            .col-xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }

            .col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%
            }

            .col-xl-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-xl-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%
            }

            .col-xl-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%
            }

            .col-xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-xl-first {
                -ms-flex-order: -1;
                order: -1
            }

            .order-xl-last {
                -ms-flex-order: 13;
                order: 13
            }

            .order-xl-0 {
                -ms-flex-order: 0;
                order: 0
            }

            .order-xl-1 {
                -ms-flex-order: 1;
                order: 1
            }

            .order-xl-2 {
                -ms-flex-order: 2;
                order: 2
            }

            .order-xl-3 {
                -ms-flex-order: 3;
                order: 3
            }

            .order-xl-4 {
                -ms-flex-order: 4;
                order: 4
            }

            .order-xl-5 {
                -ms-flex-order: 5;
                order: 5
            }

            .order-xl-6 {
                -ms-flex-order: 6;
                order: 6
            }

            .order-xl-7 {
                -ms-flex-order: 7;
                order: 7
            }

            .order-xl-8 {
                -ms-flex-order: 8;
                order: 8
            }

            .order-xl-9 {
                -ms-flex-order: 9;
                order: 9
            }

            .order-xl-10 {
                -ms-flex-order: 10;
                order: 10
            }

            .order-xl-11 {
                -ms-flex-order: 11;
                order: 11
            }

            .order-xl-12 {
                -ms-flex-order: 12;
                order: 12
            }

            .offset-xl-0 {
                margin-left: 0
            }

            .offset-xl-1 {
                margin-left: 8.333333%
            }

            .offset-xl-2 {
                margin-left: 16.666667%
            }

            .offset-xl-3 {
                margin-left: 25%
            }

            .offset-xl-4 {
                margin-left: 33.333333%
            }

            .offset-xl-5 {
                margin-left: 41.666667%
            }

            .offset-xl-6 {
                margin-left: 50%
            }

            .offset-xl-7 {
                margin-left: 58.333333%
            }

            .offset-xl-8 {
                margin-left: 66.666667%
            }

            .offset-xl-9 {
                margin-left: 75%
            }

            .offset-xl-10 {
                margin-left: 83.333333%
            }

            .offset-xl-11 {
                margin-left: 91.666667%
            }
        }

        .d-none {
            display: none !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }

        @media (min-width: 576px) {
            .d-sm-none {
                display: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-sm-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width: 768px) {
            .d-md-none {
                display: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-md-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width: 992px) {
            .d-lg-none {
                display: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-lg-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media (min-width: 1200px) {
            .d-xl-none {
                display: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-xl-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        @media print {
            .d-print-none {
                display: none !important
            }

            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-print-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }
        }

        .flex-row {
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-column {
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-row-reverse {
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .flex-fill {
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important
        }

        .flex-grow-0 {
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important
        }

        .justify-content-start {
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-start {
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-baseline {
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }

        @media (min-width: 576px) {
            .flex-sm-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-sm-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-sm-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-sm-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-sm-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-sm-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-sm-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-sm-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-sm-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-sm-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width: 768px) {
            .flex-md-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-md-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-md-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-md-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-md-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-md-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-md-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-md-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-md-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-md-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-md-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width: 992px) {
            .flex-lg-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-lg-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-lg-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-lg-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-lg-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-lg-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-lg-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-lg-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-lg-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-lg-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        @media (min-width: 1200px) {
            .flex-xl-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-xl-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .flex-xl-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-xl-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .justify-content-xl-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-xl-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .align-items-xl-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-xl-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-xl-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-xl-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }
        }

        /*# sourceMappingURL=bootstrap-grid.min.css.map */</style>

    <!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
    <script>!function () {
            function e(e, t, n) {
                e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n)
            }

            function t(e) {
                return window.localStorage && localStorage.font_css_cache && localStorage.font_css_cache_file === e
            }

            function n() {
                if (window.localStorage && window.XMLHttpRequest) if (t(o)) a(localStorage.font_css_cache); else {
                    var n = new XMLHttpRequest;
                    n.open("GET", o, !0), e(n, "load", function () {
                        4 === n.readyState && (a(n.responseText), localStorage.font_css_cache = n.responseText, localStorage.font_css_cache_file = o)
                    }), n.send()
                } else {
                    var c = document.createElement("link");
                    c.href = o, c.rel = "stylesheet", c.type = "text/css", document.getElementsByTagName("head")[0].appendChild(c), document.cookie = "font_css_cache"
                }
            }

            function a(e) {
                var t = document.createElement("style");
                t.innerHTML = e, document.getElementsByTagName("head")[0].appendChild(t)
            }

            var o = "_fonts.css";
            window.localStorage && localStorage.font_css_cache || document.cookie.indexOf("font_css_cache") > -1 ? n() : e(window, "load", n)
        }();
    </script>

    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        function hide_navbar_my() {
            document.getElementById('ul').style.display = 'block';
            document.getElementById('navbar').style.background = 'black';
            document.getElementById('title-pic').style.display = 'block';
            document.getElementById('cross').style.display = 'block';
            document.getElementById('burger').style.display = 'none';
        }
        function cross_click() {
            document.getElementById('ul').style.display = 'none';
            document.getElementById('navbar').style.background = 'transparent';
            document.getElementById('title-pic').style.display = 'none';
            document.getElementById('cross').style.display = 'none';
            document.getElementById('burger').style.display = 'block';
        }
    </script>


    {{ setting('site.additional') }}

</head>

<body>
<nav id="navbar" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="navbar-brand">
                <i id="burger" class="fa fa-bars" style="color:red" onclick="hide_navbar_my()"></i>
                <i id="cross" class="fa fa-times" style="color:red" onclick="cross_click()"></i>
            </div>
        </div>
        <ul id="ul" class="nav navbar-nav text-center">
            <li><a href="#about2">О НАС</a></li>
            <li><a href="#photos">Фото</a></li>
            <li><a href="#videos">Видео</a></li>
            <li><a href="#tracks">Треки</a></li>
            <li><a href="#contacts">Контакты</a></li>
            <li><a href="#pdf">Райдер</a></li>
        </ul>
        <div id="title-pic" class="title_icon">
            <a href="#"><img src="{{ asset('img/PB_WHITE-minwh.png') }}" width="100%" height="auto" alt=""/></a>
        </div>
    </div>
</nav>

<div id="intro" class="intro">
    <div class="about">
        <div class="row about2" id="about2">
            <div class="col-md-12">
                <div class="col-md-2">
                    <h2 class="text-rotate"><span>О</span> НАС</h2>
                </div>
                <div class="col-md-8">

                    <h2 class="intro-heading-text"><span>О</span> НАС</h2>

                    <p class="intro-welcome-text">

                        @if(setting('site.about_text'))
                            {{ setting('site.about_text') }}
                        @else
                            Мы играем музыку, которая нравится в первую очередь нам. Музыку,
                            которую мы способны почувствовать, как свою, и донести эти чувства до зрителя.
                            Мы хотим, чтобы вы окунулись в нее, и на время, пока идет концерт, забыли обо всех тревогах
                            и
                            проблемах.
                            Наша музыка изменит ритм вашей жизни.
                            Драйв, стихия, страсть - все это в наших руках! Свободолюбцы и бунтари - мы способны простую
                            мелодию превратить в шквал эмоций и зажечь ваши сердца.
                            Наш коллектив награжден множественными музыкальными премиями, в числе которых: «Человек года
                            2015», а также «Музыкальная премия года 2017» в номинации «Талант и признание»
                        @endif
                    </p>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="container-fluid about-pics">
                <div class="row pics-intro">

                    @foreach($persons as $person)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="wrapper-picture-item">
                                <img src="{{ asset('storage/' . $person->image ) }}" class="img-responsive"/>
                                <div class="overlay">
                                    <div class="overlay-top">
                                        <div class="top-left-text">{{ $person->position }}</div>
                                        <div class="right-top-border"></div>
                                    </div>
                                    <div class="text text-center">
                                        <h2>{{ $person->name }}</h2>
                                        <p>{{ $person->description }}</p>
                                    </div>
                                    <div class="overlay-bottom">
                                        <div class="left-bottom-border"></div>
                                        <div class="bot-right-text">{{ $person->sphere }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<section id="photos" class="photos">
    <h2>Фото</h2>
    <div class="container">
        <div class="row">

            @foreach($photos as $photo)
                <div class="col-md-4 img-sqr"><img alt="{{ $photo->name }}"
                                                   src="{{ asset('storage/' . $photo->photo ) }}" class=""/></div>
            @endforeach

        </div>
    </div>
</section>

<section id="videos" class="videos">
    <h2>Видео</h2>

    <div class="container">
        <div class="video-wrapper-slider">
            <div id="slider" class="flexslider">
                <ul class="slides">

                    @foreach($videos as $video)
                        <li>
                            {!! $video->video !!}
                        </li>
                    @endforeach

                </ul>
            </div>
            <div id="carousel" class="flexslider">
                <ul class="slides">

                    @foreach($videos as $video)
                        <li>
                            {!! $video->video !!}
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</section>

<section id="tracks" class="tracks">
    <h2>Треки</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tracks-wrapper-slider">
                    <div id="tracks-slider" class="flexslider">
                        <ul class="slides">

                            @foreach($tracks as $track)
                                <li>
                                    <div class="wrapper-track-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="track-wrapper-image">
                                                    @if($track->preview)
                                                        <img src="{{ asset('storage/' . $track->preview ) }}"
                                                             alt="raider_left.png">
                                                    @else
                                                        <img src="{{ asset('img/pb_1920x1800_back.png') }}"
                                                             alt="raider_left.png">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="raider-wrapper-download flex-center">
                                                    @if($track->date)
                                                        <p class="raider-download-download">{{ $track->date }}</p>
                                                    @endif

                                                    @if($track->name)
                                                        <p class="raider-download-head-text">{{ $track->name }}</p>
                                                    @endif

                                                    @if($track->author)
                                                        <p class="raider-download-knowing">{{ $track->author }}</p>
                                                    @endif

                                                    @if($track->track && !$track->link)
                                                        <div class="listen-wrapper-button">
                                                            <div class="sample" data-duration="240"
                                                                 data-showprogressbar="true" data-playtext=""
                                                                 data-pausetext="" data-resumetext=""
                                                                 data-src="{{ asset('storage/' . $track->track ) }}"></div>
                                                        </div>
                                                    @else
                                                        <div class="listen-wrapper-button">
                                                            <a target="_blank" href="{{ $track->link }}"
                                                               class="link">Слушать онлайн</a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contacts" class="contacts">
    <h2>Контакты</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contacts-wrapper-info">

                    @if(setting('site.mail'))
                        <div class="contacts-info-item">
                            <p class="contacts-item-title">Почта</p>
                            <p class="contacts-item-info"><i class="fa fa-envelope"></i>
                                <a href="mailto:{{ setting('site.mail') }}"
                                   target="_top">Написать</a>
                            </p>
                        </div>
                    @endif

                    <div class="contacts-info-item">
                        <p class="contacts-item-title">Телефон</p>


                        @if(setting('site.phone'))
                            <p class="contacts-item-info">
                                <i class="fa fa-phone"></i>
                                <a href="tel:{{ setting('site.phone') }}"
                                   target="_top">{{ setting('site.phone') }}</a>
                            </p>
                        @endif


                        @if(setting('site.phone_2'))
                            <p class="contacts-item-info">
                                <i class="fa fa-phone"></i>
                                <a href="tel:{{ setting('site.phone_2') }}"
                                   target="_top">{{ setting('site.phone_2') }}</a>
                            </p>
                        @endif
                    </div>

                    @if(setting('site.facebook'))
                        <div class="contacts-info-item">
                            <p class="contacts-item-title">Facebook</p>
                            <p class="contacts-item-info"><i class="fa fa-facebook-f"></i>
                                <a href="{{ setting('site.facebook') }}" target="_blank">Перейти</a>
                            </p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-8">
                <div class="contacts-wrapper-map">
                    <div class="contacts-wrapper-info-absolute">
                        <div class="contacts-info-item">
                            @if(setting('site.instagram'))
                                <p class="contacts-item-title">Instagram</p>
                                <p class="contacts-item-info"><i class="fa fa-instagram"></i>
                                    <a href="{{ setting('site.instagram') }}" target="_blank">Перейти</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pdf" class="raider">
    <h2>Райдер</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="raider-wrapper-image">
                    <img src="{{ asset('img/raider_left.png') }}" alt="raider_left.png">
                    <div class="raider-download-pdf">PDF</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="raider-wrapper-download flex-center">
                    <p class="raider-download-download">Загрузите наш</p>
                    <p class="raider-download-head-text">Райдер</p>
                    <p class="raider-download-knowing">для ознакомления с группой <span
                                class="fill-text">POCHEP BEAT</span></p>
                    <p class="raider-download-knowing">*райдер обсуждается индивидуально  в зависимости от формата выступления</p>

                    <div class="raider-download-wrapper-button">
                        <a href="{{ action('WelcomeController@downloadRaider') }}" class="raider-download-button">Скачать
                            PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="col-md-12">
        <div class="row"><img src="{{asset('img/PB_WHITE.png')}}" class="img-responsive"/></div>
        <div class="row"><h2>Copyright 2018</h2></div>
    </div>
</footer>

<div class="hidden"></div>

<!--[if lt IE 9]>
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<![endif]-->

<!-- Load CSS -->
<script>
    function loadCSS(hf) {
        var ms = document.createElement("link");
        ms.rel = "stylesheet";
        ms.href = hf;
        document.getElementsByTagName("head")[0].appendChild(ms);
    }

    loadCSS("{{ asset('css/style.css') }}");
</script>

<!-- Load Scripts -->
<script>
    var scr = {
        "scripts": [
            {"src": "{{ asset('js/jquery-3.3.1.min.js') }}", "async": false},
            {"src": "{{ asset('js/jquery.flexslider-min.js') }}", "async": false},
            {"src": "{{ asset('js/jquery.scrollTo.min.js') }}", "async": false},
            {"src": "{{ asset('js/common.js') }}", "async": false}
        ]
    };
    !function (t, n, r) {
        "use strict";
        var c = function (t) {
            if ("[object Array]" !== Object.prototype.toString.call(t)) return !1;
            for (var r = 0; r < t.length; r++) {
                var c = n.createElement("script"), e = t[r];
                c.src = e.src, c.async = e.async, n.body.appendChild(c)
            }
            return !0
        };
        t.addEventListener ? t.addEventListener("load", function () {
            c(r.scripts);
        }, !1) : t.attachEvent ? t.attachEvent("onload", function () {
            c(r.scripts)
        }) : t.onload = function () {
            c(r.scripts)
        }
    }(window, document, scr);
</script>
</body>
</html>