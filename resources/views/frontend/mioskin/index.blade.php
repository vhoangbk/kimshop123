<!DOCTYPE html>
<html lang="vi-VN" prefix="og: http://ogp.me/ns#" class="js">
<head>
    <meta charset="UTF-8">

    <link href="{{ asset('css/admin/vendors/css/font-awesome.min.css') }}" rel="stylesheet">

    <style id="litespeed-optm-css-rules">.rev_slider_wrapper {
            position: relative;
            z-index: 0;
            width: 100%
        }

        .rev_slider {
            position: relative;
            overflow: visible
        }

        .rev_slider img {
            max-width: none !important;
            margin: 0;
            padding: 0;
            border: none
        }

        .rev_slider > ul, .rev_slider > ul > li, .rev_slider > ul > li:before {
            list-style: none !important;
            position: absolute;
            margin: 0 !important;
            padding: 0 !important;
            overflow-x: visible;
            overflow-y: visible;
            list-style-type: none !important;
            background-image: none;
            background-position: 0 0;
            text-indent: 0;
            top: 0;
            left: 0
        }

        .rev_slider > ul > li, .rev_slider > ul > li:before {
            visibility: hidden
        }

        .rev_slider .tp-caption {
            position: relative;
            visibility: hidden;
            white-space: nowrap;
            display: block;
            -webkit-font-smoothing: antialiased !important;
            z-index: 1
        }

        .fullwidthbanner-container {
            position: relative;
            padding: 0;
            overflow: hidden
        }

        .fullwidthbanner-container .fullwidthabanner {
            width: 100%;
            position: relative
        }

        .rev-btn, .rev-btn:visited {
            outline: 0 !important;
            box-shadow: none !important;
            text-decoration: none !important;
            line-height: 44px;
            font-size: 17px;
            font-weight: 500;
            padding: 12px 35px;
            box-sizing: border-box;
            font-family: Roboto, sans-serif
        }

        .tp-bannertimer {
            visibility: hidden;
            width: 100%;
            height: 5px;
            background: #000;
            background: rgba(0, 0, 0, .15);
            position: absolute;
            z-index: 200;
            top: 0
        }

        .tp-bannertimer.tp-bottom {
            top: auto;
            bottom: 0 !important;
            height: 5px
        }

        .tp-caption img {
            background: 0 0;
            zoom: 1
        }

        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        main, nav {
            display: block
        }

        a {
            background-color: transparent
        }

        strong {
            font-weight: 700
        }

        h1 {
            margin: .67em 0;
            font-size: 2em
        }

        small {
            font-size: 80%
        }

        img {
            border: 0
        }

        button, input {
            margin: 0;
            font: inherit;
            color: inherit
        }

        button {
            overflow: visible
        }

        button {
            text-transform: none
        }

        button, input[type=submit] {
            -webkit-appearance: button
        }

        button::-moz-focus-inner, input::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        input {
            line-height: normal
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        :after, :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 10px
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff
        }

        button, input {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #337ab7;
            text-decoration: none
        }

        img {
            vertical-align: middle
        }

        h1, h2, h3, h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit
        }

        h2 small, h3 small, h6 small {
            font-weight: 400;
            line-height: 1;
            color: #777
        }

        h1, h2, h3 {
            margin-top: 20px;
            margin-bottom: 10px
        }

        h2 small, h3 small {
            font-size: 65%
        }

        h6 {
            margin-top: 10px;
            margin-bottom: 10px
        }

        h6 small {
            font-size: 75%
        }

        h1 {
            font-size: 36px
        }

        h2 {
            font-size: 30px
        }

        h3 {
            font-size: 24px
        }

        h6 {
            font-size: 12px
        }

        p {
            margin: 0 0 10px
        }

        small {
            font-size: 85%
        }

        .text-right {
            text-align: right
        }

        .text-center {
            text-align: center
        }

        ul {
            margin-top: 0;
            margin-bottom: 10px
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width: 768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width: 992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width: 1200px) {
            .container {
                width: 1170px
            }
        }

        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            margin-right: -15px;
            margin-left: -15px
        }

        .col-md-12, .col-sm-4, .col-sm-8 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        @media (min-width: 768px) {
            .col-sm-4, .col-sm-8 {
                float: left
            }

            .col-sm-8 {
                width: 66.66666667%
            }

            .col-sm-4 {
                width: 33.33333333%
            }
        }

        @media (min-width: 992px) {
            .col-md-12 {
                float: left
            }

            .col-md-12 {
                width: 100%
            }
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .btn-lg {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px
        }

        .btn-block {
            display: block;
            width: 100%
        }

        input[type=submit].btn-block {
            width: 100%
        }

        .fade {
            opacity: 0
        }

        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 20px;
            border: 1px solid transparent
        }

        @media (min-width: 768px) {
            .navbar {
                border-radius: 4px
            }
        }

        .close {
            float: right;
            font-size: 21px;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            opacity: .2
        }

        button.close {
            -webkit-appearance: none;
            padding: 0;
            background: 0 0;
            border: 0
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
            outline: 0
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -25%);
            -ms-transform: translate(0, -25%);
            -o-transform: translate(0, -25%);
            transform: translate(0, -25%)
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px
        }

        .modal-content {
            position: relative;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #999;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 6px;
            outline: 0;
            -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, .5)
        }

        .modal-body {
            position: relative;
            padding: 15px
        }

        @media (min-width: 768px) {
            .modal-dialog {
                width: 600px;
                margin: 30px auto
            }

            .modal-content {
                -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
                box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
            }
        }

        .container-fluid:after, .container-fluid:before, .container:after, .container:before, .navbar:after, .navbar:before, .row:after, .row:before {
            display: table;
            content: " "
        }

        .container-fluid:after, .container:after, .navbar:after, .row:after {
            clear: both
        }

        .show {
            display: block !important
        }

        @-ms-viewport {
            width: device-width
        }

        @media (max-width: 767px) {
            .hidden-xs {
                display: none !important
            }
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .fa-angle-double-up:before {
            content: "\f102"
        }

        button::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        .site-content:after, .site-content:before {
            content: "";
            display: table
        }

        .site-content:after {
            clear: both
        }

        html {
            overflow-y: scroll
        }

        body {
            color: #575756;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            margin-top: -1px;
            overflow-x: hidden
        }

        h1, h2, h3, h6 {
            font-weight: 400
        }

        h1 {
            font-size: 48px
        }

        h2 {
            font-size: 30px;
            line-height: 44px
        }

        h3 {
            font-size: 20px;
            line-height: 33px
        }

        h6 {
            font-size: 14px
        }

        a {
            color: #428bff
        }

        p {
            margin-bottom: 25px
        }

        .page-container.fluid {
            width: 100%
        }

        .scroll-up-btn {
            width: 45px;
            height: 45px;
            background-color: rgba(74, 74, 74, .6);
            border: 1px solid #fff;
            display: none;
            position: fixed;
            bottom: 18px;
            right: 18px;
            text-align: center;
            line-height: 43px;
            border-radius: 2px;
            font-size: 24px;
            color: #fff;
            z-index: 101
        }

        .row_default {
            max-width: 1170px;
            margin-left: auto !important;
            margin-right: auto !important
        }

        .vc_row.wpb_row {
            position: relative;
            margin-bottom: 85px
        }

        .vc_row.wpb_row:last-of-type {
            margin-bottom: 0
        }

        .wpb_content_element {
            margin-bottom: 0 !important
        }

        @media (max-width: 1200px) {
            body {
                font-size: 14px !important;
                line-height: 24.5px !important
            }

            p {
                margin-bottom: 21.875px;
                font-size: 14px
            }
        }

        @media (max-width: 992px) {
            .vc_row.wpb_row {
                position: relative;
                margin-bottom: 65px
            }
        }

        @media (max-width: 768px) {
            .vc_column_container {
                padding-left: 0;
                padding-right: 0;
                margin-bottom: 40px
            }

            .vc_column_container:last-of-type {
                margin-bottom: 0
            }
        }

        .navbar {
            border: none;
            border-bottom: 1px solid transparent
        }

        .btn-wrapper.center {
            text-align: center
        }

        .btn {
            color: #fff;
            background-color: #428bff;
            border-radius: 4px;
            margin: 0
        }

        .btn:visited {
            color: #fff
        }

        .btn.btn-lg {
            font-size: 20px;
            padding: 10px 36px 11px;
            height: 51px
        }

        .btn.btn-round {
            border-radius: 50px
        }

        .btn-custom1, .btn-custom2 {
            background-color: #32ba5b
        }

        @media (max-width: 1200px) {
            .btn.btn-lg {
                font-size: 18px;
                padding: 10px 36px 11px;
                height: 48px
            }
        }

        .li-heading {
            color: #428bff;
            margin: 0
        }

        .li-heading small {
            display: block;
            color: #222
        }

        h1.li-heading {
            font-size: 54px;
            line-height: 73px
        }

        h2.li-heading {
            font-size: 48px;
            line-height: 66px
        }

        h2.li-heading small {
            font-size: 30px;
            line-height: 44px
        }

        h3.li-heading {
            font-size: 30px;
            line-height: 44px
        }

        h3.li-heading small {
            font-size: 22px;
            line-height: 33px
        }

        h6.li-heading {
            font-size: 20px;
            line-height: 33px
        }

        h6.li-heading small {
            font-size: 16px;
            line-height: 30px
        }

        @media (max-width: 1200px) {
            h1.li-heading {
                font-size: 47.25px;
                line-height: 63.875px
            }

            h2.li-heading {
                font-size: 42px;
                line-height: 57.75px
            }

            h2.li-heading small {
                font-size: 26.25px;
                line-height: 38.5px
            }

            h3.li-heading {
                font-size: 26.25px;
                line-height: 38.5px
            }

            h3.li-heading small {
                font-size: 17.5px;
                line-height: 28.875px
            }

            h6.li-heading {
                font-size: 17.5px;
                line-height: 28.875px
            }

            h6.li-heading small {
                font-size: 14px;
                line-height: 26.25px
            }
        }

        @media (max-width: 768px) {
            .li-heading {
                margin-bottom: 16.875px
            }

            h1.li-heading {
                font-size: 36.45px;
                line-height: 49.275px
            }

            h2.li-heading {
                font-size: 32.4px;
                line-height: 44.55px
            }

            h2.li-heading small {
                font-size: 20.25px;
                line-height: 29.7px
            }

            h3.li-heading {
                font-size: 20.25px;
                line-height: 29.7px
            }
        }

        .li-modal .container {
            width: 1170px;
            max-width: 100%
        }

        .li-modal.fade {
            opacity: 1
        }

        .li-modal.fade .modal-dialog {
            -webkit-transform: translate(0);
            -moz-transform: translate(0);
            transform: translate(0)
        }

        .li-modal .modal-dialog {
            width: auto !important;
            max-width: 600px;
            margin-top: 0;
            margin-bottom: 0
        }

        .li-modal .modal-dialog .modal-content {
            border-radius: 0;
            border: none
        }

        .li-modal .modal-dialog .modal-content .vc_row {
            max-width: 600px
        }

        .li-modal .modal-dialog .modal-content .vc_row-no-padding {
            margin-left: 0;
            margin-right: 0;
            left: 0 !important
        }

        .li-modal .modal-dialog .modal-content .close {
            font-size: 30px;
            position: absolute;
            right: 10px;
            top: 3px;
            z-index: 10
        }

        .li-modal .modal-dialog .modal-content .modal-body {
            width: 100%;
            padding: 0;
            overflow: hidden
        }

        @media (max-width: 768px) {
            .li-modal {
                padding: 0 !important
            }

            .li-modal .container, .li-modal .container-fluid {
                padding: 0
            }

            .li-modal .modal-dialog {
                width: 100% !important;
                max-width: 100% !important;
                margin: 0 !important
            }

            .li-modal .modal-dialog .modal-content .vc_row {
                width: auto !important;
                max-width: 100% !important;
                margin-left: 0;
                margin-right: 0
            }
        }

        .li-header {
            background-color: #fff;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .15)
        }

        .li-header .navbar {
            margin-bottom: 0
        }

        .li-header.header-style-2 .header-top {
            background-color: #2b4269;
            height: 150px
        }

        .li-header.header-style-2 .header-top .container {
            padding: 0
        }

        .li-header.header-style-2 .header-logo {
            margin-top: 40px
        }

        .li-header.header-style-2 .navbar {
            min-height: 60px
        }

        .li-header.header-style-2 .mega_main_menu .menu_holder .menu_inner > ul > li {
            padding-bottom: 10px
        }

        .li-header.header-style-2 .mega_main_menu .menu_holder {
            padding: 10px 0 0
        }

        @media (max-width: 1200px) {
            .li-header.header-style-2 .header-top .container {
                width: 100%
            }
        }

        @media (max-width: 992px) {
            .li-header.header-style-2 .header-top {
                display: none;
                position: absolute;
                top: -999px
            }

            .li-header.header-style-2 .navbar .mega_main_menu .nav_logo .logo_link {
                display: inline-block
            }
        }

        .li-textblock p:last-of-type {
            margin-bottom: 0
        }

        div.wpcf7 br {
            margin: 0;
            display: block;
            line-height: 0;
            content: ""
        }

        div.wpcf7 {
            margin: 0;
            padding: 0
        }

        div.wpcf7-response-output {
            margin: 2em .5em 1em;
            padding: .2em 1em
        }

        div.wpcf7 .screen-reader-response {
            position: absolute;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            width: 1px;
            margin: 0;
            padding: 0;
            border: 0
        }

        .wpcf7-form-control-wrap {
            position: relative;
            margin-bottom: 15px;
            display: block
        }

        .wpcf7-display-none {
            display: none
        }

        .wpcf7-text {
            width: 100%;
            height: 45px;
            border: 1px solid #e5e9ec;
            padding: 5px 10px;
            border-radius: 4px
        }

        .wpcf7-submit {
            color: #fff;
            border-radius: 4px;
            margin: 0;
            border: 1px solid transparent;
            font-size: 16px;
            padding: 9px 26px 10px;
            height: 45px;
            line-height: 1.42857143
        }

        @media (max-width: 768px) {
            .content-center-sm {
                text-align: center !important
            }
        }

        .mega_main_menu .menu_holder {
            padding: 20px 0 0
        }

        .mega_main_menu .menu_holder .menu_inner > .nav_logo > .logo_link {
            padding-left: 8px
        }

        .mega_main_menu .menu_holder .menu_inner > .nav_logo .mobile_toggle .mobile_button span {
            font-size: 24px
        }

        .mega_main_menu.fullwidth-disable .menu_inner {
            max-width: 1170px;
            margin-left: auto;
            margin-right: auto
        }

        @media (max-width: 959px) {
            .mega_main_menu .menu_holder {
                padding-bottom: 20px
            }

            .mega_main_menu > .menu_holder > .menu_inner > ul {
                background-color: rgba(0, 0, 0, .5)
            }

            .mega_main_menu .menu_holder .menu_inner > ul > li {
                padding: 5px !important;
                border-bottom: 1px solid rgba(255, 255, 255, .3) !important
            }
        }

        .fw-light {
            font-weight: 300
        }

        .fw-normal {
            font-weight: 400
        }

        .fw-bold {
            font-weight: 700
        }

        .left {
            text-align: left
        }

        .center {
            text-align: center
        }

        .aligncenter {
            clear: both;
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .mt20 {
            margin-top: 20px
        }

        .mt25 {
            margin-top: 25px
        }

        .cg10 div[class^=col-] {
            padding: 0 10px
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
            height: 1px;
            width: 1px;
            overflow: hidden
        }

        [class*=im-icon-]:before {
            font-family: moon;
            speak: none;
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            text-decoration: none;
            -webkit-font-smoothing: antialiased
        }

        .im-icon-search-3:before {
            content: "\e1ba"
        }

        .mega_main [class*=im-icon-]:before {
            vertical-align: baseline;
            line-height: inherit;
            text-align: center;
            color: inherit
        }

        style {
            display: none !important;
            max-width: 0 !important;
            max-height: 0 !important;
            visibility: hidden !important;
            opacity: 0 !important
        }

        .mega_main_menu ul:after, .mega_main_menu:after, .mega_main_menu:before {
            content: '';
            display: table;
            clear: both;
            float: none;
            width: 100%;
            height: 0;
            border: 0 none
        }

        .mega_main_menu {
            float: none;
            position: relative;
            margin: 0;
            height: inherit
        }

        .mega_main_menu * {
            -webkit-box-sizing: border-box !important;
            -moz-box-sizing: border-box !important;
            -ms-box-sizing: border-box !important;
            -o-box-sizing: border-box !important;
            box-sizing: border-box !important;
            outline: 0
        }

        .mega_main_menu .item_link * {
            line-height: 131%
        }

        .mega_main_menu ul.mega_main_menu_ul {
            position: relative;
            margin: 0;
            padding: 0
        }

        .mega_main_menu, .mega_main_menu > .menu_holder, .mega_main_menu > .menu_holder > .menu_inner, .mega_main_menu > .menu_holder > .menu_inner > .mega_main_menu_ul, body .mega_main_menu {
            font-size: 0;
            letter-spacing: 0;
            word-spacing: 0;
            line-height: 0;
            display: block;
            visibility: visible;
            overflow: visible;
            -webkit-backface-visibility: hidden
        }

        .mega_main_menu > .menu_holder {
            position: relative
        }

        .mega_main_menu > .menu_holder > .mmm_fullwidth_container {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul {
            z-index: 2000;
            list-style: none;
            float: none;
            width: auto;
            position: relative;
            top: auto;
            bottom: auto;
            left: auto;
            right: auto;
            border: 0 none;
            background: 0 0
        }

        .mega_main_menu.first-lvl-align-left > .menu_holder > .menu_inner > ul {
            text-align: left
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link * {
            font-size: inherit;
            letter-spacing: normal;
            word-spacing: normal;
            line-height: inherit
        }

        .mega_main_menu .nav_logo {
            display: block;
            vertical-align: top;
            float: left;
            position: relative;
            z-index: 2100
        }

        .mega_main_menu .nav_logo .logo_link {
            display: none;
            padding: 0 17px;
            margin: 0;
            vertical-align: middle;
            position: relative;
            z-index: 2100
        }

        .mega_main_menu .nav_logo .logo_link img {
            display: inline-block;
            max-height: 100%;
            width: auto;
            max-width: 100%;
            position: relative;
            vertical-align: middle
        }

        .mega_main_menu .nav_logo .mobile_toggle {
            display: none
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box {
            width: 68px;
            padding: 0 17px;
            position: relative;
            float: right
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform {
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 18px;
            z-index: 600;
            width: auto;
            margin-top: -16px;
            border-width: 1px;
            border-style: solid;
            border-color: rgba(128, 128, 128, .4)
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform .field, .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform .icosearch, .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform .submit {
            display: block;
            height: 26px;
            line-height: 26px;
            padding: 0;
            margin: 2px 0;
            border-width: 0;
            border-style: none;
            outline: 0;
            background: 0 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            -o-box-shadow: none;
            box-shadow: none
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform .icosearch, .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform .submit {
            position: absolute;
            top: 0;
            right: 0;
            width: 30px;
            text-align: center
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform .icosearch {
            z-index: 20
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform .field {
            width: 0;
            max-width: 0;
            padding-right: 30px;
            padding-left: 0;
            position: relative;
            z-index: 30
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform .submit {
            display: block;
            font-size: 0;
            color: transparent;
            z-index: 0
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li {
            display: inline-block;
            vertical-align: top;
            margin: 0;
            padding: 0;
            float: none;
            height: auto;
            width: auto;
            overflow: visible;
            background-color: transparent;
            border: 0 none
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li[class*=columns] {
            width: auto
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link {
            display: block;
            text-shadow: none;
            text-transform: none;
            position: relative;
            display: block;
            padding: 0 17px;
            margin: 0;
            top: auto;
            bottom: auto;
            left: auto;
            right: auto
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li .item_link {
            width: auto;
            height: auto;
            min-width: inherit;
            max-width: inherit
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link > .link_content {
            display: block;
            float: none;
            padding: 0;
            position: static;
            border: 0 none
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link .link_text {
            white-space: normal;
            word-wrap: break-word;
            word-break: normal;
            display: table-cell;
            line-height: 120%;
            vertical-align: middle;
            position: static;
            padding: 0;
            border: 0 none;
            height: auto
        }

        .mega_main_menu a.disable_icon > i, .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link.disable_icon i {
            display: none
        }

        .mega_main_menu ul > li a.item_link {
            text-decoration: none
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link:after {
            content: '';
            display: block;
            width: 0;
            height: 0;
            position: absolute;
            top: 50%;
            right: 5px;
            margin-top: -2px;
            border-width: 4px 3px;
            border-style: solid
        }

        body .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li > .item_link:after, body .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li[class*=current] > .item_link:after, body [class] .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li > .item_link:after, body [class] .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li[class*=current] > .item_link:after {
            border-top-color: inherit;
            border-right-color: transparent !important;
            border-bottom-color: transparent !important;
            border-left-color: transparent !important
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link:last-child:after {
            display: none
        }

        .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > .nav_logo:before, .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box:before, .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li > .item_link:before {
            content: '';
            width: 2px;
            height: 100%;
            margin: 0;
            padding: 0;
            display: block;
            position: absolute;
            top: 0;
            bottom: auto;
            z-index: 2;
            border-width: 0;
            border-style: none;
            background-repeat: no-repeat;
            background-size: 400% 100%;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAyCAYAAABh7ppAAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAOdJREFUeNqk0ssKhCAUBuC8zbaIossDzqN3oYii3ZiZQYuU+m0ocOHx4/ekEq11cPURQr77Gj0X53ne5+xcs8A4jsytWZO+75mbwM+Ttm2524tVaJoGg6qq9jm5BXVde4GAwPSAQdd13P11CwzDICCYpknAg5JSfmCC+XDCE8Dd2lXCf4D6trgC4nUCBAy+6mORIkB9CasZCgF1oNuTVL7rXuCbfAqCV0CaoV+B5UnC6gPqFgghfvDZh2GIE+I4lvAu0jTFR53nuYSgKAovwFuUZYkvy/SAQZZlGCRJoiCIoki5TW4CDACPvE4qiEdEewAAAABJRU5ErkJggg==)
        }

        .mega_main_menu.direction-horizontal.first-lvl-separator-none > .menu_holder > .menu_inner > .nav_logo:before, .mega_main_menu.direction-horizontal.first-lvl-separator-none > .menu_holder > .menu_inner > ul > li.nav_search_box:before, .mega_main_menu.direction-horizontal.first-lvl-separator-none > .menu_holder > .menu_inner > ul > li > .item_link:before {
            background-position: 0 0
        }

        .mega_main_menu.direction-horizontal.first-lvl-align-left > .menu_holder > .menu_inner > .nav_logo:before {
            right: -1px;
            left: auto
        }

        .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box:before, .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li > .item_link:before {
            left: -1px;
            right: auto
        }

        .mega_main_menu.direction-horizontal > .menu_holder > .menu_inner > ul > li:first-child > .item_link:before {
            display: none
        }

        .mega_main_menu .item_link > .link_content > .link_text {
            display: inline;
            white-space: normal;
            word-wrap: break-word;
            word-break: normal
        }

        .mega_main_menu li.menu-item {
            position: relative
        }

        @media (max-width: 1199px) {
            .mega_main_menu .nav_logo .logo_link, .mega_main_menu ul .nav_search_box, .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link {
                padding-left: 13px;
                padding-right: 13px
            }

            .mega_main_menu ul .nav_search_box {
                width: 52px
            }

            .mega_main_menu ul .nav_search_box .mega_main_menu_searchform {
                right: 10px
            }
        }

        @media (max-width: 991px) {
            .mega_main_menu > .menu_holder > .menu_inner > .nav_logo .logo_link, .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box, .mega_main_menu > .menu_holder > .menu_inner > ul > li > .item_link {
                padding-left: 10px;
                padding-right: 10px
            }
        }

        @media (max-width: 959px) {
            .mega_main_menu.responsive-enable > .menu_holder > .menu_inner {
                width: auto !important
            }

            .mega_main_menu.responsive-enable > .menu_holder > .menu_inner > .nav_logo {
                float: none
            }

            .mega_main_menu.responsive-enable.logo-mobile > .menu_holder > .menu_inner > .nav_logo > .logo_link {
                display: block
            }

            .mega_main_menu.responsive-enable.direction-horizontal[class*=first-lvl-align] > .menu_holder > .menu_inner > .nav_logo:before {
                display: none
            }

            .mega_main_menu.responsive-enable > .menu_holder > .menu_inner > .nav_logo:after {
                content: '';
                display: table;
                clear: both;
                width: 100%;
                height: 0;
                position: relative
            }

            .mega_main_menu.responsive-enable.direction-horizontal > .menu_holder > .menu_inner > ul > li.nav_search_box:before, .mega_main_menu.responsive-enable > .menu_holder > .menu_inner > ul > li > .item_link:before {
                display: none
            }

            .mega_main_menu.responsive-enable.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo .logo_link {
                float: left
            }

            .mega_main_menu.responsive-enable.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo .mobile_toggle {
                display: block;
                float: right;
                text-decoration: none;
                padding: 0
            }

            .mega_main_menu.responsive-enable.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo .mobile_toggle .mobile_button {
                padding-left: 15px;
                padding-right: 15px;
                display: table-cell;
                vertical-align: middle
            }

            .mega_main_menu.responsive-enable.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo .mobile_toggle .mobile_button * {
                line-height: inherit;
                vertical-align: middle
            }

            .mega_main_menu.responsive-enable.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo .mobile_toggle .mobile_button .symbol_cross {
                display: none
            }

            .mega_main_menu.responsive-enable.mobile_minimized-enable > .menu_holder > .menu_inner > ul {
                display: none
            }

            .mega_main_menu.responsive-enable > .menu_holder > .menu_inner > ul > li, .mega_main_menu.responsive-enable > .menu_holder > .menu_inner > ul > li.nav_search_box {
                float: none;
                display: block;
                width: 100%
            }

            .mega_main_menu.responsive-enable > .menu_holder > .menu_inner > ul > li.nav_search_box > .mega_main_menu_searchform {
                display: inline-block;
                width: 100%;
                position: relative;
                right: 0;
                top: 15%;
                float: none;
                vertical-align: middle
            }

            .mega_main_menu.responsive-enable > .menu_holder > .menu_inner > ul > li.nav_search_box > .mega_main_menu_searchform .field {
                width: 100%;
                max-width: 100%;
                padding-left: 10px
            }

            .mega_main_menu.responsive-enable li > .item_link {
                float: none
            }

            .mega_main_menu.responsive-enable > .menu_holder > .menu_inner > ul > li > .item_link:after {
                right: 5px;
                left: auto;
                border-width: 4px 3px;
                border-top-color: inherit;
                border-right-color: transparent !important;
                border-bottom-color: transparent !important;
                border-left-color: transparent !important
            }
        }

        .mega_main_menu.primary .nav_logo > .logo_link > img {
            max-height: 100%
        }

        .mega_main_menu.primary {
            min-height: 40px
        }

        .mega_main_menu.primary.icons-left > .menu_holder > .menu_inner > ul > li > .item_link > i, .mega_main_menu.primary > .menu_holder > .menu_inner > .nav_logo > .logo_link, .mega_main_menu.primary > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle, .mega_main_menu.primary > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle > .mobile_button, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link > .link_content {
            height: 40px;
            line-height: 40px
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link > .link_content > .link_text {
            height: 40px
        }

        @media (max-width: 959px) {
            .mega_main_menu.primary {
                min-height: 40px
            }

            .mega_main_menu.primary.mobile_minimized-enable.icons-left > .menu_holder > .menu_inner > ul > li > .item_link > i, .mega_main_menu.primary.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo > .logo_link, .mega_main_menu.primary.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle, .mega_main_menu.primary.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle > .mobile_button, .mega_main_menu.primary.mobile_minimized-enable > .menu_holder > .menu_inner > ul > li.nav_search_box, .mega_main_menu.primary.mobile_minimized-enable > .menu_holder > .menu_inner > ul > li > .item_link, .mega_main_menu.primary.mobile_minimized-enable > .menu_holder > .menu_inner > ul > li > .item_link > .link_content {
                height: 40px;
                line-height: 40px
            }

            .mega_main_menu.primary.mobile_minimized-enable > .menu_holder > .menu_inner > ul > li > .item_link > .link_content > .link_text {
                height: 40px
            }
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link > i {
            width: 35px
        }

        .mega_main_menu.primary > .menu_holder > .mmm_fullwidth_container {
            background-color: #f4f6f7;
            background: -moz-linear-gradient(top, #f4f6f7 100%, #f4f6f7 100%);
            background: -webkit-linear-gradient(top, #f4f6f7 100%, #f4f6f7 100%);
            background: -o-linear-gradient(top, #f4f6f7 100%, #f4f6f7 100%);
            background: -ms-linear-gradient(top, #f4f6f7 100%, #f4f6f7 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(100%, #f4f6f7), color-stop(100%, #f4f6f7));
            background: linear-gradient(to bottom, #f4f6f7 100%, #f4f6f7 100%)
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle > .mobile_button, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box input, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link .link_text {
            font-family: inherit;
            font-size: 16px;
            font-weight: 400;
            text-transform: none
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box * {
            font-size: 20px
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link > i {
            font-size: 20px
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link > i:before {
            width: 20px
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle > .mobile_button, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link * {
            color: #575756
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:after {
            border-color: #575756;
            color: #575756
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link {
            background-color: rgba(255, 255, 255, 0);
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%);
            background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%);
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(255, 255, 255, 0)), color-stop(100%, rgba(255, 255, 255, 0)));
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%)
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link {
            background-color: rgba(255, 255, 255, 0);
            background: -moz-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%);
            background: -o-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%);
            background: -ms-linear-gradient(top, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(255, 255, 255, 0)), color-stop(100%, rgba(255, 255, 255, 0)));
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0) 100%)
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box > .mega_main_menu_searchform {
            background-color: rgba(255, 255, 255, 0)
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li .icosearch, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box *, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.nav_search_box .field {
            color: #37cea8
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link * {
            color: #37cea8;
            border-color: #37cea8
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link:after {
            border-color: #37cea8
        }

        .mega_main_menu.primary > .menu_holder > .mmm_fullwidth_container {
            border-radius: px
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > span.nav_logo {
            border-radius: px 0 0px
        }

        .mega_main_menu.primary ul .nav_search_box .mega_main_menu_searchform {
            border-radius: .5px
        }

        .mega_main_menu > .menu_holder > .menu_inner > ul > li.nav_search_box .mega_main_menu_searchform {
            border: none;
            margin-top: -14px
        }

        .mega_main_menu .menu_holder .menu_inner > ul > li {
            padding-bottom: 20px
        }

        .mega_main_menu.responsive-enable.mobile_minimized-enable > .menu_holder > .menu_inner > .nav_logo .mobile_toggle .mobile_button * {
            vertical-align: sub
        }

        .mega_main_menu .menu_holder .menu_inner > .nav_logo .mobile_toggle .mobile_button .symbol_menu {
            font-size: 36px
        }

        .vc_row:after, .vc_row:before {
            content: " ";
            display: table
        }

        .vc_row:after {
            clear: both
        }

        @media (max-width: 767px) {
            .vc_hidden-xs {
                display: none !important
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .vc_hidden-sm {
                display: none !important
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .vc_hidden-md {
                display: none !important
            }
        }

        .vc_column_container {
            width: 100%
        }

        .vc_row {
            margin-left: -15px;
            margin-right: -15px
        }

        .vc_col-lg-4, .vc_col-md-4, .vc_col-sm-10, .vc_col-sm-12, .vc_col-sm-2, .vc_col-sm-4, .vc_col-sm-6, .vc_col-xs-10, .vc_col-xs-2 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        .vc_col-xs-10, .vc_col-xs-2 {
            float: left
        }

        .vc_col-xs-10 {
            width: 83.33333333%
        }

        .vc_col-xs-2 {
            width: 16.66666667%
        }

        @media (min-width: 768px) {
            .vc_col-sm-10, .vc_col-sm-12, .vc_col-sm-2, .vc_col-sm-4, .vc_col-sm-6 {
                float: left
            }

            .vc_col-sm-12 {
                width: 100%
            }

            .vc_col-sm-10 {
                width: 83.33333333%
            }

            .vc_col-sm-6 {
                width: 50%
            }

            .vc_col-sm-4 {
                width: 33.33333333%
            }

            .vc_col-sm-2 {
                width: 16.66666667%
            }
        }

        @media (min-width: 992px) {
            .vc_col-md-4 {
                float: left
            }

            .vc_col-md-4 {
                width: 33.33333333%
            }
        }

        @media (min-width: 1200px) {
            .vc_col-lg-4 {
                float: left
            }

            .vc_col-lg-4 {
                width: 33.33333333%
            }
        }

        .vc_clearfix:after, .vc_clearfix:before {
            content: " ";
            display: table
        }

        .vc_clearfix:after {
            clear: both
        }

        .vc_clearfix:after, .vc_clearfix:before {
            content: " ";
            display: table
        }

        .vc_clearfix:after {
            clear: both
        }

        .wpb_content_element {
            margin-bottom: 35px
        }

        .vc_row.vc_row-no-padding .vc_column-inner {
            padding-left: 0;
            padding-right: 0
        }

        .vc_row[data-vc-full-width] {
            overflow: hidden
        }

        .vc_column-inner:after, .vc_column-inner:before {
            content: " ";
            display: table
        }

        .vc_column-inner:after {
            clear: both
        }

        .vc_column_container {
            padding-left: 0;
            padding-right: 0
        }

        .vc_column_container > .vc_column-inner {
            box-sizing: border-box;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%
        }</style>
    <script type='text/javascript'
            src='https://mioskin.com.vn/xit-duong-te-bao-goc/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script data-optimized='1' src='https://mioskin.com.vn/xit-duong-te-bao-goc/min/920b8.js' defer></script>
    <script id="litespeed-css-async-lib">!function (a) {
            "use strict";
            var b = function (b, c, d) {
                function e(a) {
                    return h.body ? a() : void setTimeout(function () {
                        e(a)
                    })
                }

                function f() {
                    i.addEventListener && i.removeEventListener("load", f), i.media = d || "all"
                }

                var g, h = a.document, i = h.createElement("link");
                if (c) g = c; else {
                    var j = (h.body || h.getElementsByTagName("head")[0]).childNodes;
                    g = j[j.length - 1]
                }
                var k = h.styleSheets;
                i.rel = "stylesheet", i.href = b, i.media = "only x", e(function () {
                    g.parentNode.insertBefore(i, c ? g : g.nextSibling)
                });
                var l = function (a) {
                    for (var b = i.href, c = k.length; c--;) if (k[c].href === b) return a();
                    setTimeout(function () {
                        l(a)
                    })
                };
                return i.addEventListener && i.addEventListener("load", f), i.onloadcssdefined = l, l(f), i
            };
            "undefined" != typeof exports ? exports.loadCSS = b : a.loadCSS = b
        }("undefined" != typeof global ? global : this);
        !function (a) {
            if (a.loadCSS) {
                var b = loadCSS.relpreload = {};
                if (b.support = function () {
                    try {
                        return a.document.createElement("link").relList.supports("preload")
                    } catch (b) {
                        return !1
                    }
                }, b.poly = function () {
                    for (var b = a.document.getElementsByTagName("link"), c = 0; c < b.length; c++) {
                        var d = b[c];
                        "preload" === d.rel && "style" === d.getAttribute("as") && (a.loadCSS(d.href, d, d.getAttribute("media")), d.rel = null)
                    }
                }, !b.support()) {
                    b.poly();
                    var c = a.setInterval(b.poly, 300);
                    a.addEventListener && a.addEventListener("load", function () {
                        b.poly(), a.clearInterval(c)
                    }), a.attachEvent && a.attachEvent("onload", function () {
                        a.clearInterval(c)
                    })
                }
            }
        }(this);</script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://mioskin.com.vn/xit-duong-te-bao-goc/xmlrpc.php">
    <title>Xịt dưỡng tế bào gốc MIO SKIN - nhập khẩu từ Hàn Quốc</title>
    <meta name="description"
          content="Xịt dưỡng tế bào gốc MIO SKIN - nhập khẩu chính hãng từ Hàn Quốc, giúp làn da luôn căng mịn, sáng ngời và luôn luôn rạng rỡ"/>
    <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large"/>
    <link rel="canonical" href="https://mioskin.com.vn/xit-duong-te-bao-goc/"/>
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Xịt dưỡng tế bào gốc MIO SKIN - nhập khẩu từ Hàn Quốc">
    <meta property="og:description"
          content="Xịt dưỡng tế bào gốc MIO SKIN - nhập khẩu chính hãng từ Hàn Quốc, giúp làn da luôn căng mịn, sáng ngời và luôn luôn rạng rỡ">
    <meta property="og:url" content="https://mioskin.com.vn/xit-duong-te-bao-goc/">
    <meta property="og:site_name" content="Xịt dưỡng tế bào gốc MIO SKIN">
    <meta property="og:updated_time" content="2020-01-09T03:55:31+00:00">
    <meta property="og:image"
          content="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/review-xit-duong-te-bao-goc-mio-skin-5.jpg">
    <meta property="og:image:secure_url"
          content="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/review-xit-duong-te-bao-goc-mio-skin-5.jpg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="528">
    <meta property="og:image:alt" content="Xịt dưỡng tế bào gốc MIOSKIN">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Xịt dưỡng tế bào gốc MIO SKIN - nhập khẩu từ Hàn Quốc">
    <meta name="twitter:description"
          content="Xịt dưỡng tế bào gốc MIO SKIN - nhập khẩu chính hãng từ Hàn Quốc, giúp làn da luôn căng mịn, sáng ngời và luôn luôn rạng rỡ">
    <meta name="twitter:image"
          content="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/review-xit-duong-te-bao-goc-mio-skin-5.jpg">
    <script type="application/ld+json">
        {"@context":"https:\/\/schema.org","@type":"WebSite","@id":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc\/#website","url":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc","name":"MIO SKIN","potentialAction":{"@type":"SearchAction","target":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc\/?s={search_term_string}","query-input":"required name=search_term_string"}}
    </script>
    <script type="application/ld+json">
        {"@context":"https:\/\/schema.org","@type":"Article","headline":"X\u1ecbt d\u01b0\u1ee1ng t\u1ebf b\u00e0o g\u1ed1c MIO SKIN - nh\u1eadp kh\u1ea9u t\u1eeb H\u00e0n Qu\u1ed1c","description":"X\u1ecbt d\u01b0\u1ee1ng t\u1ebf b\u00e0o g\u1ed1c MIO SKIN - nh\u1eadp kh\u1ea9u ch\u00ednh h\u00e3ng t\u1eeb H\u00e0n Qu\u1ed1c, gi\u00fap l\u00e0n da lu\u00f4n c\u0103ng m\u1ecbn, s\u00e1ng ng\u1eddi v\u00e0 lu\u00f4n lu\u00f4n r\u1ea1ng r\u1ee1","datePublished":"2017-02-10T16:02:18+00:00","dateModified":"2020-01-09T03:55:31+00:00","publisher":{"@type":"Organization","name":"MIO SKIN","logo":{"@type":"ImageObject","url":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc\/wp-content\/uploads\/2019\/11\/Mioskin-2.png"}},"mainEntityOfPage":{"@type":"WebPage","@id":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc\/"},"author":{"@type":"Person","name":"admin"},"image":{"@type":"ImageObject","url":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc\/wp-content\/uploads\/2019\/11\/review-xit-duong-te-bao-goc-mio-skin-5.jpg","width":800,"height":528}}
    </script>
    <script type="application/ld+json">
        {"@context":"https:\/\/schema.org","@type":"Organization","@id":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc#organization","name":"MIO SKIN","url":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc","sameAs":[],"logo":"https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc\/wp-content\/uploads\/2019\/11\/Mioskin-2.png"}
    </script>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
    <link rel='dns-prefetch' href='//s.w.org'/>
    <link rel="alternate" type="application/rss+xml" title="Dòng thông tin Xịt dưỡng tế bào gốc MIO SKIN &raquo;"
          href="https://mioskin.com.vn/xit-duong-te-bao-goc/index.php/feed/"/>
    <link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Xịt dưỡng tế bào gốc MIO SKIN &raquo;"
          href="https://mioskin.com.vn/xit-duong-te-bao-goc/index.php/comments/feed/"/>
    <link rel="alternate" type="application/rss+xml"
          title="Xịt dưỡng tế bào gốc MIO SKIN &raquo; Xịt dưỡng tế bào gốc MIO SKIN Dòng phản hồi"
          href="https://mioskin.com.vn/xit-duong-te-bao-goc/index.php/diet-landing-page/feed/"/>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload'
          id='wp-block-library-css' href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/5e18e.css' type='text/css'
          media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='wp-block-library-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/5e18e.css' type='text/css' media='all'/>
    </noscript>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload' id='bootstrap-css'
          href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/31922.css' type='text/css' media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='bootstrap-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/31922.css' type='text/css' media='all'/>
    </noscript>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload'
          id='fontawesome-css' href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/aa525.css' type='text/css'
          media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='fontawesome-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/aa525.css' type='text/css' media='all'/>
    </noscript>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload' id='animate-css'
          href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/04a50.css' type='text/css' media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='animate-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/04a50.css' type='text/css' media='all'/>
    </noscript>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload'
          id='magnific-popup-css' href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/42509.css' type='text/css'
          media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='magnific-popup-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/42509.css' type='text/css' media='all'/>
    </noscript>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload'
          id='leadinjection-style-css' href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/245b1.css' type='text/css'
          media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='leadinjection-style-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/245b1.css' type='text/css' media='all'/>
    </noscript>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload'
          id='mm_icomoon-css' href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/f1cd7.css' type='text/css'
          media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='mm_icomoon-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/f1cd7.css' type='text/css' media='all'/>
    </noscript>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload'
          id='mmm_mega_main_menu-css' href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/76213.css' type='text/css'
          media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='mmm_mega_main_menu-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/76213.css' type='text/css' media='all'/>
    </noscript>
    <!--[if lt IE 9]>
    <link rel='stylesheet' id='vc_lte_ie9-css'
          href='https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css?ver=6.0.3'
          type='text/css' media='screen'/>
    <![endif]-->
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload'
          id='js_composer_front-css' href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/31a99.css' type='text/css'
          media='all'/>
    <noscript>
        <link data-optimized='1' rel='stylesheet' id='js_composer_front-css'
              href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/31a99.css' type='text/css' media='all'/>
    </noscript>
    <style id='js_composer_front-inline-css' type='text/css'>.vc_custom_1578540110360 {
            margin-top: 2px !important;
            margin-bottom: 70px !important
        }

        .vc_custom_1578540144616 {
            margin-top: 2px !important;
            margin-bottom: 70px !important;
            background-color: #f4f6f7 !important
        }

        .vc_custom_1574818838024 {
            margin-bottom: 60px !important
        }

        .vc_custom_1529071300256 {
            margin-bottom: 75px !important
        }

        .vc_custom_1574818981623 {
            margin-bottom: 60px !important
        }

        .vc_custom_1578540635297 {
            padding-top: 65px !important;
            padding-bottom: 70px !important;
            background-color: #3cb7b2 !important
        }

        .vc_custom_1574819009010 {
            margin-bottom: 60px !important
        }

        .vc_custom_1574819044105 {
            margin-bottom: 75px !important;
            padding-top: 70px !important;
            padding-bottom: 75px !important;
            background-color: #effbf8 !important
        }

        .vc_custom_1574819069839 {
            margin-bottom: 60px !important
        }

        .vc_custom_1529071549442 {
            margin-bottom: 80px !important
        }

        .vc_custom_1574819153370 {
            margin-bottom: 75px !important
        }

        .vc_custom_1529071840478 {
            margin-bottom: 55px !important
        }

        .vc_custom_1574002866663 {
            margin-bottom: 75px !important;
            padding-top: 85px !important;
            padding-bottom: 85px !important
        }

        .vc_custom_1525093940308 {
            margin-bottom: 0 !important;
            padding-top: 85px !important;
            padding-bottom: 85px !important;
            background-color: #37cea8 !important
        }

        .vc_custom_1573921644860 {
            margin-top: 10px !important
        }

        .vc_custom_1573921698436 {
            margin-top: 25px !important
        }

        .vc_custom_1573921726544 {
            margin-top: 10px !important
        }

        .vc_custom_1573921738402 {
            margin-top: 25px !important
        }

        .vc_custom_1573921800642 {
            margin-top: 10px !important
        }

        .vc_custom_1573921859859 {
            margin-top: 25px !important
        }

        .vc_custom_1528904455484 {
            border-bottom-width: 5px !important;
            padding-top: 27px !important;
            padding-right: 27px !important;
            padding-bottom: 27px !important;
            padding-left: 27px !important;
            background-color: #fff !important;
            border-bottom-color: #37cea8 !important;
            border-bottom-style: solid !important;
            border-radius: 5px !important
        }

        .vc_custom_1528904528208 {
            border-bottom-width: 5px !important;
            padding-top: 27px !important;
            padding-right: 27px !important;
            padding-bottom: 27px !important;
            padding-left: 27px !important;
            background-color: #fff !important;
            border-bottom-color: #37cea8 !important;
            border-bottom-style: solid !important;
            border-radius: 5px !important
        }

        .vc_custom_1528904558501 {
            border-bottom-width: 5px !important;
            padding-top: 27px !important;
            padding-right: 27px !important;
            padding-bottom: 27px !important;
            padding-left: 27px !important;
            background-color: #fff !important;
            border-bottom-color: #37cea8 !important;
            border-bottom-style: solid !important;
            border-radius: 5px !important
        }

        .vc_custom_1574606938375 {
            margin-top: 25px !important
        }

        .vc_custom_1574606981027 {
            margin-top: 25px !important
        }

        .vc_custom_1574607266401 {
            padding-top: 27px !important
        }

        .vc_custom_1574607253661 {
            margin-top: 25px !important
        }

        .vc_custom_1574607336856 {
            margin-top: 25px !important
        }

        .vc_custom_1574607045964 {
            margin-top: 25px !important
        }

        .vc_custom_1574607087977 {
            margin-top: 25px !important
        }

        .vc_custom_1574607389566 {
            padding-top: 27px !important
        }

        .vc_custom_1574607375825 {
            margin-top: 25px !important
        }

        .vc_custom_1574607436888 {
            margin-top: 25px !important
        }

        .vc_custom_1574607116776 {
            margin-top: 25px !important
        }

        .vc_custom_1574607214749 {
            margin-top: 25px !important
        }

        .vc_custom_1574607487550 {
            padding-top: 27px !important
        }

        .vc_custom_1574607473311 {
            margin-top: 25px !important
        }

        .vc_custom_1574607534675 {
            margin-top: 25px !important
        }

        .vc_custom_1574005085907 {
            margin-top: 27px !important
        }

        .vc_custom_1525091047831 {
            margin-top: 85px !important;
            margin-bottom: 0 !important
        }

        .vc_custom_1574003459838 {
            margin-top: 27px !important
        }

        .vc_custom_1574003493592 {
            margin-top: 27px !important
        }

        .vc_custom_1574003521623 {
            margin-top: 27px !important
        }

        .vc_custom_1574003541012 {
            margin-top: 27px !important
        }

        .vc_custom_1574780163492 {
            margin-top: 45px !important
        }

        .vc_custom_1574780503084 {
            margin-top: 45px !important
        }

        .vc_custom_1528904778953 {
            border-bottom-width: 5px !important;
            padding-top: 50px !important;
            padding-right: 50px !important;
            padding-bottom: 50px !important;
            padding-left: 50px !important;
            background-color: #fff !important;
            border-bottom-color: #37cea8 !important;
            border-bottom-style: solid !important;
            border-radius: 5px !important
        }

        .vc_custom_1578541439760 {
            margin-top: 27px !important;
            margin-bottom: 27px !important
        }</style>
    <link data-asynced='1' as='style' onload='this.rel="stylesheet"' rel='preload'
          id='redux-google-fonts-rdx_option-css'
          href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C300%2C400%2C500%2C700%2C900%2C100italic%2C300italic%2C400italic%2C500italic%2C700italic%2C900italic&#038;ver=5.3.2'
          type='text/css' media='all'/>
    <noscript>
        <link rel='stylesheet' id='redux-google-fonts-rdx_option-css'
              href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C300%2C400%2C500%2C700%2C900%2C100italic%2C300italic%2C400italic%2C500italic%2C700italic%2C900italic&#038;ver=5.3.2'
              type='text/css' media='all'/>
    </noscript>
    <link rel='https://api.w.org/' href='https://mioskin.com.vn/xit-duong-te-bao-goc/index.php/wp-json/'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
          href="https://mioskin.com.vn/xit-duong-te-bao-goc/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 5.3.2"/>
    <link rel='shortlink' href='https://mioskin.com.vn/xit-duong-te-bao-goc/'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://mioskin.com.vn/xit-duong-te-bao-goc/index.php/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmioskin.com.vn%2Fxit-duong-te-bao-goc%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://mioskin.com.vn/xit-duong-te-bao-goc/index.php/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmioskin.com.vn%2Fxit-duong-te-bao-goc%2F&#038;format=xml"/>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
    <style type="text/css" title="dynamic-css" class="options-output">h1, h2, h3, h4, h5, h6 {
            font-family: Roboto;
            font-weight: 400;
            font-style: normal
        }

        body {
            font-family: Roboto;
            line-height: 28px;
            font-weight: 400;
            font-style: normal;
            color: #575756;
            font-size: 16px
        }

        a, .li-heading, .feature-icon-text .feature-icon-text-icon.underline, .li-footer h1, .li-footer h2, .li-footer h3, .li-footer h4, .li-footer h5, .li-footer h6, .widget ul li a:after, .widget_recent_comments ul li:before, .widget_recent_comments ul li a, .pagination .page-numbers, #wp-calendar caption, .comments-area h2, .search-result-title span, .header-nav .navbar ul li .dropdown-menu li a:after, .header-nav .navbar ul a:hover, .header-nav .navbar ul li.open a, .header-nav .navbar ul li.active a:hover, .header-nav .navbar ul li.open a:focus, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover, .li-rating-slider .stars, .li-rating-slider .author, .li-countdown, .pricing-table .pricing-table-col .pricing-table-price, .error-404 h3, .li-review-block .review-block-author-source, .person-profile .person-profile-content .person-profile-name, .person-profile .person-profile-social-links li a:hover, .li-person-profile-small .profile-social-links li a:hover, .li-person-profile-small .profile-name, .feature-icon-text .feature-icon-text-icon, .li-side-icon-text .li-side-icon-text-icon, .li-icon-list li i, .li-icon-list li span, .li-icon-list .list-item-icon, .li-icon-text-box .li-icon-text-box-inner .li-icon-text-box-title, .li-icon-text-box .li-icon-text-box-inner .li-icon-text-box-icon, .li-icon .li-icon-sign.icon-default, .li-icon .li-icon-sign.big:hover.big, .li-icon .li-icon-sign.icon-default:hover.round, .li-icon .li-icon-sign.icon-default:hover.square, .li-icon .li-icon-sign.icon-default.outline, .li-icon .li-icon-sign.icon-default.round.outline, .li-icon .li-icon-sign.icon-default.square.outline, .li-icon .li-icon-sign.icon-white:hover.round.outline a {
            color: #37cea8
        }

        .widget_search .search-submit, .pagination .page-numbers.current, .navbar-default .navbar-toggle .icon-bar, .pagination .page-numbers:hover, .widget_tag_cloud .tagcloud a:hover, .search .search-submit, .header-nav .navbar ul li .dropdown-menu li a:hover, .image-testimonial-slider .image-testimonial-slider-slides, .li-image figure, .page-title, .error-404 .search-submit, .location-map .location-map-address .location-map-address-box, .person-profile .person-profile-social-links li a, .li-accordion .panel-heading, .li-accordion-bullets-round .panel-heading, .scroll-up-btn:hover, .label-default, .pricing-table .pricing-table-col.highlight, .li-icon .li-icon-sign.icon-default.round, .li-icon .li-icon-sign.icon-default.square, .li-icon .li-icon-sign.icon-default:hover.round.outline, .li-icon .li-icon-sign.icon-default:hover.square.outline, .li-side-icon-text .li-side-icon-text-icon_round, .post .post-quote, .post .post-audio, .post .post-link {
            background-color: #37cea8
        }

        .author-post .author-img img, .comments-area .comment-author img, .js div#preloader .loader, .search-result-title, .feature-icon-text .feature-icon-text-icon.underline, .header-nav .navbar ul li .dropdown-menu, .image-testimonial-slider .image-testimonial-slider-indicators li.active, .image-testimonial-slider .image-testimonial-slider-arrow, .image-testimonial-slider.outline .image-testimonial-slider-slides, .image-testimonial-slider.outline .image-testimonial-slider-arrow, .li-countdown.box .li-countdown-block, .li-countdown.line .li-countdown-block .li-countdown-counter, .li-countdown.round .li-countdown-bloc, .error-404 .container, .location-map #location-map-gmap, .person-profile .person-profile-social-links li a:hover, .li-person-profile-small .profile-social-links li a:hover, .widget_search .search-field:focus, .li-accordion .panel-heading, .li-accordion .panel, blockquote, .wpcf7-defaults:focus, .wpcf7-text:focus, .wpcf7-date:focus, .wpcf7-number:focus, .wpcf7-textarea:focus, .wpcf7-select:focus, .wpcf7-quiz:focus, .li-side-icon-text .li-side-icon-text-icon_outline, .li-icon-text-box, .li-icon .li-icon-sign.icon-default.underline, .li-icon .li-icon-sign.icon-default:hover.round, .li-icon .li-icon-sign.icon-default:hover.square, .li-icon .li-icon-sign.icon-default.outline, .li-icon .li-icon-sign.icon-default.round.outline, .li-icon .li-icon-sign.icon-default:hover.round.outline, .li-icon .li-icon-sign.icon-default.square.outline, .li-icon .li-icon-sign.icon-default:hover.square.outline {
            border-color: #37cea8
        }

        body, .js div#preloader {
            background-color: #eee
        }

        .page-container {
            background-color: #fff
        }

        .li-header.header-style-2 .header-top {
            background-color: #fff
        }

        .li-header {
            background-color: #f4f6f7
        }

        .page-title h1, .page-title .breadcrumbs, .page-title .breadcrumbs li a {
            color: #fff
        }

        .li-footer .footer-widget-bar {
            background-color: #f4f6f7
        }

        .li-footer .footer-copyright {
            background-color: #f4f6f7
        }

        .li-footer .footer-copyright {
            color: #1e73be
        }

        .btn-custom1, .btn-custom1.btn-outline {
            color: #fff
        }

        .btn-custom1:hover {
            color: #fff
        }

        .btn-custom1 {
            background-color: #37cea8
        }

        .btn-custom1:hover, .btn-custom1.btn-outline:hover, .btn-custom1:focus {
            background-color: #ff3b7c
        }

        .btn-custom1, .btn-custom1.btn-outline {
            border-color: #37cea8
        }

        .btn-custom1:hover, .btn-custom1.btn-outline:hover {
            border-color: #ff3b7c
        }

        .btn-custom2, .btn-custom2.btn-outline {
            color: #fff
        }

        .btn-custom2:hover, .btn-custom2.btn-outline:hover {
            color: #fff
        }

        .btn-custom2 {
            background-color: #ff3b7c
        }

        .btn-custom2:hover, .btn-custom2.btn-outline:hover, .btn-custom2:focus {
            background-color: #ff3b7c
        }

        .btn-custom2, .btn-custom2.btn-outline {
            border-color: #37cea8
        }

        .btn-custom2:hover, .btn-custom2.btn-outline:hover {
            border-color: #ff3b7c
        }

        .btn-custom2.btn-3d {
            border-bottom-color: #ff3b7c
        }</style>
    <noscript>
        <style>.wpb_animate_when_almost_visible {
                opacity: 1
            }</style>
    </noscript>
    <link rel="shortcut icon"
          href="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/Mioskin-2.png"/>
    <!--[if lt IE 9]>
    <script src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/themes/leadinjection/bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <script src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/themes/leadinjection/bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
    <style>.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link .link_text, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link .link_text, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-post-ancestor > .item_link .link_text, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link .link_text {
            color: #324f5c
        }

        .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link .link_text, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover .link_text, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus .link_text, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link:hover .link_text, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link:hover .link_text, .mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-post-ancestor > .item_link:hover .link_text {
            color: #37cea8
        }</style>

</head>
<body data-rsssl=1
      class="home page-template-default page page-id-7 mmm mega_main_menu-2-2-0 wpb-js-composer js-comp-ver-6.0.3 vc_responsive">
<div id="li-page-top" class="page-container fluid">
    <div class="li-header header-style-2 show">
        <div class="header-top">
            <div class="container">
                <div class="col-sm-4">
                    <div class="header-logo">
                        <a href="https://mioskin.com.vn/xit-duong-te-bao-goc">
                            <img src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/Mioskin-2.png"
                                 alt="Xịt dưỡng tế bào gốc MIO SKIN">
                        </a></div>
                </div>
                <div class="col-sm-8"></div>
            </div>
        </div>
        <nav class="navbar">
            <div id="primary"
                 class="mega_main_menu primary primary_style-flat icons-left first-lvl-align-left first-lvl-separator-none direction-horizontal fullwidth-disable pushing_content-disable mobile_minimized-enable dropdowns_trigger-hover dropdowns_animation-anim_2 include-search no-woo_cart no-buddypress responsive-enable coercive_styles-disable indefinite_location_mode-disable language_direction-ltr version-2-2-0 logo-mobile mega_main">
                <div class="menu_holder">
                    <div class="mmm_fullwidth_container"></div>
                    <div class="menu_inner" role="navigation">
<span class="nav_logo">
<a class="logo_link" href="https://mioskin.com.vn/xit-duong-te-bao-goc" title="Xịt dưỡng tế bào gốc MIO SKIN">
<img src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/Mioskin-2-300x80.png"
     alt="Xịt dưỡng tế bào gốc MIO SKIN"/>
</a>
<span class="mobile_toggle" data-target="#main_ul-primary" aria-expanded="false" aria-controls="main_ul-primary">
<span class="mobile_button">
MENU &nbsp;
<span class="symbol_menu">&equiv;</span>
<span class="symbol_cross">&#x2573;</span>
</span>
</span>
</span>
                        <ul id="main_ul-primary" class="mega_main_menu_ul" role="menubar" aria-label="MENU">
                            <li id="menu-item-162"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-162 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                <a href="https://mioskin.com.vn/xit-duong-te-bao-goc/" class="item_link  disable_icon"
                                   role="menuitem" tabindex="0">
                                    <i class=""></i>
                                    <span class="link_content">
<span class="link_text">
Đầu Trang
</span>
</span>
                                </a></li>
                            <li id="menu-item-227"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-227 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                <a href="#gioi-thieu" class="item_link  disable_icon" role="menuitem" tabindex="0">
                                    <i class=""></i>
                                    <span class="link_content">
<span class="link_text">
Giới thiệu
</span>
</span>
                                </a></li>
                            <li id="menu-item-228"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-228 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                <a href="#thanh-phan" class="item_link  disable_icon" role="menuitem" tabindex="0">
                                    <i class=""></i>
                                    <span class="link_content">
<span class="link_text">
Thành phần
</span>
</span>
                                </a></li>
                            <li id="menu-item-229"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-229 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                <a href="#tac-dung" class="item_link  disable_icon" role="menuitem" tabindex="0">
                                    <i class=""></i>
                                    <span class="link_content">
<span class="link_text">
Tác dụng
</span>
</span>
                                </a></li>
                            <li id="menu-item-230"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-230 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                <a href="#ket-qua" class="item_link  disable_icon" role="menuitem" tabindex="0">
                                    <i class=""></i>
                                    <span class="link_content">
<span class="link_text">
Kết quả
</span>
</span>
                                </a></li>
                            <li id="menu-item-231"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-231 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                <a href="#cam-nhan-nguoi-dung" class="item_link  disable_icon" role="menuitem"
                                   tabindex="0">
                                    <i class=""></i>
                                    <span class="link_content">
<span class="link_text">
Cảm nhận người dùng
</span>
</span>
                                </a></li>
                            <li id="menu-item-233"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-233 default_dropdown default_style drop_to_right submenu_default_width columns1">
                                <a href="#lien-he" class="item_link  disable_icon" role="menuitem" tabindex="0">
                                    <i class=""></i>
                                    <span class="link_content">
<span class="link_text">
Liên hệ
</span>
</span>
                                </a></li>
                            <li class="nav_search_box">
                                <form method="get" class="mega_main_menu_searchform"
                                      action="https://mioskin.com.vn/xit-duong-te-bao-goc/">
                                    <i class="im-icon-search-3 icosearch"></i>
                                    <input type="text" class="field" name="s" id="s"/>
                                    <input type="submit" class="submit" name="submit" id="searchsubmit" value="Search"/>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="page" class="hfeed site ">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                         class="vc_row wpb_row vc_row-fluid vc_custom_1578540110360">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div id="image_5e51f3a518f66" class="li-image">
                                                <img width="1240" height="800"
                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/mioskin-banner-1.jpg"
                                                     class="img-responsive" alt="Mioskin banner"
                                                     srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/mioskin-banner-1.jpg 1240w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/mioskin-banner-1-300x194.jpg 300w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/mioskin-banner-1-1024x661.jpg 1024w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/mioskin-banner-1-768x495.jpg 768w"
                                                     sizes="(max-width: 1240px) 100vw, 1240px"/></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div id="gioi-thieu" class="vc_row wpb_row vc_row-fluid vc_custom_1574818838024 row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h2 id="heading_5e51f3a51af8d" class="li-heading  center fw-light"
                                                style="color: #324f5c;">
                                                Xịt dưỡng tế bào gốc MIOSKIN có gì đặc biệt?
                                                <small class="fw-light">Có 3 ưu điểm sẽ giúp bạn luôn hài lòng về sản
                                                    phẩm
                                                </small>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1529071300256 row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-xs-2">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper"><h1 id="heading_5e51f3a51c4f0"
                                                                                     class="li-heading  left fw-bold   content-center-sm">
                                                                1.</h1></div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-xs-10">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <h6 id="heading_5e51f3a51c8d1"
                                                                class="li-heading  left fw-bold         vc_custom_1573921644860"
                                                                style="color: #324f5c;">
                                                                Là sản phẩm xịt dưỡng đầu tiên
                                                                <small class="fw-normal">và duy nhất</small>
                                                            </h6>
                                                            <div id="textblock_5e51f3a51c93e"
                                                                 class="li-textblock          vc_custom_1573921698436">
                                                                <p>Áp dụng công nghệ tế bào nhỏ, thẩm thấu nhanh và sâu
                                                                    vào da, giúp tăng cường các chất cho da.</p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-xs-2">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper"><h1 id="heading_5e51f3a51d328"
                                                                                     class="li-heading  left fw-bold   content-center-sm">
                                                                2.</h1></div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-xs-10">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <h6 id="heading_5e51f3a51d6cb"
                                                                class="li-heading  left fw-bold         vc_custom_1573921726544"
                                                                style="color: #324f5c;">
                                                                Cực kỳ tiện lợi
                                                                <small class="fw-normal">và tiết kiệm thời gian</small>
                                                            </h6>
                                                            <div id="textblock_5e51f3a51d73b"
                                                                 class="li-textblock          vc_custom_1573921738402">
                                                                <p class="p1">Xịt dưỡng Tế bào gốc Mioskin cung cấp đầy
                                                                    đủ các dưỡng chất thay thế các bước chăm sóc da cơ
                                                                    bản cho người bận rộn.</p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-2 vc_col-xs-2">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper"><h1 id="heading_5e51f3a51e0ee"
                                                                                     class="li-heading  left fw-bold   content-center-sm">
                                                                3.</h1></div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-xs-10">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <h6 id="heading_5e51f3a51e416"
                                                                class="li-heading  left fw-bold         vc_custom_1573921800642"
                                                                style="color: #324f5c;">
                                                                Chứa nhiều tinh chất quý hiếm
                                                                <small class="fw-normal">với nhiều tác dụng cho da
                                                                </small>
                                                            </h6>
                                                            <div id="textblock_5e51f3a51e468"
                                                                 class="li-textblock          vc_custom_1573921859859">
                                                                <p>Đây là những sản phẩm giúp da trẻ hóa và trắng mịn ở
                                                                    trong các Viện thẩm mỹ cao cấp tại Hàn Quốc.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                <div class="wpb_wrapper">
                                                    <center>
                                                        <iframe data-lazyloaded="1" src="about:blank" width="560"
                                                                height="315"
                                                                data-src="https://www.youtube.com/embed/9TZogjgQhxs"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>
                                                        <noscript>
                                                            <iframe width="560" height="315"
                                                                    src="https://www.youtube.com/embed/9TZogjgQhxs"
                                                                    frameborder="0"
                                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                    allowfullscreen></iframe>
                                                        </noscript>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="btn-wrapper center ">
                                                <button type="button" id="button_5e51f3a51f895"
                                                        class="btn  btn-lg btn-custom2  btn-block" data-toggle="modal"
                                                        data-target="#liModal-105">Đặt mua hàng ngay hôm nay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="thanh-phan" class="vc_row wpb_row vc_row-fluid vc_custom_1574818981623 row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h2 id="heading_5e51f3a520042" class="li-heading  center fw-light"
                                                style="color: #324f5c;">
                                                Thành phẩn của khoảng xịt dưỡng tế bào gốc MIOSKIN có gì đặc biệt?
                                                <small class="fw-light">mà rất nhiều nghệ sĩ nổi tiếng khuyên bạn dùng
                                                </small>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recipes" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="2"
                         class="vc_row wpb_row vc_row-fluid vc_custom_1578540635297 vc_row-has-fill vc_column-gap-35 vc_general vc_parallax vc_parallax-content-moving">
                        <div class="container">
                            <div class="row vc_row  vc_column-gap-35">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 vc_col-has-fill ">
                                    <div class="vc_column-inner vc_custom_1528904455484">
                                        <div class="wpb_wrapper">
                                            <div id="image_5e51f3a520749" class="li-image  center">
                                                <img width="305" height="185"
                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/te-bao-goc-noan-thuc-vat.jpg"
                                                     class="img-responsive"
                                                     alt="Tế bào gốc noãn thực vật - STEM CELL MIST"
                                                     srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/te-bao-goc-noan-thuc-vat.jpg 305w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/te-bao-goc-noan-thuc-vat-300x182.jpg 300w"
                                                     sizes="(max-width: 305px) 100vw, 305px"/></div>
                                            <h6 id="heading_5e51f3a520b7f"
                                                class="li-heading  left fw-bold   content-center-sm      vc_custom_1574606938375"
                                                style="color: #324f5c;">
                                                Tế bào gốc noãn thực vật - STEM CELL MIST</h6>
                                            <div id="textblock_5e51f3a520bd6"
                                                 class="li-textblock    content-center-sm      vc_custom_1574606981027">
                                                <p>Noãn thực vật có tác dụng làm tăng khả năng hấp thu đến 70% lượng oxy
                                                    cung cấp cho da. Khi da được cung cấp nhiều Oxy. Đồng thời các tế
                                                    bào da sẽ tăng năng suất tạo ra những protein khỏe mạnh. Đồng thời
                                                    thúc đẩy nhanh quá trình tổng hợp protein lên tới 42%.</p></div>
                                            <div id="image_5e51f3a520ca1"
                                                 class="li-image  center         vc_custom_1574607266401">
                                                <img width="305" height="185"
                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/nuoc-cay-phi.jpg"
                                                     class="img-responsive"
                                                     alt="Nước cây phỉ nguyên chất - Hamamelis Virginiana"
                                                     srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/nuoc-cay-phi.jpg 305w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/nuoc-cay-phi-300x182.jpg 300w"
                                                     sizes="(max-width: 305px) 100vw, 305px"/></div>
                                            <h6 id="heading_5e51f3a520fbf"
                                                class="li-heading  left fw-bold   content-center-sm      vc_custom_1574607253661"
                                                style="color: #324f5c;">
                                                Nước cây phỉ nguyên chất - Hamamelis Virginiana</h6>
                                            <div id="textblock_5e51f3a521025"
                                                 class="li-textblock    content-center-sm      vc_custom_1574607336856">
                                                <p>Nước chiết xuất cây phỉ có nguồn gốc từ vỏ và lá của cây Phỉ thuộc
                                                    vùng Bắc Mỹ. Vốn dĩ Người Mỹ bản địa từ lâu đã nhận ra các đặc tính
                                                    chữa bệnh của nước cây phỉ. Chiết xuất Cây phỉ có tác dụng ngừa
                                                    viêm, trị suy tĩnh mạch. Ngoài ra còn chữa lành các hư tổn da do các
                                                    yếu tố ngoại cảnh.</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 vc_col-has-fill ">
                                    <div class="vc_column-inner vc_custom_1528904528208">
                                        <div class="wpb_wrapper">
                                            <div id="image_5e51f3a5213fd" class="li-image  center">
                                                <img width="305" height="185"
                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/dna-ca-hoi.jpg"
                                                     class="img-responsive" alt="DNA cá hồi - SALMON DNA"
                                                     srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/dna-ca-hoi.jpg 305w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/dna-ca-hoi-300x182.jpg 300w"
                                                     sizes="(max-width: 305px) 100vw, 305px"/></div>
                                            <h6 id="heading_5e51f3a5223a1"
                                                class="li-heading  left fw-bold   content-center-sm      vc_custom_1574607045964"
                                                style="color: #324f5c;">
                                                DNA cá hồi - SALMON DNA</h6>
                                            <div id="textblock_5e51f3a522436"
                                                 class="li-textblock    content-center-sm      vc_custom_1574607087977">
                                                <p>Cá hồi rất giàu chất protein, vitamin D và các acid béo. Cùng Omega 3
                                                    cùng với khả năng giữ ẩm cho da tránh làm da khô bong tróc và nứt
                                                    nẻ. Tăng sức đề kháng cho làn da thêm khỏe mạnh không bị đen sạm.
                                                    Đồng thời tạo nên màng chắn tia UV do các tác nhân của ánh nắng mặt
                                                    trời.</p></div>
                                            <div id="image_5e51f3a5224f3"
                                                 class="li-image  center         vc_custom_1574607389566">
                                                <img width="305" height="185"
                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/cay-tam-xuan.jpg"
                                                     class="img-responsive"
                                                     alt="Chiết xuất cây tầm xuân - ROSA CANINA EXTRACT"
                                                     srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/cay-tam-xuan.jpg 305w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/cay-tam-xuan-300x182.jpg 300w"
                                                     sizes="(max-width: 305px) 100vw, 305px"/></div>
                                            <h6 id="heading_5e51f3a52295f"
                                                class="li-heading  left fw-bold   content-center-sm      vc_custom_1574607375825"
                                                style="color: #324f5c;">
                                                Chiết xuất cây tầm xuân - ROSA CANINA EXTRACT</h6>
                                            <div id="textblock_5e51f3a5229af"
                                                 class="li-textblock    content-center-sm      vc_custom_1574607436888">
                                                <p>Dầu tầm xuân hay dầu hoa hồng ở Bulgaria được mệnh danh là “vàng
                                                    lỏng” của người Bulgaria. Có công dụng chữa bệnh tuyệt vời như giữ
                                                    ẩm và làm sáng da. Ngoài ra còn thúc đẩy cơ chế làm lành vết thương.
                                                    Không chỉ vậy còn thêm khả năng chống lão hóa, giảm sắc tố trên da
                                                    và kháng khuẩn.</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 vc_col-has-fill ">
                                    <div class="vc_column-inner vc_custom_1528904558501">
                                        <div class="wpb_wrapper">
                                            <div id="image_5e51f3a522d23" class="li-image  center">
                                                <img width="305" height="185"
                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/nam-kim-cuong-den.jpg"
                                                     class="img-responsive" alt="Nấm kim cương đen - BETA GLUCAN"
                                                     srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/nam-kim-cuong-den.jpg 305w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/nam-kim-cuong-den-300x182.jpg 300w"
                                                     sizes="(max-width: 305px) 100vw, 305px"/></div>
                                            <h6 id="heading_5e51f3a523054"
                                                class="li-heading  left fw-bold   content-center-sm      vc_custom_1574607116776"
                                                style="color: #324f5c;">
                                                Nấm kim cương đen - BETA GLUCAN</h6>
                                            <div id="textblock_5e51f3a5230a4"
                                                 class="li-textblock    content-center-sm      vc_custom_1574607214749">
                                                <p>Là một trong những loại nấm đắt tiền và quý nhất thế giới. Chiết xuất
                                                    từ nấm TRUFFLE có tác dụng tuyệt vời với làn da. Truffle đen có thể
                                                    chống lại các loại oxy hóa. Nó có thể cải thiện lưu lượng máu bằng
                                                    cách mở rộng các mạch máu. Ức chế hiện tượng kích ứng da.</p></div>
                                            <div id="image_5e51f3a52314d"
                                                 class="li-image  center         vc_custom_1574607487550">
                                                <img width="305" height="185"
                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tinh-chat-te-bao-goc.jpg"
                                                     class="img-responsive" alt="EGF - Tinh chất tế bào gốc"
                                                     srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tinh-chat-te-bao-goc.jpg 305w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tinh-chat-te-bao-goc-300x182.jpg 300w"
                                                     sizes="(max-width: 305px) 100vw, 305px"/></div>
                                            <h6 id="heading_5e51f3a523461"
                                                class="li-heading  left fw-bold   content-center-sm      vc_custom_1574607473311"
                                                style="color: #324f5c;">
                                                EGF - Tinh chất tế bào gốc</h6>
                                            <div id="textblock_5e51f3a5234b4"
                                                 class="li-textblock    content-center-sm      vc_custom_1574607534675">
                                                <p>Tinh chất tế bào gốc có khả năng kích thích tăng sinh và phân hóa tế
                                                    bào. EGF là tinh chất tế bào gốc thành phần gồm các yếu tố phát
                                                    triển biểu bì và chuỗi tripeptide,… Là sản phẩm bổ trợ giúp làn da
                                                    sau làm chỉ nhanh hồi phục và “đảo ngược” chu kì lão hóa da.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="btn-wrapper center ">
                                                <button type="button" id="button_5e51f3a523d40"
                                                        class="btn  btn-lg btn-custom2  btn-block" data-toggle="modal"
                                                        data-target="#liModal-105">Đặt mua hàng ngay hôm nay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tac-dung" class="vc_row wpb_row vc_row-fluid vc_custom_1574819009010 row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"><h2 id="heading_5e51f3a52450b"
                                                                     class="li-heading  center fw-light"
                                                                     style="color: #324f5c;">
                                                Tác dụng của xịt khoáng tế bào gốc MIOSKIN có gì đặc biệt?</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="reviews" class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-7 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h4 id="heading_5e51f3a524b10" class="li-heading  left fw-normal">
                                                Mioskin chứa các tinh chất quý hiếm. Đặc biệt là tế bào gốc và DNA cá
                                                hồi.
                                                <small class="fw-normal">Và có thể thay thế cho 5 sản phẩm chăm sóc da
                                                    cơ bản:
                                                </small>
                                            </h4>
                                            <div id="textblock_5e51f3a524b76"
                                                 class="li-textblock          vc_custom_1574005085907"><p>
                                                    <strong>Toner:</strong> làm sạch sâu và cân bằng da.</p>
                                                <p><strong>Lotion:</strong> làm mềm, dưỡng ẩm, chống lão hóa và làm sáng
                                                    da.</p>
                                                <p><strong>Dưỡng ẩm mắt:</strong> ngăn ngừa quầng thâm mắt, nếp nhăn,
                                                    vết chân chim ở đuôi mắt. Và thậm chí là bọng mắt.</p>
                                                <p><strong>Serum:</strong> các dưỡng chất thẩm thấu nhanh và sâu vào da
                                                    giúp nuôi dưỡng da từ gốc đến ngọn.</p>
                                                <p><strong>Kem dưỡng:</strong> cấp nước, cấp ẩm, chống lão hóa và dưỡng
                                                    trắng.</p></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-1 vc_col-md-1 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4 content-center-sm">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <script>jQuery(window).on('load', function () {
                                                    jQuery("#ba_image_5e51f3a525059").twentytwenty({default_offset_pct: 0.7});
                                                });</script>
                                            <style scoped>#ba_image_5e51f3a525059 {
                                                    max-width: 328px
                                                }</style>
                                            <div id="ba_image_5e51f3a525059"
                                                 class="li-ba-image  center   content-center-sm">
                                                <img width="328" height="331"
                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin.jpg"
                                                     class="img-responsive" alt="Tác dụng của xịt dưỡng tế bào MIOSKIN"
                                                     srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin.jpg 328w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin-297x300.jpg 297w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin-150x150.jpg 150w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin-160x160.jpg 160w"
                                                     sizes="(max-width: 328px) 100vw, 328px"/> <img width="328"
                                                                                                    height="331"
                                                                                                    src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin-1.jpg"
                                                                                                    class="img-responsive"
                                                                                                    alt="Tác dụng của xịt dưỡng tế bào MIOSKIN"
                                                                                                    srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin-1.jpg 328w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin-1-297x300.jpg 297w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin-1-150x150.jpg 150w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tac-dung-xit-duong-mioskin-1-160x160.jpg 160w"
                                                                                                    sizes="(max-width: 328px) 100vw, 328px"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#divider_5e51f3a525d2e {
                                                    border-color: #d7f5ee
                                                }</style>
                                            <div id="divider_5e51f3a525d2e" class="li-divider_line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ket-qua" data-vc-full-width="true" data-vc-full-width-init="false"
                         class="vc_row wpb_row vc_row-fluid vc_custom_1574819044105 vc_row-has-fill">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-1">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper"></div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-10">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <h2 id="heading_5e51f3a526c5d"
                                                                class="li-heading  center fw-light"
                                                                style="color: #324f5c;">
                                                                Kết quả sau khi dùng sản phẩm
                                                                <small class="fw-light">khoáng xịt dưỡng MIO SKIN
                                                                </small>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-1">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1525091047831 vc_row-o-equal-height vc_row-flex">
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div id="image_5e51f3a52758a" class="li-image  center">
                                                                <img width="130" height="130"
                                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/ket-qua-mioskin.png"
                                                                     class="img-responsive"
                                                                     alt="Kết quả sau khi dùng khoáng xịt dưỡng MIO SKIN"/>
                                                            </div>
                                                            <h6 id="heading_5e51f3a527bb6"
                                                                class="li-heading  center fw-bold         vc_custom_1574003459838"
                                                                style="color: #324f5c;">
                                                                2 - 3 ngày
                                                                <small class="fw-light">Dịu vết sưng đỏ</small>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div id="image_5e51f3a527f21" class="li-image  center">
                                                                <img width="130" height="130"
                                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/ket-qua-mioskin-1.png"
                                                                     class="img-responsive"
                                                                     alt="Kết quả sau khi dùng khoáng xịt dưỡng MIO SKIN"/>
                                                            </div>
                                                            <h6 id="heading_5e51f3a528299"
                                                                class="li-heading  center fw-bold         vc_custom_1574003493592"
                                                                style="color: #324f5c;">
                                                                4 - 6 ngày
                                                                <small class="fw-light">Vết mụn xẹp, se đầu mụn</small>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div id="image_5e51f3a5285ae" class="li-image  center">
                                                                <img width="130" height="130"
                                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/ket-qua-mioskin-2.png"
                                                                     class="img-responsive"
                                                                     alt="Kết quả sau khi dùng khoáng xịt dưỡng MIO SKIN"/>
                                                            </div>
                                                            <h6 id="heading_5e51f3a528880"
                                                                class="li-heading  center fw-bold         vc_custom_1574003521623"
                                                                style="color: #324f5c;">
                                                                7 - 10 ngày
                                                                <small class="fw-light">Giảm mụn rõ rệt</small>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-3">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div id="image_5e51f3a528ba2" class="li-image  center">
                                                                <img width="130" height="130"
                                                                     src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/ket-qua-mioskin-3.png"
                                                                     class="img-responsive"
                                                                     alt="Kết quả sau khi dùng khoáng xịt dưỡng MIO SKIN"/>
                                                            </div>
                                                            <h6 id="heading_5e51f3a528e8a"
                                                                class="li-heading  center fw-bold         vc_custom_1574003541012"
                                                                style="color: #324f5c;">
                                                                20 ngày
                                                                <small class="fw-light">Da giảm nhờn, mờ thâm sẹo
                                                                </small>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="btn-wrapper center ">
                                                <button type="button" id="button_5e51f3a5296bf"
                                                        class="btn  btn-lg btn-custom2  btn-block" data-toggle="modal"
                                                        data-target="#liModal-105">Đặt mua hàng ngay hôm nay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cam-nhan-nguoi-dung"
                         class="vc_row wpb_row vc_row-fluid vc_custom_1574819069839 row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h2 id="heading_5e51f3a529eb2" class="li-heading  center fw-light"
                                                style="color: #324f5c;">
                                                Chia sẻ của người dùng sau khi dùng
                                                <small class="fw-light">xịt dưỡng tế bào gốc MIO SKIN</small>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1529071549442 row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#review_block_5e51f3a52a52e .review-block-image {
                                                    border: 1px solid #37cea8
                                                }</style>
                                            <div id="review_block_5e51f3a52a52e" class="li-review-block">
                                                <div class="review-block-image-container">
                                                    <div class="review-block-image round">
                                                        <img width="100" height="100"
                                                             src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/diep-chi.jpg"
                                                             class="img-responsive" alt="Diệp Chi"/></div>
                                                </div>
                                                <div class="review-block-review-container">
                                                    <div class="review-block-review"><p class="p1">Mình đã thử vô số
                                                            cách để trị mụn, từ tự nhiên cho đến sử dụng các loại kem
                                                            cao cấp. Nhưng tất cả chúng đều không có tác dụng. Mặc dù
                                                            qua tuổi dậy thì rồi mà ngày mặt mình càng lên nhiều mụn
                                                            hơn. Nhưng may mắn thay khi mình đọc được bài báo về xịt
                                                            dưỡng tế bào gốc MIOSKIN. Mình đã dùng ngay và thật sự ấn
                                                            tượng với kết quả của nó. Chỉ sau 10 ngày, vùng da mặt của
                                                            mình đã bớt mụn hẳng. Sau 1 tháng mụn trên mặt sạch tới 90%,
                                                            da mặt mình sáng mịn, hết cả thâm và nhờn luôn.</p></div>
                                                    <div class="review-block-author">Diệp Chi <span
                                                                class="review-block-author-source"></span></div>
                                                    <div class="review-block-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#review_block_5e51f3a52ab53 .review-block-image {
                                                    border: 1px solid #37cea8
                                                }</style>
                                            <div id="review_block_5e51f3a52ab53" class="li-review-block">
                                                <div class="review-block-image-container">
                                                    <div class="review-block-image round">
                                                        <img width="261" height="261"
                                                             src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2018/05/profile2-261x261.jpg"
                                                             class="img-responsive" alt="Phương Loan"
                                                             srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2018/05/profile2-261x261.jpg 261w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2018/05/profile2-300x300.jpg 300w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2018/05/profile2-150x150.jpg 150w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2018/05/profile2-160x160.jpg 160w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2018/05/profile2.jpg 323w"
                                                             sizes="(max-width: 261px) 100vw, 261px"/></div>
                                                </div>
                                                <div class="review-block-review-container">
                                                    <div class="review-block-review"><p class="p1">Nếu bạn cần tìm một
                                                            giải pháp cho vấn đề nhăn da, bọng mắt, tức thời thì xịt
                                                            dưỡng MIOSKIN là câu trả lời hoàn hảo. Tôi đã dành thời gian
                                                            nghiên cứu thành phần cũng như tác dụng của sản phẩm. Nó có
                                                            thể thay thế cho các phương pháp phẫu thuật thẩm mỹ mà rất
                                                            an toàn, hiệu quả. Cảm xúc khi bạn có thể tạm biệt được nếp
                                                            nhăn thật sự là rất khó tả, và một niềm vui lâng lâng khi
                                                            làn da trở về tuổi 18 căng mịn, sáng ngời. Bạn bè ai cũng
                                                            khen tôi đẹp ra cả. Nếu tôi biết sản phẩm này sớm hơn thì
                                                            thật tốt biết mấy!</p></div>
                                                    <div class="review-block-author">Phương Loan <span
                                                                class="review-block-author-source"></span></div>
                                                    <div class="review-block-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#review_block_5e51f3a52b125 .review-block-image {
                                                    border: 1px solid #37cea8
                                                }</style>
                                            <div id="review_block_5e51f3a52b125" class="li-review-block">
                                                <div class="review-block-image-container">
                                                    <div class="review-block-image round">
                                                        <img width="100" height="99"
                                                             src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/hong-loan.jpg"
                                                             class="img-responsive" alt="Hồng Loan"/></div>
                                                </div>
                                                <div class="review-block-review-container">
                                                    <div class="review-block-review"><p class="p1">Sau khi mang thai và
                                                            sinh đứa thứ 1, chỉ sau một thời gian ngắn trên mặt của tôi
                                                            bắt đầu xuất hiện rất nhiều mụn bọc, ban đầu rất ít nhưng
                                                            dần dần mụn ăn ra nhiều hơn và thâm đậm hơn nữa. Tôi tìm
                                                            hiểu rất nhiều về các cách trị mụn và được một người bạn
                                                            thân giới thiệu xịt dưỡng tế bào gốc MIOSKIN vì thành phần
                                                            an toàn cho mọi loại da. Dùng được 20 ngày, da mặt của tôi
                                                            bắt đầu bớt nhờn, mụn, thâm bắt đầu nhạt dần, da mặt sáng và
                                                            tươi hẳn lên. Thấy được hiệu quả như vậy tôi nhẹ người hẳn
                                                            đi.</p></div>
                                                    <div class="review-block-author">Hồng Loan <span
                                                                class="review-block-author-source">(lost 52 lbs)</span>
                                                    </div>
                                                    <div class="review-block-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="btn-wrapper center ">
                                                <button type="button" id="button_5e51f3a52be4e"
                                                        class="btn  btn-lg btn-custom2  btn-block" data-toggle="modal"
                                                        data-target="#liModal-105">Đặt mua hàng ngay hôm nay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cam-nhan-sao" class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h2 id="heading_5e51f3a52f50d" class="li-heading  center fw-light"
                                                style="color: #324f5c;">
                                                Người nổi tiếng nói gì
                                                <small class="fw-light">Về sản phẩm xịt tế bào gốc MIO SKIN</small>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-6 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#person_profile_5e51f3a52fcbe .profile-social-links li a {
                                                    background-color: #dde0e5
                                                }

                                                #person_profile_5e51f3a52fcbe .profile-social-links li a:hover {
                                                    background-color: #fff;
                                                    border-color: #dde0e5;
                                                    color: #dde0e5
                                                }</style>
                                            <div id="person_profile_5e51f3a52fcbe" class="li-person-profile-small">
                                                <div class="profile-image profile-image_round">
                                                    <img width="160" height="160"
                                                         src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/hariwon-11-160x160.jpg"
                                                         class="img-responsive" alt="Xịt dưỡng tế bào gốc MIO SKIN 1"
                                                         srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/hariwon-11-160x160.jpg 160w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/hariwon-11-150x150.jpg 150w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/hariwon-11-261x261.jpg 261w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/hariwon-11.jpg 300w"
                                                         sizes="(max-width: 160px) 100vw, 160px"></div>
                                                <div class="profile-content"><h3 class="profile-name">Hariwon</h3>
                                                    <div class="profile-description"><p>Tưởng như xịt khoáng bình thường
                                                            ai ngờ tốt hơn H nghĩ nha ~~~</p>
                                                        <p>Xịt dưỡng serum mới đúng với 5 chức năng trong 1 : dưỡng ẩm,
                                                            tái tạo da, chống lão hoá, bảo vệ da trước tác hại makeup và
                                                            môi trường &#8230;</p>
                                                        <p>Bạn nào bận rộn quá thì có thể thủ sẵn để khi nào cần là rửa
                                                            mặt sạch xong xịt liền ~~~ cấp ẩm và dưỡng chất ngay cho da
                                                            nè kkk</p>
                                                        <p>Sản phẩm sản xuất tại Hàn Quốc nên an tâm về chất lượng nhé
                                                            !!!</p></div>
                                                    <ul class="profile-social-links">
                                                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#person_profile_5e51f3a5305ad .profile-social-links li a {
                                                    background-color: #dde0e5
                                                }

                                                #person_profile_5e51f3a5305ad .profile-social-links li a:hover {
                                                    background-color: #fff;
                                                    border-color: #dde0e5;
                                                    color: #dde0e5
                                                }</style>
                                            <div id="person_profile_5e51f3a5305ad" class="li-person-profile-small">
                                                <div class="profile-image profile-image_round">
                                                    <img width="160" height="160"
                                                         src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tuan-tran-160x160.jpg"
                                                         class="img-responsive" alt="Tuấn Trần"
                                                         srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tuan-tran-160x160.jpg 160w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tuan-tran-150x150.jpg 150w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tuan-tran-261x261.jpg 261w"
                                                         sizes="(max-width: 160px) 100vw, 160px"/></div>
                                                <div class="profile-content"><h3 class="profile-name">Tuấn Trần</h3>
                                                    <div class="profile-description"><p class="p1">Từ những lần đầu dùng
                                                            MIO SKIN, Tuấn Trần đã yêu thích sản phẩm này. Công việc của
                                                            Tuấn thường xuyên đi quay xa nhà nên rất bất tiện khi mang
                                                            theo các sản phẩm chăm sóc da. Mặc dù tự tin da mình khỏe
                                                            nhưng mỗi lần quay phim đều trang điểm nhiều và phơi nắng
                                                            nên nếu anh chàng không chăm sóc kỹ sẽ làm tổn hại đến da.
                                                            Từ khi biết đến MIO SKIN, Tuấn Trần an tâm hẳn.</p></div>
                                                    <ul class="profile-social-links">
                                                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-6 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#person_profile_5e51f3a531239 .profile-social-links li a {
                                                    background-color: #dde0e5
                                                }

                                                #person_profile_5e51f3a531239 .profile-social-links li a:hover {
                                                    background-color: #fff;
                                                    border-color: #dde0e5;
                                                    color: #dde0e5
                                                }</style>
                                            <div id="person_profile_5e51f3a531239" class="li-person-profile-small">
                                                <div class="profile-image profile-image_round">
                                                    <img width="160" height="160"
                                                         src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tran-thanh-160x160.jpg"
                                                         class="img-responsive" alt="Trấn Thành"
                                                         srcset="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tran-thanh-160x160.jpg 160w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tran-thanh-150x150.jpg 150w, https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/tran-thanh-261x261.jpg 261w"
                                                         sizes="(max-width: 160px) 100vw, 160px"/></div>
                                                <div class="profile-content"><h3 class="profile-name">Trấn Thành</h3>
                                                    <div class="profile-description"><p>Ai cũng hỏi vc mình dưỡng da khi
                                                            bận rộn thì như thế nào?</p>
                                                        <p>Bật mí cho mọi người đây là chai xịt serum tế bào gốc thay
                                                            thế các phương pháp dưỡng da cơ bản. Xuất xứ Hàn Quốc nên
                                                            rất an tâm nè</p>
                                                        <p>Xịt mỗi ngày 2 lần cho da khoẻ mạnh, sáng đẹp nha các
                                                            bạn.</p></div>
                                                    <ul class="profile-social-links">
                                                        <li><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-fw fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="btn-wrapper center ">
                                                <button type="button" id="button_5e51f3a5320e7"
                                                        class="btn  btn-lg btn-custom2  btn-block" data-toggle="modal"
                                                        data-target="#liModal-105">Đặt mua hàng ngay hôm nay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cau-hoi" class="vc_row wpb_row vc_row-fluid vc_custom_1574819153370 row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h2 id="heading_5e51f3a532893" class="li-heading  center fw-normal"
                                                style="color: #324f5c;">
                                                Các câu hỏi về xịt khoáng MIO SKIN
                                                <small class="fw-normal">được chúng tôi tổng hợp và trả lời giúp bạn.
                                                </small>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1529071840478 row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-6 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#side_icon_text_5e51f3a53574b .li-side-icon-text-icon {
                                                    color: #fff
                                                }</style>
                                            <div id="side_icon_text_5e51f3a53574b" class="li-side-icon-text  left">
                                                <div class="li-side-icon-text-icon li-side-icon-text-icon_round "><i
                                                            class="fa fa-question"></i></div>
                                                <h3 class="li-side-icon-text-title">Xịt dưỡng tế bào gốc là gì?</h3>
                                                <div class="li-side-icon-text-content"></p><p class="p1">Xịt dưỡng tế
                                                        bào gốc MIO SKIN là một dạng xịt khoáng dưỡng da, giúp chăm sóc
                                                        da từ bên ngoài. Khác các loại xịt khoáng thông thường trên thị
                                                        trường ở thành phần tế bào gốc, giúp hồi phục từng tế bào trên
                                                        da mặt. MIO SKIN còn có khả năng dưỡng da toàn diện chỉ trong
                                                        một bước, giúp tiết kiệm nhiều thời gian.</p>
                                                    <p></div>
                                            </div>
                                            <style scoped>#side_icon_text_5e51f3a5359dc .li-side-icon-text-icon {
                                                    color: #fff
                                                }</style>
                                            <div id="side_icon_text_5e51f3a5359dc"
                                                 class="li-side-icon-text  left         vc_custom_1574780163492">
                                                <div class="li-side-icon-text-icon li-side-icon-text-icon_round "><i
                                                            class="fa fa-question"></i></div>
                                                <h3 class="li-side-icon-text-title">Xịt dưỡng tế bào gốc MIOSKIN có tác
                                                    dụng phụ không?</h3>
                                                <div class="li-side-icon-text-content"></p><p class="p1">Tính đến thời
                                                        điểm hiện tại sản phẩm vẫn chưa nhận được một phản hồi nào về
                                                        tác dụng phụ sản phẩm mang lại sau khi dùng. Hơn thế với thành
                                                        phần thiên nhiên, không chất bảo quản, chuyên dùng cho da bị
                                                        kích ứng, mẩn ngứa,.. nên đảm bảo an toàn không tác dụng
                                                        phụ.</p>
                                                    <p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#side_icon_text_5e51f3a535dd0 .li-side-icon-text-icon {
                                                    color: #fff
                                                }</style>
                                            <div id="side_icon_text_5e51f3a535dd0" class="li-side-icon-text  left">
                                                <div class="li-side-icon-text-icon li-side-icon-text-icon_round "><i
                                                            class="fa fa-question"></i></div>
                                                <h3 class="li-side-icon-text-title">Xịt dưỡng MIOSKIN có tốt không?</h3>
                                                <div class="li-side-icon-text-content"></p><p class="p1">Xịt dưỡng
                                                        MIOSKIN là thương hiệu khá nổi tiếng trên thế giới, các sản phẩm
                                                        của đơn vị đều chứa nước khoáng thiên nhiên tinh khiết, không
                                                        chất bảo quản. Đã được các chuyên gia da liễu hàng đầu trên toàn
                                                        thế giới kiểm chứng và công nhận. MIOSKIN hiện đang là thương
                                                        hiệu dược – mỹ phẩm số 1 tại Hàn Quốc về chăm sóc da.</p>
                                                    <p></div>
                                            </div>
                                            <style scoped>#side_icon_text_5e51f3a53620e .li-side-icon-text-icon {
                                                    color: #fff
                                                }</style>
                                            <div id="side_icon_text_5e51f3a53620e"
                                                 class="li-side-icon-text  left         vc_custom_1574780503084">
                                                <div class="li-side-icon-text-icon li-side-icon-text-icon_round "><i
                                                            class="fa fa-question"></i></div>
                                                <h3 class="li-side-icon-text-title">Mua xịt dưỡng MIOSKIN chính hãng ở
                                                    đâu?</h3>
                                                <div class="li-side-icon-text-content"></p><p class="p1">MIOSKIN là một
                                                        trong những thương hiệu dược – mỹ phẩm khá nổi tiếng trên thị
                                                        trường. Các sản phẩm do hãng sản xuất đều phù hợp cho mọi làn
                                                        da. Vì thế mà khi ra mắt thị trường chai xịt khoáng nhận được sự
                                                        quan tâm đặc biệt từ người tiêu dùng. Xịt khoáng MIOSKIN được
                                                        bán phổ biến tại các shop mỹ phẩm trên toàn quốc cũng như các
                                                        trang thương mại điện tử như TIKI, Shopee…</p>
                                                    <p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="lien-he" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="2"
                         data-vc-parallax-image="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2018/05/newletter_backgorund_plx_2.jpg"
                         class="vc_row wpb_row vc_row-fluid vc_custom_1574002866663 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-12 vc_col-has-fill ">
                                    <div class="vc_column-inner vc_custom_1528904778953">
                                        <div class="wpb_wrapper">
                                            <h2 id="heading_5e51f3a536c9a" class="li-heading  left fw-normal">
                                                Xịt dưỡng tế bào gốc MIOSKIN
                                                <small class="fw-normal">Khuyến mãi giá sốc dành cho các FAN</small>
                                            </h2>
                                            <div id/xit-duong-te-bao-goc/#wpcf7-f156-p7-o2="textblock_5e51f3a536ced"
                                                 class="li-textblock          vc_custom_1578541439760"><p><a
                                                            href="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/gia-mioskin.jpg"><img
                                                                class="size-full wp-image-245 aligncenter"
                                                                src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/gia-mioskin.jpg"
                                                                alt="Giá MIOSKIN bao nhiêu tiền" width="300"
                                                                height="118"/></a></p></div>
                                            <div role="form" class="wpcf7" id="wpcf7-f156-p7-o1" lang="en-US" dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                <form id="form-buy-now" method="post"
                                                      class="wpcf7-form" novalidate="novalidate">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="156"/>
                                                        <input type="hidden" name="_wpcf7_version" value="5.1.6"/>
                                                        <input type="hidden" name="_wpcf7_locale" value="en_US"/>
                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                               value="wpcf7-f156-p7-o1"/>
                                                        <input type="hidden" name="_wpcf7_container_post" value="7"/>
                                                    </div>
                                                    <div class="row cg10">
                                                        <div class="col-md-12">
                                                            <span class="wpcf7-form-control-wrap first-name"><input
                                                                        id="form-name"
                                                                        required
                                                                        type="text" name="name" value="" size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Nhập tên của bạn"/></span></div>
                                                        <div class="col-md-12">
                                                            <span class="wpcf7-form-control-wrap phone"><input
                                                                        id="form-phone"
                                                                        required
                                                                        pattern="(\+84|0){1}(9|8|7|5|3){1}[0-9]{8}"
                                                                        title="Số điện thoại không đúng"
                                                                        type="tel" name="phone" value="" size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Số điện thoại của bạn"/></span>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <span class="wpcf7-form-control-wrap phone"><input
                                                                        id="form-address"
                                                                        type="tel" name="address" value="" size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Địa chỉ của bạn"/></span>
                                                        </div>
                                                        <div class="col-md-12 text-right mt20 text-center">
                                                            <input type="submit" value="Gửi thông tin đặt hàng"
                                                                   class="wpcf7-form-control wpcf7-submit btn btn-round btn-lg btn-block btn-custom1"/><br/>
                                                            <small class="mt25">**Sản phẩm này không phải là thuốc và
                                                                không có tác dụng thay thế thuốc chữa bệnh**.
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <h3 id="heading_5e51f3a537d28" class="li-heading  center fw-bold">
                                                <small class="fw-light">Nếu như bạn có nhiều câu hỏi về sản phẩm thì có
                                                    thể điền thông tin đặt hàng, các chuyên gia của chúng MIO SKIN sẽ tư
                                                    vấn giải đáp.
                                                </small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                         class="vc_row wpb_row vc_row-fluid vc_custom_1525093940308 vc_row-has-fill">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-8 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper"><h2 id="heading_5e51f3a5382c1"
                                                                     class="li-heading  left fw-bold    content-center-xs"
                                                                     style="color: #ffffff;">
                                                Quá đơn giản để có làn da căng mịn, sáng ngời</h2></div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-4 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="btn-wrapper center ">
                                                <button type="button" id="button_5e51f3a538517"
                                                        class="btn  btn-lg btn-custom2  btn-icon-left"
                                                        data-toggle="modal" data-target="#liModal-105"><i
                                                            class="fa fa-angle-double-right"></i>Đặt hàng ngay hôm nay
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid row_default">
                        <div class="container">
                            <div class="row vc_row ">
                                <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <style scoped>#liModal-105 .modal-dialog {
                                                    margin-top: 8%
                                                }

                                                .vc_custom_1528884085227 {
                                                    margin-bottom: 0 !important;
                                                    padding-top: 25px !important;
                                                    padding-right: 40px !important;
                                                    padding-bottom: 25px !important;
                                                    padding-left: 20px !important
                                                }

                                                .vc_custom_1528884155253 {
                                                    margin-bottom: 45px !important;
                                                    padding-top: 15px !important;
                                                    padding-right: 40px !important;
                                                    padding-bottom: 15px !important;
                                                    padding-left: 40px !important;
                                                    background-color: #ff3b7c !important
                                                }

                                                .vc_custom_1493212076865 {
                                                    margin-bottom: 0 !important;
                                                    padding-right: 40px !important;
                                                    padding-left: 40px !important
                                                }

                                                .vc_custom_1493212104394 {
                                                    margin-bottom: 30px !important
                                                }

                                                .vc_custom_1493216782717 {
                                                    padding-right: 0 !important;
                                                    padding-left: 0 !important
                                                }

                                                .vc_custom_1573920303128 {
                                                    margin-top: 10px !important
                                                }</style>
                                            <script type="text/javascript">jQuery(window).load(function () {
                                                    function modalAnimationStyle(style) {
                                                        jQuery('#liModal-105 .modal-dialog').attr('class', 'modal-dialog  ' + style + '  animated');
                                                    }

                                                    jQuery("#liModal-105").on('show.bs.modal', function (e) {
                                                        jQuery("body").addClass('liModal-105-open');
                                                        modalAnimationStyle('fadeInDown');
                                                    });
                                                    jQuery("#liModal-105").on('hide.bs.modal', function (e) {
                                                        jQuery("body").removeClass('liModal-105-open');
                                                        modalAnimationStyle('fadeOutUp');
                                                    });
                                                    jQuery("#liModal-105").on('show.bs.modal', function (e) {
                                                        var that = jQuery(this);
                                                        var id = that.attr('id') + '-backdrop';
                                                        setTimeout(function () {
                                                            jQuery('.modal-backdrop').attr('id', id);
                                                        });
                                                    });
                                                });</script>
                                            <div class="modal fade li-modal " id="liModal-105"
                                                 tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <div class="modal-body">
                                                            <div data-vc-full-width="true"
                                                                 data-vc-full-width-init="false"
                                                                 data-vc-stretch-content="true"
                                                                 class="vc_row wpb_row vc_row-fluid vc_custom_1528884085227 vc_row-no-padding">
                                                                <div class="container-fluid">
                                                                    <div class="row vc_row ">
                                                                        <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                                                            <div class="vc_column-inner vc_custom_1493216782717">
                                                                                <div class="wpb_wrapper">
                                                                                    <h3 id="heading_5e51f3a53920f"
                                                                                        class="li-heading  center fw-normal   content-center-sm      vc_custom_1573920303128">
                                                                                        Đặt hàng ngay hôm nay
                                                                                        <small style="color: #555555;"
                                                                                               class="fw-normal">Bạn sẽ
                                                                                            được các chuyên gia liên hệ
                                                                                            và tư vấn về sản phẩm
                                                                                        </small>
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_row-full-width vc_clearfix"></div>
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1528884155253 vc_row-has-fill row_default">
                                                                <div class="container">
                                                                    <div class="row vc_row ">
                                                                        <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                                                            <div class="vc_column-inner ">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                            <div class="vc_column-inner">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div id="textblock_5e51f3a53a2db"
                                                                                                         class="li-textblock">
                                                                                                        <p>
                                                                                                            <span style="color: #ffffff;">Xịt dưỡng da tế bào gốc MIO SKIN luôn đảm bảo và sản xuất <strong>Bởi SOLIDUS FACTORY Co.,Ltd. Xuất xứ hàn quốc</strong>.</span>
                                                                                                        </p></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                                            <div class="vc_column-inner">
                                                                                                <div class="wpb_wrapper">
                                                                                                    <div id="textblock_5e51f3a53a668"
                                                                                                         class="li-textblock">
                                                                                                        <p style="text-align: center;">
                                                                                                            <a href="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/gia-mioskin.jpg"><img
                                                                                                                        class="wp-image-245 aligncenter"
                                                                                                                        src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2020/01/gia-mioskin.jpg"
                                                                                                                        alt="Giá MIOSKIN bao nhiêu tiền"
                                                                                                                        width="231"
                                                                                                                        height="91"/></a>
                                                                                                        </p></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1493212076865 row_default">
                                                                <div class="container">
                                                                    <div class="row vc_row ">
                                                                        <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                                                            <div class="vc_column-inner ">
                                                                                <div class="wpb_wrapper">
                                                                                    <div role="form" class="wpcf7"
                                                                                         id="wpcf7-f156-p7-o2"
                                                                                         lang="en-US" dir="ltr">
                                                                                        <div class="screen-reader-response"></div>
                                                                                        <form id="form-buy-now2"
                                                                                              method="post"
                                                                                              class="wpcf7-form"
                                                                                              novalidate="novalidate">
                                                                                            <div style="display: none;">
                                                                                                <input type="hidden"
                                                                                                       name="_wpcf7"
                                                                                                       value="156"/>
                                                                                                <input type="hidden"
                                                                                                       name="_wpcf7_version"
                                                                                                       value="5.1.6"/>
                                                                                                <input type="hidden"
                                                                                                       name="_wpcf7_locale"
                                                                                                       value="en_US"/>
                                                                                                <input type="hidden"
                                                                                                       name="_wpcf7_unit_tag"
                                                                                                       value="wpcf7-f156-p7-o2"/>
                                                                                                <input type="hidden"
                                                                                                       name="_wpcf7_container_post"
                                                                                                       value="7"/></div>
                                                                                            <div class="row cg10">
                                                                                                <div class="col-md-12">
                                                                                                    <span class="wpcf7-form-control-wrap first-name"><input
                                                                                                                type="text"
                                                                                                                name="name"
                                                                                                                id="form-name2"
                                                                                                                value=""
                                                                                                                size="40"
                                                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                aria-required="true"
                                                                                                                aria-invalid="false"
                                                                                                                placeholder="Nhập tên của bạn"/></span>
                                                                                                </div>
                                                                                                <div class="col-md-12">
                                                                                                    <span class="wpcf7-form-control-wrap phone"><input
                                                                                                                type="tel"
                                                                                                                name="phone"
                                                                                                                value=""
                                                                                                                id="form-phone2"
                                                                                                                size="40"
                                                                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                                                aria-required="true"
                                                                                                                aria-invalid="false"
                                                                                                                placeholder="Số điện thoại của bạn"/></span>
                                                                                                </div>
                                                                                                <div class="col-md-12">
                                                                                                    <span class="wpcf7-form-control-wrap phone"><input
                                                                                                                type="tel"
                                                                                                                name="address"
                                                                                                                value=""
                                                                                                                id="form-address2"
                                                                                                                size="40"
                                                                                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                                                                aria-required="true"
                                                                                                                aria-invalid="false"
                                                                                                                placeholder="Địa chỉ của bạn"/></span>
                                                                                                </div>
                                                                                                <div class="col-md-12 text-right mt20 text-center">
                                                                                                    <input type="submit"
                                                                                                           value="Gửi thông tin đặt hàng"
                                                                                                           class="wpcf7-form-control wpcf7-submit btn btn-round btn-lg btn-block btn-custom1"/><br/>
                                                                                                    <small class="mt25">
                                                                                                        **Sản phẩm này
                                                                                                        không phải là
                                                                                                        thuốc và không
                                                                                                        có tác dụng thay
                                                                                                        thế thuốc chữa
                                                                                                        bệnh**.
                                                                                                    </small>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1493212104394 row_default">
                                                                <div class="container">
                                                                    <div class="row vc_row ">
                                                                        <div class="wpb_column vc_column_container vc_col-sm-12 ">
                                                                            <div class="vc_column-inner ">
                                                                                <div class="wpb_wrapper">
                                                                                    <style scoped>#textblock_5e51f3a53b65f, #textblock_5e51f3a53b65f p {
                                                                                            font-size: 14px
                                                                                        }</style>
                                                                                    <div id="textblock_5e51f3a53b65f"
                                                                                         class="li-textblock"><p
                                                                                                style="text-align: center;">
                                                                                            * Chúng tôi cam kết luôn giữ
                                                                                            kín mọi thông tin của
                                                                                            bạn.</p></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <footer id="colophon" class="li-footer li-footer-style-1">
            <div class="footer-widget-bar footer-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-widget">
                                <div class="widget widget_text">
                                    <div class="textwidget"><h3 class="mb25"><img
                                                    class="aligncenter size-medium wp-image-187"
                                                    src="https://mioskin.com.vn/xit-duong-te-bao-goc/wp-content/uploads/2019/11/Mioskin-2-300x80.png"
                                                    alt="logo Mioskin" width="300" height="80"/></h3>
                                        <p class="mb25"><strong>Xịt dưỡng tế bào gốc MIO SKIN</strong> là giải pháp chăm
                                            sóc da ứng dụng công nghệ bào tử lợi khuẩn của Hàn Quốc. Nhờ cơ chế sử dụng
                                            lợi khuẩn B.Clausii xịt trực tiếp lên bề mặt da, MIO SKIN giúp da giảm viêm,
                                            kháng khuẩn, sạch mụn hiệu quả, đồng thời hình thành lớp màng bảo vệ và tái
                                            tạo da tự khiên, cho da sáng khỏe.</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-widget"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-widget"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright footer-row">
                <div class="container">
                    <div style="border-width: 2px; border-color: #838383;  padding-top: 20px;" class="row">
                        <div class="col-sm-4 offset-5 text-left">
                            <p> Địa chỉ: 344 Nguyễn Trọng Tuyển, phường 2, quận Tân Bình, TP.HCM</p>
                            <p>Email: mioskinsale@gmail.com</p>
                            <p>Hotline: 0988.960.084</p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="site-info">
                                Copyright &copy; 2019 MIO SKIN.
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-social-icons">
                                <a class="li-facebook"><i
                                            class="fa fa-facebook"></i></a><a
                                                                              class="li-twitter"><i
                                            class="fa fa-twitter"></i></a><a
                                         class="li-google-plus"><i
                                            class="fa fa-google-plus"></i></a><a
                                        class="li-linkedin"><i
                                            class="fa fa-linkedin"></i></a></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<a href="#li-page-top" class="scroll-to scroll-up-btn hidden-xs"><i class="fa fa-angle-double-up"></i></a>
<script type='text/javascript'>var rankMath = {"rollbackConfirm": "Are you sure you want to install version %s?"};</script>
<link data-asynced='1' as='style' onload='this.rel="stylesheet"' data-optimized='1' rel='preload'
      id='twentytwenty-css-css' href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/6ccf8.css' type='text/css'
      media='all'/>
<noscript>
    <link data-optimized='1' rel='stylesheet' id='twentytwenty-css-css'
          href='https://mioskin.com.vn/xit-duong-te-bao-goc/min/6ccf8.css' type='text/css' media='all'/>
</noscript>
<script type='text/javascript'>var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/mioskin.com.vn\/xit-duong-te-bao-goc\/index.php\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }, "cached": "1"
    };</script>
<script>var publisher_id = "113";
    var campaign_id = "24";
    var product_default = 1;
    var url = "https://pub.ens.vn/api/";
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
        vars[key] = value;
    });
    var options = {
        publisher_id: publisher_id,
        campaign_id: campaign_id,
        product_default: product_default,
        element_name: {'class_name': 'at_input_name'},
        element_phone: {'class_name': 'at_input_phone'},
        element_submit: {'class_name': 'at_input_submit'},
        utm_source: vars['utm_source'],
        utm_medium: vars['utm_medium'],
        utm_content: vars['utm_content'],
        utm_campaign: vars['utm_campaign']
    };
    AT_CPO.init(options, url);</script>
<script src="https://pub.ens.vn/tracking/v1.1/cpo.js"></script>
<script data-optimized='1' src='https://mioskin.com.vn/xit-duong-te-bao-goc/min/ca3c6.js' defer></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
    let P = {
        postAjax: function (url, data, callback) {
            $.ajax({
                url: url,
                method: 'POST',
                data: data,
                success: function (res) {
                    if (callback) {
                        callback(res);
                    }
                }
            });
        }
    }
    $(function(){
        $("#form-buy-now").submit(function (e) {
            console.log('submit')
            let name = $("#form-name").val();
            let phone = $("#form-phone").val();
            let address = $("#form-address").val();
            let description = '765K';
            let color = '';
            let _token = '{{csrf_token()}}'

            console.log(name, phone, address, color, description)
            P.postAjax('{{ route('mioskin_add_customer') }}', {_token, name, phone, address, color, description}, function (response) {
                console.log(response)
                window.location = `{{ route('frontend.mioskin.thanks') }}`
            });

            return false
        })
    })

    $(function(){
        $("#form-buy-now2").submit(function (e) {
            let name = $("#form-name2").val();
            let phone = $("#form-phone2").val();
            let address = $("#form-address2").val();
            let description = '765K';
            let color = '';
            let _token = '{{csrf_token()}}'

            console.log(name, phone, address, color, description)
            P.postAjax('{{ route('mioskin_add_customer') }}', {_token, name, phone, address, color, description}, function (response) {
                console.log(response)
                window.location = `{{ route('frontend.mioskin.thanks') }}`
            });

            return false
        })
    })

</script>


</body>
</html>
<!-- Page optimized by LiteSpeed Cache @2020-02-23 03:38:13 -->
<!-- Page generated by LiteSpeed Cache 2.9.9.2 on 2020-02-23 03:38:13 -->