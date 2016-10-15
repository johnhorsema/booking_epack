#!/usr/local/bin/php
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
 
 <meta name="ROBOTS" content="NOARCHIVE">
 
 <link rel="icon" type="image/vnd.microsoft.icon" href="https://ssl.gstatic.com/codesite/ph/images/phosting.ico">
 
 
 <script type="text/javascript">
 
 (function(){(function(){function c(a){this.t={};this.tick=function(a,b,c){b=void 0!=c?c:(new Date).getTime();this.t[a]=b;if(void 0==c)try{window.console.timeStamp("CSI/"+a)}catch(d){}};this.tick("start",null,a)}var a;window.performance&&(a=window.performance.timing);var b=a?new c(a.responseStart):new c;window.jstiming={Timer:c,load:b};a&&(b=a.navigationStart,a=a.responseStart,0<b&&a>=b&&(window.jstiming.srt=a-b));try{a=null,window.chrome&&window.chrome.csi&&(a=Math.floor(window.chrome.csi().pageT)),null==a&&
window.gtbExternal&&(a=window.gtbExternal.pageT()),null==a&&window.external&&(a=window.external.pageT),a&&(window.jstiming.pt=a)}catch(d){}})();})();

 
 
 
 
 var codesite_token = null;
 
 
 var CS_env = {"assetHostPath": "https://ssl.gstatic.com/codesite/ph", "domainName": null, "loggedInUserEmail": null, "projectName": "bidix", "relativeBaseUrl": "", "profileUrl": null, "token": null, "projectHomeUrl": "/p/bidix", "assetVersionPath": "https://ssl.gstatic.com/codesite/ph/6717364596070185760"};
 var _gaq = _gaq || [];
 _gaq.push(
 ['siteTracker._setAccount', 'UA-18071-1'],
 ['siteTracker._trackPageview']);
 
 (function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
 })();
 
 </script>
 
 
 <title>store.php - 
 bidix -
 
 
 Repository for BidiX&#39;s projects related to TiddlyWiki - Google Project Hosting
 </title>
 <link type="text/css" rel="stylesheet" href="https://ssl.gstatic.com/codesite/ph/6717364596070185760/css/core.css">
 
 <link type="text/css" rel="stylesheet" href="https://ssl.gstatic.com/codesite/ph/6717364596070185760/css/ph_detail.css" >
 
 
 <link type="text/css" rel="stylesheet" href="https://ssl.gstatic.com/codesite/ph/6717364596070185760/css/d_sb.css" >
 
 
 
<!--[if IE]>
 <link type="text/css" rel="stylesheet" href="https://ssl.gstatic.com/codesite/ph/6717364596070185760/css/d_ie.css" >
<![endif]-->
 <style type="text/css">
 .menuIcon.off { background: no-repeat url(https://ssl.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 -42px }
 .menuIcon.on { background: no-repeat url(https://ssl.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 -28px }
 .menuIcon.down { background: no-repeat url(https://ssl.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 0; }
 
 
 
  tr.inline_comment {
 background: #fff;
 vertical-align: top;
 }
 div.draft, div.published {
 padding: .3em;
 border: 1px solid #999; 
 margin-bottom: .1em;
 font-family: arial, sans-serif;
 max-width: 60em;
 }
 div.draft {
 background: #ffa;
 } 
 div.published {
 background: #e5ecf9;
 }
 div.published .body, div.draft .body {
 padding: .5em .1em .1em .1em;
 max-width: 60em;
 white-space: pre-wrap;
 white-space: -moz-pre-wrap;
 white-space: -pre-wrap;
 white-space: -o-pre-wrap;
 word-wrap: break-word;
 font-size: 1em;
 }
 div.draft .actions {
 margin-left: 1em;
 font-size: 90%;
 }
 div.draft form {
 padding: .5em .5em .5em 0;
 }
 div.draft textarea, div.published textarea {
 width: 95%;
 height: 10em;
 font-family: arial, sans-serif;
 margin-bottom: .5em;
 }

 
 .nocursor, .nocursor td, .cursor_hidden, .cursor_hidden td {
 background-color: white;
 height: 2px;
 }
 .cursor, .cursor td {
 background-color: darkblue;
 height: 2px;
 display: '';
 }
 
 
.list {
 border: 1px solid white;
 border-bottom: 0;
}

 
 </style>
</head>
<body class="t4">
<script type="text/javascript">
 window.___gcfg = {lang: 'en'};
 (function() 
 {var po = document.createElement("script");
 po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
 var s = document.getElementsByTagName("script")[0];
 s.parentNode.insertBefore(po, s);
 })();
</script>
<div class="headbg">

 <div id="gaia">
 

 <span>
 
 
 <a href="#" id="projects-dropdown" onclick="return false;"><u>My favorites</u> <small>&#9660;</small></a>
 | <a href="https://www.google.com/accounts/ServiceLogin?service=code&amp;ltmpl=phosting&amp;continue=https%3A%2F%2Fcode.google.com%2Fp%2Fbidix%2Fsource%2Fbrowse%2Ftrunk%2FTiddlyHome%2F_th%2Flib%2Fstore.php&amp;followup=https%3A%2F%2Fcode.google.com%2Fp%2Fbidix%2Fsource%2Fbrowse%2Ftrunk%2FTiddlyHome%2F_th%2Flib%2Fstore.php" onclick="_CS_click('/gb/ph/signin');"><u>Sign in</u></a>
 
 </span>

 </div>

 <div class="gbh" style="left: 0pt;"></div>
 <div class="gbh" style="right: 0pt;"></div>
 
 
 <div style="height: 1px"></div>
<!--[if lte IE 7]>
<div style="text-align:center;">
Your version of Internet Explorer is not supported. Try a browser that
contributes to open source, such as <a href="http://www.firefox.com">Firefox</a>,
<a href="http://www.google.com/chrome">Google Chrome</a>, or
<a href="http://code.google.com/chrome/chromeframe/">Google Chrome Frame</a>.
</div>
<![endif]-->



 <table style="padding:0px; margin: 0px 0px 10px 0px; width:100%" cellpadding="0" cellspacing="0"
 itemscope itemtype="http://schema.org/CreativeWork">
 <tr style="height: 58px;">
 
 
 
 <td id="plogo">
 <link itemprop="url" href="/p/bidix">
 <a href="/p/bidix/">
 
 <img src="https://ssl.gstatic.com/codesite/ph/images/defaultlogo.png" alt="Logo" itemprop="image">
 
 </a>
 </td>
 
 <td style="padding-left: 0.5em">
 
 <div id="pname">
 <a href="/p/bidix/"><span itemprop="name">bidix</span></a>
 </div>
 
 <div id="psum">
 <a id="project_summary_link"
 href="/p/bidix/"><span itemprop="description">Repository for BidiX&#39;s projects related to TiddlyWiki</span></a>
 
 </div>
 
 
 </td>
 <td style="white-space:nowrap;text-align:right; vertical-align:bottom;">
 
 <form action="/hosting/search">
 <input size="30" name="q" value="" type="text">
 
 <input type="submit" name="projectsearch" value="Search projects" >
 </form>
 
 </tr>
 </table>

</div>

 
<div id="mt" class="gtb"> 
 <a href="/p/bidix/" class="tab ">Project&nbsp;Home</a>
 
 
 
 
 <a href="/p/bidix/downloads/list" class="tab ">Downloads</a>
 
 
 
 
 
 
 
 <a href="/p/bidix/issues/list"
 class="tab ">Issues</a>
 
 
 
 
 
 <a href="/p/bidix/source/checkout"
 class="tab active">Source</a>
 
 
 
 
 
 
 
 
 <div class=gtbc></div>
</div>
<table cellspacing="0" cellpadding="0" width="100%" align="center" border="0" class="st">
 <tr>
 
 
 
 
 
 
 <td class="subt">
 <div class="st2">
 <div class="isf">
 
 


 <span class="inst1"><a href="/p/bidix/source/checkout">Checkout</a></span> &nbsp;
 <span class="inst2"><a href="/p/bidix/source/browse/">Browse</a></span> &nbsp;
 <span class="inst3"><a href="/p/bidix/source/list">Changes</a></span> &nbsp;
 
 
 
 
 
 
 
 </form>
 <script type="text/javascript">
 
 function codesearchQuery(form) {
 var query = document.getElementById('q').value;
 if (query) { form.action += '%20' + query; }
 }
 </script>
 </div>
</div>

 </td>
 
 
 
 <td align="right" valign="top" class="bevel-right"></td>
 </tr>
</table>


<script type="text/javascript">
 var cancelBubble = false;
 function _go(url) { document.location = url; }
</script>
<div id="maincol"
 
>

 




<div class="expand">
<div id="colcontrol">
<style type="text/css">
 #file_flipper { white-space: nowrap; padding-right: 2em; }
 #file_flipper.hidden { display: none; }
 #file_flipper .pagelink { color: #0000CC; text-decoration: underline; }
 #file_flipper #visiblefiles { padding-left: 0.5em; padding-right: 0.5em; }
</style>
<table id="nav_and_rev" class="list"
 cellpadding="0" cellspacing="0" width="100%">
 <tr>
 
 <td nowrap="nowrap" class="src_crumbs src_nav" width="33%">
 <strong class="src_nav">Source path:&nbsp;</strong>
 <span id="crumb_root">
 
 <a href="/p/bidix/source/browse/">svn</a>/&nbsp;</span>
 <span id="crumb_links" class="ifClosed"><a href="/p/bidix/source/browse/trunk/">trunk</a><span class="sp">/&nbsp;</span><a href="/p/bidix/source/browse/trunk/TiddlyHome/">TiddlyHome</a><span class="sp">/&nbsp;</span><a href="/p/bidix/source/browse/trunk/TiddlyHome/_th/">_th</a><span class="sp">/&nbsp;</span><a href="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/">lib</a><span class="sp">/&nbsp;</span>store.php</span>
 
 


 </td>
 
 
 <td nowrap="nowrap" width="33%" align="right">
 <table cellpadding="0" cellspacing="0" style="font-size: 100%"><tr>
 
 
 <td class="flipper"><b>r172</b></td>
 
 </tr></table>
 </td> 
 </tr>
</table>

<div class="fc">
 
 
 
<style type="text/css">
.undermouse span {
 background-image: url(https://ssl.gstatic.com/codesite/ph/images/comments.gif); }
</style>
<table class="opened" id="review_comment_area"
><tr>
<td id="nums">
<pre><table width="100%"><tr class="nocursor"><td></td></tr></table></pre>
<pre><table width="100%" id="nums_table_0"><tr id="gr_svn172_1"

><td id="1"><a href="#1">1</a></td></tr
><tr id="gr_svn172_2"

><td id="2"><a href="#2">2</a></td></tr
><tr id="gr_svn172_3"

><td id="3"><a href="#3">3</a></td></tr
><tr id="gr_svn172_4"

><td id="4"><a href="#4">4</a></td></tr
><tr id="gr_svn172_5"

><td id="5"><a href="#5">5</a></td></tr
><tr id="gr_svn172_6"

><td id="6"><a href="#6">6</a></td></tr
><tr id="gr_svn172_7"

><td id="7"><a href="#7">7</a></td></tr
><tr id="gr_svn172_8"

><td id="8"><a href="#8">8</a></td></tr
><tr id="gr_svn172_9"

><td id="9"><a href="#9">9</a></td></tr
><tr id="gr_svn172_10"

><td id="10"><a href="#10">10</a></td></tr
><tr id="gr_svn172_11"

><td id="11"><a href="#11">11</a></td></tr
><tr id="gr_svn172_12"

><td id="12"><a href="#12">12</a></td></tr
><tr id="gr_svn172_13"

><td id="13"><a href="#13">13</a></td></tr
><tr id="gr_svn172_14"

><td id="14"><a href="#14">14</a></td></tr
><tr id="gr_svn172_15"

><td id="15"><a href="#15">15</a></td></tr
><tr id="gr_svn172_16"

><td id="16"><a href="#16">16</a></td></tr
><tr id="gr_svn172_17"

><td id="17"><a href="#17">17</a></td></tr
><tr id="gr_svn172_18"

><td id="18"><a href="#18">18</a></td></tr
><tr id="gr_svn172_19"

><td id="19"><a href="#19">19</a></td></tr
><tr id="gr_svn172_20"

><td id="20"><a href="#20">20</a></td></tr
><tr id="gr_svn172_21"

><td id="21"><a href="#21">21</a></td></tr
><tr id="gr_svn172_22"

><td id="22"><a href="#22">22</a></td></tr
><tr id="gr_svn172_23"

><td id="23"><a href="#23">23</a></td></tr
><tr id="gr_svn172_24"

><td id="24"><a href="#24">24</a></td></tr
><tr id="gr_svn172_25"

><td id="25"><a href="#25">25</a></td></tr
><tr id="gr_svn172_26"

><td id="26"><a href="#26">26</a></td></tr
><tr id="gr_svn172_27"

><td id="27"><a href="#27">27</a></td></tr
><tr id="gr_svn172_28"

><td id="28"><a href="#28">28</a></td></tr
><tr id="gr_svn172_29"

><td id="29"><a href="#29">29</a></td></tr
><tr id="gr_svn172_30"

><td id="30"><a href="#30">30</a></td></tr
><tr id="gr_svn172_31"

><td id="31"><a href="#31">31</a></td></tr
><tr id="gr_svn172_32"

><td id="32"><a href="#32">32</a></td></tr
><tr id="gr_svn172_33"

><td id="33"><a href="#33">33</a></td></tr
><tr id="gr_svn172_34"

><td id="34"><a href="#34">34</a></td></tr
><tr id="gr_svn172_35"

><td id="35"><a href="#35">35</a></td></tr
><tr id="gr_svn172_36"

><td id="36"><a href="#36">36</a></td></tr
><tr id="gr_svn172_37"

><td id="37"><a href="#37">37</a></td></tr
><tr id="gr_svn172_38"

><td id="38"><a href="#38">38</a></td></tr
><tr id="gr_svn172_39"

><td id="39"><a href="#39">39</a></td></tr
><tr id="gr_svn172_40"

><td id="40"><a href="#40">40</a></td></tr
><tr id="gr_svn172_41"

><td id="41"><a href="#41">41</a></td></tr
><tr id="gr_svn172_42"

><td id="42"><a href="#42">42</a></td></tr
><tr id="gr_svn172_43"

><td id="43"><a href="#43">43</a></td></tr
><tr id="gr_svn172_44"

><td id="44"><a href="#44">44</a></td></tr
><tr id="gr_svn172_45"

><td id="45"><a href="#45">45</a></td></tr
><tr id="gr_svn172_46"

><td id="46"><a href="#46">46</a></td></tr
><tr id="gr_svn172_47"

><td id="47"><a href="#47">47</a></td></tr
><tr id="gr_svn172_48"

><td id="48"><a href="#48">48</a></td></tr
><tr id="gr_svn172_49"

><td id="49"><a href="#49">49</a></td></tr
><tr id="gr_svn172_50"

><td id="50"><a href="#50">50</a></td></tr
><tr id="gr_svn172_51"

><td id="51"><a href="#51">51</a></td></tr
><tr id="gr_svn172_52"

><td id="52"><a href="#52">52</a></td></tr
><tr id="gr_svn172_53"

><td id="53"><a href="#53">53</a></td></tr
><tr id="gr_svn172_54"

><td id="54"><a href="#54">54</a></td></tr
><tr id="gr_svn172_55"

><td id="55"><a href="#55">55</a></td></tr
><tr id="gr_svn172_56"

><td id="56"><a href="#56">56</a></td></tr
><tr id="gr_svn172_57"

><td id="57"><a href="#57">57</a></td></tr
><tr id="gr_svn172_58"

><td id="58"><a href="#58">58</a></td></tr
><tr id="gr_svn172_59"

><td id="59"><a href="#59">59</a></td></tr
><tr id="gr_svn172_60"

><td id="60"><a href="#60">60</a></td></tr
><tr id="gr_svn172_61"

><td id="61"><a href="#61">61</a></td></tr
><tr id="gr_svn172_62"

><td id="62"><a href="#62">62</a></td></tr
><tr id="gr_svn172_63"

><td id="63"><a href="#63">63</a></td></tr
><tr id="gr_svn172_64"

><td id="64"><a href="#64">64</a></td></tr
><tr id="gr_svn172_65"

><td id="65"><a href="#65">65</a></td></tr
><tr id="gr_svn172_66"

><td id="66"><a href="#66">66</a></td></tr
><tr id="gr_svn172_67"

><td id="67"><a href="#67">67</a></td></tr
><tr id="gr_svn172_68"

><td id="68"><a href="#68">68</a></td></tr
><tr id="gr_svn172_69"

><td id="69"><a href="#69">69</a></td></tr
><tr id="gr_svn172_70"

><td id="70"><a href="#70">70</a></td></tr
><tr id="gr_svn172_71"

><td id="71"><a href="#71">71</a></td></tr
><tr id="gr_svn172_72"

><td id="72"><a href="#72">72</a></td></tr
><tr id="gr_svn172_73"

><td id="73"><a href="#73">73</a></td></tr
><tr id="gr_svn172_74"

><td id="74"><a href="#74">74</a></td></tr
><tr id="gr_svn172_75"

><td id="75"><a href="#75">75</a></td></tr
><tr id="gr_svn172_76"

><td id="76"><a href="#76">76</a></td></tr
><tr id="gr_svn172_77"

><td id="77"><a href="#77">77</a></td></tr
><tr id="gr_svn172_78"

><td id="78"><a href="#78">78</a></td></tr
><tr id="gr_svn172_79"

><td id="79"><a href="#79">79</a></td></tr
><tr id="gr_svn172_80"

><td id="80"><a href="#80">80</a></td></tr
><tr id="gr_svn172_81"

><td id="81"><a href="#81">81</a></td></tr
><tr id="gr_svn172_82"

><td id="82"><a href="#82">82</a></td></tr
><tr id="gr_svn172_83"

><td id="83"><a href="#83">83</a></td></tr
><tr id="gr_svn172_84"

><td id="84"><a href="#84">84</a></td></tr
><tr id="gr_svn172_85"

><td id="85"><a href="#85">85</a></td></tr
><tr id="gr_svn172_86"

><td id="86"><a href="#86">86</a></td></tr
><tr id="gr_svn172_87"

><td id="87"><a href="#87">87</a></td></tr
><tr id="gr_svn172_88"

><td id="88"><a href="#88">88</a></td></tr
><tr id="gr_svn172_89"

><td id="89"><a href="#89">89</a></td></tr
><tr id="gr_svn172_90"

><td id="90"><a href="#90">90</a></td></tr
><tr id="gr_svn172_91"

><td id="91"><a href="#91">91</a></td></tr
><tr id="gr_svn172_92"

><td id="92"><a href="#92">92</a></td></tr
><tr id="gr_svn172_93"

><td id="93"><a href="#93">93</a></td></tr
><tr id="gr_svn172_94"

><td id="94"><a href="#94">94</a></td></tr
><tr id="gr_svn172_95"

><td id="95"><a href="#95">95</a></td></tr
><tr id="gr_svn172_96"

><td id="96"><a href="#96">96</a></td></tr
><tr id="gr_svn172_97"

><td id="97"><a href="#97">97</a></td></tr
><tr id="gr_svn172_98"

><td id="98"><a href="#98">98</a></td></tr
><tr id="gr_svn172_99"

><td id="99"><a href="#99">99</a></td></tr
><tr id="gr_svn172_100"

><td id="100"><a href="#100">100</a></td></tr
><tr id="gr_svn172_101"

><td id="101"><a href="#101">101</a></td></tr
><tr id="gr_svn172_102"

><td id="102"><a href="#102">102</a></td></tr
><tr id="gr_svn172_103"

><td id="103"><a href="#103">103</a></td></tr
><tr id="gr_svn172_104"

><td id="104"><a href="#104">104</a></td></tr
><tr id="gr_svn172_105"

><td id="105"><a href="#105">105</a></td></tr
><tr id="gr_svn172_106"

><td id="106"><a href="#106">106</a></td></tr
><tr id="gr_svn172_107"

><td id="107"><a href="#107">107</a></td></tr
><tr id="gr_svn172_108"

><td id="108"><a href="#108">108</a></td></tr
><tr id="gr_svn172_109"

><td id="109"><a href="#109">109</a></td></tr
><tr id="gr_svn172_110"

><td id="110"><a href="#110">110</a></td></tr
><tr id="gr_svn172_111"

><td id="111"><a href="#111">111</a></td></tr
><tr id="gr_svn172_112"

><td id="112"><a href="#112">112</a></td></tr
><tr id="gr_svn172_113"

><td id="113"><a href="#113">113</a></td></tr
><tr id="gr_svn172_114"

><td id="114"><a href="#114">114</a></td></tr
><tr id="gr_svn172_115"

><td id="115"><a href="#115">115</a></td></tr
><tr id="gr_svn172_116"

><td id="116"><a href="#116">116</a></td></tr
><tr id="gr_svn172_117"

><td id="117"><a href="#117">117</a></td></tr
><tr id="gr_svn172_118"

><td id="118"><a href="#118">118</a></td></tr
><tr id="gr_svn172_119"

><td id="119"><a href="#119">119</a></td></tr
><tr id="gr_svn172_120"

><td id="120"><a href="#120">120</a></td></tr
><tr id="gr_svn172_121"

><td id="121"><a href="#121">121</a></td></tr
><tr id="gr_svn172_122"

><td id="122"><a href="#122">122</a></td></tr
><tr id="gr_svn172_123"

><td id="123"><a href="#123">123</a></td></tr
><tr id="gr_svn172_124"

><td id="124"><a href="#124">124</a></td></tr
><tr id="gr_svn172_125"

><td id="125"><a href="#125">125</a></td></tr
><tr id="gr_svn172_126"

><td id="126"><a href="#126">126</a></td></tr
><tr id="gr_svn172_127"

><td id="127"><a href="#127">127</a></td></tr
><tr id="gr_svn172_128"

><td id="128"><a href="#128">128</a></td></tr
><tr id="gr_svn172_129"

><td id="129"><a href="#129">129</a></td></tr
><tr id="gr_svn172_130"

><td id="130"><a href="#130">130</a></td></tr
><tr id="gr_svn172_131"

><td id="131"><a href="#131">131</a></td></tr
><tr id="gr_svn172_132"

><td id="132"><a href="#132">132</a></td></tr
><tr id="gr_svn172_133"

><td id="133"><a href="#133">133</a></td></tr
><tr id="gr_svn172_134"

><td id="134"><a href="#134">134</a></td></tr
><tr id="gr_svn172_135"

><td id="135"><a href="#135">135</a></td></tr
><tr id="gr_svn172_136"

><td id="136"><a href="#136">136</a></td></tr
><tr id="gr_svn172_137"

><td id="137"><a href="#137">137</a></td></tr
><tr id="gr_svn172_138"

><td id="138"><a href="#138">138</a></td></tr
><tr id="gr_svn172_139"

><td id="139"><a href="#139">139</a></td></tr
><tr id="gr_svn172_140"

><td id="140"><a href="#140">140</a></td></tr
><tr id="gr_svn172_141"

><td id="141"><a href="#141">141</a></td></tr
><tr id="gr_svn172_142"

><td id="142"><a href="#142">142</a></td></tr
><tr id="gr_svn172_143"

><td id="143"><a href="#143">143</a></td></tr
><tr id="gr_svn172_144"

><td id="144"><a href="#144">144</a></td></tr
><tr id="gr_svn172_145"

><td id="145"><a href="#145">145</a></td></tr
><tr id="gr_svn172_146"

><td id="146"><a href="#146">146</a></td></tr
><tr id="gr_svn172_147"

><td id="147"><a href="#147">147</a></td></tr
><tr id="gr_svn172_148"

><td id="148"><a href="#148">148</a></td></tr
><tr id="gr_svn172_149"

><td id="149"><a href="#149">149</a></td></tr
><tr id="gr_svn172_150"

><td id="150"><a href="#150">150</a></td></tr
><tr id="gr_svn172_151"

><td id="151"><a href="#151">151</a></td></tr
><tr id="gr_svn172_152"

><td id="152"><a href="#152">152</a></td></tr
><tr id="gr_svn172_153"

><td id="153"><a href="#153">153</a></td></tr
><tr id="gr_svn172_154"

><td id="154"><a href="#154">154</a></td></tr
><tr id="gr_svn172_155"

><td id="155"><a href="#155">155</a></td></tr
><tr id="gr_svn172_156"

><td id="156"><a href="#156">156</a></td></tr
><tr id="gr_svn172_157"

><td id="157"><a href="#157">157</a></td></tr
><tr id="gr_svn172_158"

><td id="158"><a href="#158">158</a></td></tr
><tr id="gr_svn172_159"

><td id="159"><a href="#159">159</a></td></tr
><tr id="gr_svn172_160"

><td id="160"><a href="#160">160</a></td></tr
><tr id="gr_svn172_161"

><td id="161"><a href="#161">161</a></td></tr
><tr id="gr_svn172_162"

><td id="162"><a href="#162">162</a></td></tr
><tr id="gr_svn172_163"

><td id="163"><a href="#163">163</a></td></tr
><tr id="gr_svn172_164"

><td id="164"><a href="#164">164</a></td></tr
><tr id="gr_svn172_165"

><td id="165"><a href="#165">165</a></td></tr
><tr id="gr_svn172_166"

><td id="166"><a href="#166">166</a></td></tr
><tr id="gr_svn172_167"

><td id="167"><a href="#167">167</a></td></tr
><tr id="gr_svn172_168"

><td id="168"><a href="#168">168</a></td></tr
><tr id="gr_svn172_169"

><td id="169"><a href="#169">169</a></td></tr
><tr id="gr_svn172_170"

><td id="170"><a href="#170">170</a></td></tr
><tr id="gr_svn172_171"

><td id="171"><a href="#171">171</a></td></tr
><tr id="gr_svn172_172"

><td id="172"><a href="#172">172</a></td></tr
><tr id="gr_svn172_173"

><td id="173"><a href="#173">173</a></td></tr
><tr id="gr_svn172_174"

><td id="174"><a href="#174">174</a></td></tr
><tr id="gr_svn172_175"

><td id="175"><a href="#175">175</a></td></tr
><tr id="gr_svn172_176"

><td id="176"><a href="#176">176</a></td></tr
><tr id="gr_svn172_177"

><td id="177"><a href="#177">177</a></td></tr
><tr id="gr_svn172_178"

><td id="178"><a href="#178">178</a></td></tr
><tr id="gr_svn172_179"

><td id="179"><a href="#179">179</a></td></tr
><tr id="gr_svn172_180"

><td id="180"><a href="#180">180</a></td></tr
><tr id="gr_svn172_181"

><td id="181"><a href="#181">181</a></td></tr
><tr id="gr_svn172_182"

><td id="182"><a href="#182">182</a></td></tr
><tr id="gr_svn172_183"

><td id="183"><a href="#183">183</a></td></tr
><tr id="gr_svn172_184"

><td id="184"><a href="#184">184</a></td></tr
><tr id="gr_svn172_185"

><td id="185"><a href="#185">185</a></td></tr
><tr id="gr_svn172_186"

><td id="186"><a href="#186">186</a></td></tr
><tr id="gr_svn172_187"

><td id="187"><a href="#187">187</a></td></tr
><tr id="gr_svn172_188"

><td id="188"><a href="#188">188</a></td></tr
><tr id="gr_svn172_189"

><td id="189"><a href="#189">189</a></td></tr
><tr id="gr_svn172_190"

><td id="190"><a href="#190">190</a></td></tr
><tr id="gr_svn172_191"

><td id="191"><a href="#191">191</a></td></tr
><tr id="gr_svn172_192"

><td id="192"><a href="#192">192</a></td></tr
><tr id="gr_svn172_193"

><td id="193"><a href="#193">193</a></td></tr
><tr id="gr_svn172_194"

><td id="194"><a href="#194">194</a></td></tr
><tr id="gr_svn172_195"

><td id="195"><a href="#195">195</a></td></tr
><tr id="gr_svn172_196"

><td id="196"><a href="#196">196</a></td></tr
><tr id="gr_svn172_197"

><td id="197"><a href="#197">197</a></td></tr
><tr id="gr_svn172_198"

><td id="198"><a href="#198">198</a></td></tr
><tr id="gr_svn172_199"

><td id="199"><a href="#199">199</a></td></tr
><tr id="gr_svn172_200"

><td id="200"><a href="#200">200</a></td></tr
><tr id="gr_svn172_201"

><td id="201"><a href="#201">201</a></td></tr
><tr id="gr_svn172_202"

><td id="202"><a href="#202">202</a></td></tr
><tr id="gr_svn172_203"

><td id="203"><a href="#203">203</a></td></tr
><tr id="gr_svn172_204"

><td id="204"><a href="#204">204</a></td></tr
><tr id="gr_svn172_205"

><td id="205"><a href="#205">205</a></td></tr
><tr id="gr_svn172_206"

><td id="206"><a href="#206">206</a></td></tr
><tr id="gr_svn172_207"

><td id="207"><a href="#207">207</a></td></tr
><tr id="gr_svn172_208"

><td id="208"><a href="#208">208</a></td></tr
><tr id="gr_svn172_209"

><td id="209"><a href="#209">209</a></td></tr
><tr id="gr_svn172_210"

><td id="210"><a href="#210">210</a></td></tr
><tr id="gr_svn172_211"

><td id="211"><a href="#211">211</a></td></tr
><tr id="gr_svn172_212"

><td id="212"><a href="#212">212</a></td></tr
><tr id="gr_svn172_213"

><td id="213"><a href="#213">213</a></td></tr
><tr id="gr_svn172_214"

><td id="214"><a href="#214">214</a></td></tr
><tr id="gr_svn172_215"

><td id="215"><a href="#215">215</a></td></tr
><tr id="gr_svn172_216"

><td id="216"><a href="#216">216</a></td></tr
><tr id="gr_svn172_217"

><td id="217"><a href="#217">217</a></td></tr
><tr id="gr_svn172_218"

><td id="218"><a href="#218">218</a></td></tr
><tr id="gr_svn172_219"

><td id="219"><a href="#219">219</a></td></tr
><tr id="gr_svn172_220"

><td id="220"><a href="#220">220</a></td></tr
><tr id="gr_svn172_221"

><td id="221"><a href="#221">221</a></td></tr
><tr id="gr_svn172_222"

><td id="222"><a href="#222">222</a></td></tr
><tr id="gr_svn172_223"

><td id="223"><a href="#223">223</a></td></tr
><tr id="gr_svn172_224"

><td id="224"><a href="#224">224</a></td></tr
><tr id="gr_svn172_225"

><td id="225"><a href="#225">225</a></td></tr
><tr id="gr_svn172_226"

><td id="226"><a href="#226">226</a></td></tr
><tr id="gr_svn172_227"

><td id="227"><a href="#227">227</a></td></tr
><tr id="gr_svn172_228"

><td id="228"><a href="#228">228</a></td></tr
><tr id="gr_svn172_229"

><td id="229"><a href="#229">229</a></td></tr
><tr id="gr_svn172_230"

><td id="230"><a href="#230">230</a></td></tr
><tr id="gr_svn172_231"

><td id="231"><a href="#231">231</a></td></tr
><tr id="gr_svn172_232"

><td id="232"><a href="#232">232</a></td></tr
><tr id="gr_svn172_233"

><td id="233"><a href="#233">233</a></td></tr
><tr id="gr_svn172_234"

><td id="234"><a href="#234">234</a></td></tr
><tr id="gr_svn172_235"

><td id="235"><a href="#235">235</a></td></tr
><tr id="gr_svn172_236"

><td id="236"><a href="#236">236</a></td></tr
><tr id="gr_svn172_237"

><td id="237"><a href="#237">237</a></td></tr
><tr id="gr_svn172_238"

><td id="238"><a href="#238">238</a></td></tr
><tr id="gr_svn172_239"

><td id="239"><a href="#239">239</a></td></tr
><tr id="gr_svn172_240"

><td id="240"><a href="#240">240</a></td></tr
><tr id="gr_svn172_241"

><td id="241"><a href="#241">241</a></td></tr
><tr id="gr_svn172_242"

><td id="242"><a href="#242">242</a></td></tr
><tr id="gr_svn172_243"

><td id="243"><a href="#243">243</a></td></tr
><tr id="gr_svn172_244"

><td id="244"><a href="#244">244</a></td></tr
><tr id="gr_svn172_245"

><td id="245"><a href="#245">245</a></td></tr
><tr id="gr_svn172_246"

><td id="246"><a href="#246">246</a></td></tr
><tr id="gr_svn172_247"

><td id="247"><a href="#247">247</a></td></tr
><tr id="gr_svn172_248"

><td id="248"><a href="#248">248</a></td></tr
><tr id="gr_svn172_249"

><td id="249"><a href="#249">249</a></td></tr
><tr id="gr_svn172_250"

><td id="250"><a href="#250">250</a></td></tr
><tr id="gr_svn172_251"

><td id="251"><a href="#251">251</a></td></tr
><tr id="gr_svn172_252"

><td id="252"><a href="#252">252</a></td></tr
><tr id="gr_svn172_253"

><td id="253"><a href="#253">253</a></td></tr
><tr id="gr_svn172_254"

><td id="254"><a href="#254">254</a></td></tr
><tr id="gr_svn172_255"

><td id="255"><a href="#255">255</a></td></tr
><tr id="gr_svn172_256"

><td id="256"><a href="#256">256</a></td></tr
><tr id="gr_svn172_257"

><td id="257"><a href="#257">257</a></td></tr
><tr id="gr_svn172_258"

><td id="258"><a href="#258">258</a></td></tr
><tr id="gr_svn172_259"

><td id="259"><a href="#259">259</a></td></tr
><tr id="gr_svn172_260"

><td id="260"><a href="#260">260</a></td></tr
><tr id="gr_svn172_261"

><td id="261"><a href="#261">261</a></td></tr
><tr id="gr_svn172_262"

><td id="262"><a href="#262">262</a></td></tr
><tr id="gr_svn172_263"

><td id="263"><a href="#263">263</a></td></tr
><tr id="gr_svn172_264"

><td id="264"><a href="#264">264</a></td></tr
><tr id="gr_svn172_265"

><td id="265"><a href="#265">265</a></td></tr
><tr id="gr_svn172_266"

><td id="266"><a href="#266">266</a></td></tr
><tr id="gr_svn172_267"

><td id="267"><a href="#267">267</a></td></tr
><tr id="gr_svn172_268"

><td id="268"><a href="#268">268</a></td></tr
><tr id="gr_svn172_269"

><td id="269"><a href="#269">269</a></td></tr
><tr id="gr_svn172_270"

><td id="270"><a href="#270">270</a></td></tr
><tr id="gr_svn172_271"

><td id="271"><a href="#271">271</a></td></tr
><tr id="gr_svn172_272"

><td id="272"><a href="#272">272</a></td></tr
><tr id="gr_svn172_273"

><td id="273"><a href="#273">273</a></td></tr
><tr id="gr_svn172_274"

><td id="274"><a href="#274">274</a></td></tr
><tr id="gr_svn172_275"

><td id="275"><a href="#275">275</a></td></tr
><tr id="gr_svn172_276"

><td id="276"><a href="#276">276</a></td></tr
><tr id="gr_svn172_277"

><td id="277"><a href="#277">277</a></td></tr
><tr id="gr_svn172_278"

><td id="278"><a href="#278">278</a></td></tr
><tr id="gr_svn172_279"

><td id="279"><a href="#279">279</a></td></tr
><tr id="gr_svn172_280"

><td id="280"><a href="#280">280</a></td></tr
><tr id="gr_svn172_281"

><td id="281"><a href="#281">281</a></td></tr
><tr id="gr_svn172_282"

><td id="282"><a href="#282">282</a></td></tr
><tr id="gr_svn172_283"

><td id="283"><a href="#283">283</a></td></tr
><tr id="gr_svn172_284"

><td id="284"><a href="#284">284</a></td></tr
><tr id="gr_svn172_285"

><td id="285"><a href="#285">285</a></td></tr
><tr id="gr_svn172_286"

><td id="286"><a href="#286">286</a></td></tr
><tr id="gr_svn172_287"

><td id="287"><a href="#287">287</a></td></tr
><tr id="gr_svn172_288"

><td id="288"><a href="#288">288</a></td></tr
><tr id="gr_svn172_289"

><td id="289"><a href="#289">289</a></td></tr
><tr id="gr_svn172_290"

><td id="290"><a href="#290">290</a></td></tr
><tr id="gr_svn172_291"

><td id="291"><a href="#291">291</a></td></tr
><tr id="gr_svn172_292"

><td id="292"><a href="#292">292</a></td></tr
><tr id="gr_svn172_293"

><td id="293"><a href="#293">293</a></td></tr
><tr id="gr_svn172_294"

><td id="294"><a href="#294">294</a></td></tr
><tr id="gr_svn172_295"

><td id="295"><a href="#295">295</a></td></tr
><tr id="gr_svn172_296"

><td id="296"><a href="#296">296</a></td></tr
><tr id="gr_svn172_297"

><td id="297"><a href="#297">297</a></td></tr
><tr id="gr_svn172_298"

><td id="298"><a href="#298">298</a></td></tr
><tr id="gr_svn172_299"

><td id="299"><a href="#299">299</a></td></tr
><tr id="gr_svn172_300"

><td id="300"><a href="#300">300</a></td></tr
><tr id="gr_svn172_301"

><td id="301"><a href="#301">301</a></td></tr
><tr id="gr_svn172_302"

><td id="302"><a href="#302">302</a></td></tr
><tr id="gr_svn172_303"

><td id="303"><a href="#303">303</a></td></tr
><tr id="gr_svn172_304"

><td id="304"><a href="#304">304</a></td></tr
><tr id="gr_svn172_305"

><td id="305"><a href="#305">305</a></td></tr
><tr id="gr_svn172_306"

><td id="306"><a href="#306">306</a></td></tr
><tr id="gr_svn172_307"

><td id="307"><a href="#307">307</a></td></tr
><tr id="gr_svn172_308"

><td id="308"><a href="#308">308</a></td></tr
><tr id="gr_svn172_309"

><td id="309"><a href="#309">309</a></td></tr
><tr id="gr_svn172_310"

><td id="310"><a href="#310">310</a></td></tr
><tr id="gr_svn172_311"

><td id="311"><a href="#311">311</a></td></tr
><tr id="gr_svn172_312"

><td id="312"><a href="#312">312</a></td></tr
><tr id="gr_svn172_313"

><td id="313"><a href="#313">313</a></td></tr
><tr id="gr_svn172_314"

><td id="314"><a href="#314">314</a></td></tr
><tr id="gr_svn172_315"

><td id="315"><a href="#315">315</a></td></tr
><tr id="gr_svn172_316"

><td id="316"><a href="#316">316</a></td></tr
><tr id="gr_svn172_317"

><td id="317"><a href="#317">317</a></td></tr
><tr id="gr_svn172_318"

><td id="318"><a href="#318">318</a></td></tr
><tr id="gr_svn172_319"

><td id="319"><a href="#319">319</a></td></tr
><tr id="gr_svn172_320"

><td id="320"><a href="#320">320</a></td></tr
><tr id="gr_svn172_321"

><td id="321"><a href="#321">321</a></td></tr
><tr id="gr_svn172_322"

><td id="322"><a href="#322">322</a></td></tr
><tr id="gr_svn172_323"

><td id="323"><a href="#323">323</a></td></tr
><tr id="gr_svn172_324"

><td id="324"><a href="#324">324</a></td></tr
><tr id="gr_svn172_325"

><td id="325"><a href="#325">325</a></td></tr
><tr id="gr_svn172_326"

><td id="326"><a href="#326">326</a></td></tr
><tr id="gr_svn172_327"

><td id="327"><a href="#327">327</a></td></tr
><tr id="gr_svn172_328"

><td id="328"><a href="#328">328</a></td></tr
><tr id="gr_svn172_329"

><td id="329"><a href="#329">329</a></td></tr
><tr id="gr_svn172_330"

><td id="330"><a href="#330">330</a></td></tr
><tr id="gr_svn172_331"

><td id="331"><a href="#331">331</a></td></tr
><tr id="gr_svn172_332"

><td id="332"><a href="#332">332</a></td></tr
><tr id="gr_svn172_333"

><td id="333"><a href="#333">333</a></td></tr
><tr id="gr_svn172_334"

><td id="334"><a href="#334">334</a></td></tr
><tr id="gr_svn172_335"

><td id="335"><a href="#335">335</a></td></tr
><tr id="gr_svn172_336"

><td id="336"><a href="#336">336</a></td></tr
><tr id="gr_svn172_337"

><td id="337"><a href="#337">337</a></td></tr
><tr id="gr_svn172_338"

><td id="338"><a href="#338">338</a></td></tr
><tr id="gr_svn172_339"

><td id="339"><a href="#339">339</a></td></tr
><tr id="gr_svn172_340"

><td id="340"><a href="#340">340</a></td></tr
><tr id="gr_svn172_341"

><td id="341"><a href="#341">341</a></td></tr
><tr id="gr_svn172_342"

><td id="342"><a href="#342">342</a></td></tr
><tr id="gr_svn172_343"

><td id="343"><a href="#343">343</a></td></tr
><tr id="gr_svn172_344"

><td id="344"><a href="#344">344</a></td></tr
><tr id="gr_svn172_345"

><td id="345"><a href="#345">345</a></td></tr
><tr id="gr_svn172_346"

><td id="346"><a href="#346">346</a></td></tr
><tr id="gr_svn172_347"

><td id="347"><a href="#347">347</a></td></tr
><tr id="gr_svn172_348"

><td id="348"><a href="#348">348</a></td></tr
></table></pre>
<pre><table width="100%"><tr class="nocursor"><td></td></tr></table></pre>
</td>
<td id="lines">
<pre><table width="100%"><tr class="cursor_stop cursor_hidden"><td></td></tr></table></pre>
<pre class="prettyprint "><table id="src_table_0"><tr
id=sl_svn172_1

><td class="source">&lt;?php<br></td></tr
><tr
id=sl_svn172_2

><td class="source">/***<br></td></tr
><tr
id=sl_svn172_3

><td class="source">! User settings<br></td></tr
><tr
id=sl_svn172_4

><td class="source">Edit these lines according to your need<br></td></tr
><tr
id=sl_svn172_5

><td class="source">***/<br></td></tr
><tr
id=sl_svn172_6

><td class="source">//{{{<br></td></tr
><tr
id=sl_svn172_7

><td class="source">$AUTHENTICATE_USER = false;	// true | false<br></td></tr
><tr
id=sl_svn172_8

><td class="source">$USERS = array(<br></td></tr
><tr
id=sl_svn172_9

><td class="source">	&#39;jcema&#39;=&gt;&#39;jjlf7191&#39;, <br></td></tr
><tr
id=sl_svn172_10

><td class="source">	&#39;UserName2&#39;=&gt;&#39;Password2&#39;, <br></td></tr
><tr
id=sl_svn172_11

><td class="source">	&#39;UserName3&#39;=&gt;&#39;Password3&#39;); // set usernames and strong passwords<br></td></tr
><tr
id=sl_svn172_12

><td class="source">$DEBUG = false;				// true | false<br></td></tr
><tr
id=sl_svn172_13

><td class="source">$CLEAN_BACKUP = true; 		// during backuping a file, remove overmuch backups<br></td></tr
><tr
id=sl_svn172_14

><td class="source">$FOLD_JS = true; 			// if javascript files have been expanded during download the fold them<br></td></tr
><tr
id=sl_svn172_15

><td class="source">error_reporting(E_ERROR | E_WARNING | E_PARSE);<br></td></tr
><tr
id=sl_svn172_16

><td class="source">//}}}<br></td></tr
><tr
id=sl_svn172_17

><td class="source">/***<br></td></tr
><tr
id=sl_svn172_18

><td class="source">!Code<br></td></tr
><tr
id=sl_svn172_19

><td class="source">No change needed under<br></td></tr
><tr
id=sl_svn172_20

><td class="source">***/<br></td></tr
><tr
id=sl_svn172_21

><td class="source">//{{{<br></td></tr
><tr
id=sl_svn172_22

><td class="source"><br></td></tr
><tr
id=sl_svn172_23

><td class="source">/***<br></td></tr
><tr
id=sl_svn172_24

><td class="source"> * store.php - upload a file in this directory<br></td></tr
><tr
id=sl_svn172_25

><td class="source"> * version :1.6.1 - 2007/08/01 - BidiX@BidiX.info<br></td></tr
><tr
id=sl_svn172_26

><td class="source"> * <br></td></tr
><tr
id=sl_svn172_27

><td class="source"> * see : <br></td></tr
><tr
id=sl_svn172_28

><td class="source"> *	http://tiddlywiki.bidi.info/#UploadPlugin for usage<br></td></tr
><tr
id=sl_svn172_29

><td class="source"> *	http://www.php.net/manual/en/features.file-upload.php <br></td></tr
><tr
id=sl_svn172_30

><td class="source"> *		for details on uploading files<br></td></tr
><tr
id=sl_svn172_31

><td class="source"> * usage : <br></td></tr
><tr
id=sl_svn172_32

><td class="source"> *	POST  <br></td></tr
><tr
id=sl_svn172_33

><td class="source"> *		UploadPlugin[backupDir=&lt;backupdir&gt;;user=&lt;user&gt;;password=&lt;password&gt;;uploadir=&lt;uploaddir&gt;;[debug=1];;]<br></td></tr
><tr
id=sl_svn172_34

><td class="source"> *		userfile &lt;file&gt;<br></td></tr
><tr
id=sl_svn172_35

><td class="source"> *	GET<br></td></tr
><tr
id=sl_svn172_36

><td class="source"> *<br></td></tr
><tr
id=sl_svn172_37

><td class="source"> * each external javascript file included by download.php is change by a reference (src=...)<br></td></tr
><tr
id=sl_svn172_38

><td class="source"> *<br></td></tr
><tr
id=sl_svn172_39

><td class="source"> * Revision history<br></td></tr
><tr
id=sl_svn172_40

><td class="source"> * V1.6.1 - 2007/08/01<br></td></tr
><tr
id=sl_svn172_41

><td class="source"> * Enhancement: Add javascript folding<br></td></tr
><tr
id=sl_svn172_42

><td class="source"> * V1.6.0 - 2007/05/17<br></td></tr
><tr
id=sl_svn172_43

><td class="source"> * Enhancement: Add backup management<br></td></tr
><tr
id=sl_svn172_44

><td class="source"> * V1.5.2 - 2007/02/13<br></td></tr
><tr
id=sl_svn172_45

><td class="source"> * Enhancement: Add optional debug option in client parameters<br></td></tr
><tr
id=sl_svn172_46

><td class="source"> * V1.5.1 - 2007/02/01<br></td></tr
><tr
id=sl_svn172_47

><td class="source"> * Enhancement: Check value of file_uploads in php.ini. Thanks to Didier Corbière<br></td></tr
><tr
id=sl_svn172_48

><td class="source"> * V1.5.0 - 2007/01/15<br></td></tr
><tr
id=sl_svn172_49

><td class="source"> * Correct: a bug in moving uploadFile in uploadDir thanks to DaniGutiérrez for reporting<br></td></tr
><tr
id=sl_svn172_50

><td class="source"> * Refactoring<br></td></tr
><tr
id=sl_svn172_51

><td class="source"> * V 1.4.3 - 2006/10/17 <br></td></tr
><tr
id=sl_svn172_52

><td class="source"> * Test if $filename.lock exists for GroupAuthoring compatibility<br></td></tr
><tr
id=sl_svn172_53

><td class="source"> * return mtime, destfile and backupfile after the message line<br></td></tr
><tr
id=sl_svn172_54

><td class="source"> * V 1.4.2 - 2006/10/12<br></td></tr
><tr
id=sl_svn172_55

><td class="source"> *  add error_reporting(E_PARSE);<br></td></tr
><tr
id=sl_svn172_56

><td class="source"> * v 1.4.1 - 2006/03/15<br></td></tr
><tr
id=sl_svn172_57

><td class="source"> *	add chmo 0664 on the uploadedFile<br></td></tr
><tr
id=sl_svn172_58

><td class="source"> * v 1.4 - 2006/02/23<br></td></tr
><tr
id=sl_svn172_59

><td class="source"> * 	add uploaddir option :  a path for the uploaded file relative to the current directory<br></td></tr
><tr
id=sl_svn172_60

><td class="source"> *	backupdir is a relative path<br></td></tr
><tr
id=sl_svn172_61

><td class="source"> *	make recusively directories if necessary for backupDir and uploadDir<br></td></tr
><tr
id=sl_svn172_62

><td class="source"> * v 1.3 - 2006/02/17<br></td></tr
><tr
id=sl_svn172_63

><td class="source"> *	presence and value of user are checked with $USERS Array (thanks to PauloSoares)<br></td></tr
><tr
id=sl_svn172_64

><td class="source"> * v 1.2 - 2006/02/12 <br></td></tr
><tr
id=sl_svn172_65

><td class="source">  *	POST  <br></td></tr
><tr
id=sl_svn172_66

><td class="source"> *		UploadPlugin[backupDir=&lt;backupdir&gt;;user=&lt;user&gt;;password=&lt;password&gt;;]<br></td></tr
><tr
id=sl_svn172_67

><td class="source"> *		userfile &lt;file&gt;<br></td></tr
><tr
id=sl_svn172_68

><td class="source">*	if $AUTHENTICATE_USER<br></td></tr
><tr
id=sl_svn172_69

><td class="source"> *		presence and value of user and password are checked with <br></td></tr
><tr
id=sl_svn172_70

><td class="source"> *		$USER and $PASSWORD<br></td></tr
><tr
id=sl_svn172_71

><td class="source"> * v 1.1 - 2005/12/23 <br></td></tr
><tr
id=sl_svn172_72

><td class="source"> *	POST  UploadPlugin[backupDir=&lt;backupdir&gt;]  userfile &lt;file&gt;<br></td></tr
><tr
id=sl_svn172_73

><td class="source"> * v 1.0 - 2005/12/12 <br></td></tr
><tr
id=sl_svn172_74

><td class="source"> *	POST userfile &lt;file&gt;<br></td></tr
><tr
id=sl_svn172_75

><td class="source"> *<br></td></tr
><tr
id=sl_svn172_76

><td class="source"> * Copyright (c) BidiX@BidiX.info 2005-2007<br></td></tr
><tr
id=sl_svn172_77

><td class="source"> ***/<br></td></tr
><tr
id=sl_svn172_78

><td class="source">//}}}<br></td></tr
><tr
id=sl_svn172_79

><td class="source"><br></td></tr
><tr
id=sl_svn172_80

><td class="source">//{{{<br></td></tr
><tr
id=sl_svn172_81

><td class="source"><br></td></tr
><tr
id=sl_svn172_82

><td class="source">if ($_SERVER[&#39;REQUEST_METHOD&#39;] == &#39;GET&#39;) {<br></td></tr
><tr
id=sl_svn172_83

><td class="source">	/*<br></td></tr
><tr
id=sl_svn172_84

><td class="source">	 * GET Request<br></td></tr
><tr
id=sl_svn172_85

><td class="source">	 */<br></td></tr
><tr
id=sl_svn172_86

><td class="source">?&gt;<br></td></tr
><tr
id=sl_svn172_87

><td class="source">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot;&gt;<br></td></tr
><tr
id=sl_svn172_88

><td class="source">&lt;html&gt;<br></td></tr
><tr
id=sl_svn172_89

><td class="source">	&lt;head&gt;<br></td></tr
><tr
id=sl_svn172_90

><td class="source">		&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html;charset=utf-8&quot; &gt;<br></td></tr
><tr
id=sl_svn172_91

><td class="source">		&lt;title&gt;BidiX.info - TiddlyWiki UploadPlugin - Store script&lt;/title&gt;<br></td></tr
><tr
id=sl_svn172_92

><td class="source">	&lt;/head&gt;<br></td></tr
><tr
id=sl_svn172_93

><td class="source">	&lt;body&gt;<br></td></tr
><tr
id=sl_svn172_94

><td class="source">		&lt;p&gt;<br></td></tr
><tr
id=sl_svn172_95

><td class="source">		&lt;p&gt;store.php V 1.6.1<br></td></tr
><tr
id=sl_svn172_96

><td class="source">		&lt;p&gt;BidiX@BidiX.info<br></td></tr
><tr
id=sl_svn172_97

><td class="source">		&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br></td></tr
><tr
id=sl_svn172_98

><td class="source">		&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br></td></tr
><tr
id=sl_svn172_99

><td class="source">		&lt;p&gt;&amp;nbsp;&lt;/p&gt;<br></td></tr
><tr
id=sl_svn172_100

><td class="source">		&lt;p align=&quot;center&quot;&gt;This page is designed to upload a &lt;a href=&quot;http://www.tiddlywiki.com/&quot;&gt;TiddlyWiki&lt;a&gt;.&lt;/p&gt;<br></td></tr
><tr
id=sl_svn172_101

><td class="source">		&lt;p align=&quot;center&quot;&gt;for details see : &lt;a href=&quot;http://TiddlyWiki.bidix.info/#HowToUpload&quot;&gt;TiddlyWiki.bidix.info/#HowToUpload&lt;a&gt;.&lt;/p&gt;	<br></td></tr
><tr
id=sl_svn172_102

><td class="source">	&lt;/body&gt;<br></td></tr
><tr
id=sl_svn172_103

><td class="source">&lt;/html&gt;<br></td></tr
><tr
id=sl_svn172_104

><td class="source">&lt;?php<br></td></tr
><tr
id=sl_svn172_105

><td class="source">exit;<br></td></tr
><tr
id=sl_svn172_106

><td class="source">}<br></td></tr
><tr
id=sl_svn172_107

><td class="source"><br></td></tr
><tr
id=sl_svn172_108

><td class="source">/*<br></td></tr
><tr
id=sl_svn172_109

><td class="source"> * POST Request<br></td></tr
><tr
id=sl_svn172_110

><td class="source"> */<br></td></tr
><tr
id=sl_svn172_111

><td class="source">	 <br></td></tr
><tr
id=sl_svn172_112

><td class="source">// Recursive mkdir<br></td></tr
><tr
id=sl_svn172_113

><td class="source">function mkdirs($dir) {<br></td></tr
><tr
id=sl_svn172_114

><td class="source">	if( is_null($dir) || $dir === &quot;&quot; ){<br></td></tr
><tr
id=sl_svn172_115

><td class="source">		return false;<br></td></tr
><tr
id=sl_svn172_116

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_117

><td class="source">	if( is_dir($dir) || $dir === &quot;/&quot; ){<br></td></tr
><tr
id=sl_svn172_118

><td class="source">		return true;<br></td></tr
><tr
id=sl_svn172_119

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_120

><td class="source">	if( mkdirs(dirname($dir)) ){<br></td></tr
><tr
id=sl_svn172_121

><td class="source">		return mkdir($dir);<br></td></tr
><tr
id=sl_svn172_122

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_123

><td class="source">	return false;<br></td></tr
><tr
id=sl_svn172_124

><td class="source">}<br></td></tr
><tr
id=sl_svn172_125

><td class="source"><br></td></tr
><tr
id=sl_svn172_126

><td class="source">function toExit() {<br></td></tr
><tr
id=sl_svn172_127

><td class="source">	global $DEBUG, $filename, $backupFilename, $options;<br></td></tr
><tr
id=sl_svn172_128

><td class="source">	if ($DEBUG) {<br></td></tr
><tr
id=sl_svn172_129

><td class="source">		echo (&quot;\nHere is some debugging info : \n&quot;);<br></td></tr
><tr
id=sl_svn172_130

><td class="source">		echo(&quot;\$filename : $filename \n&quot;);<br></td></tr
><tr
id=sl_svn172_131

><td class="source">		echo(&quot;\$backupFilename : $backupFilename \n&quot;);<br></td></tr
><tr
id=sl_svn172_132

><td class="source">		print (&quot;\$_FILES : \n&quot;);<br></td></tr
><tr
id=sl_svn172_133

><td class="source">		print_r($_FILES);<br></td></tr
><tr
id=sl_svn172_134

><td class="source">		print (&quot;\$options : \n&quot;);<br></td></tr
><tr
id=sl_svn172_135

><td class="source">		print_r($options);<br></td></tr
><tr
id=sl_svn172_136

><td class="source">}<br></td></tr
><tr
id=sl_svn172_137

><td class="source">exit;<br></td></tr
><tr
id=sl_svn172_138

><td class="source">}<br></td></tr
><tr
id=sl_svn172_139

><td class="source"><br></td></tr
><tr
id=sl_svn172_140

><td class="source">function ParseTWFileDate($s) {<br></td></tr
><tr
id=sl_svn172_141

><td class="source">	// parse date element<br></td></tr
><tr
id=sl_svn172_142

><td class="source">	preg_match ( &#39;/^(\d\d\d\d)(\d\d)(\d\d)\.(\d\d)(\d\d)(\d\d)/&#39;, $s , $m );<br></td></tr
><tr
id=sl_svn172_143

><td class="source">	// make a date object<br></td></tr
><tr
id=sl_svn172_144

><td class="source">	$d = mktime($m[4], $m[5], $m[6], $m[2], $m[3], $m[1]);<br></td></tr
><tr
id=sl_svn172_145

><td class="source">	// get the week number<br></td></tr
><tr
id=sl_svn172_146

><td class="source">	$w = date(&quot;W&quot;,$d);<br></td></tr
><tr
id=sl_svn172_147

><td class="source"><br></td></tr
><tr
id=sl_svn172_148

><td class="source">	return array(<br></td></tr
><tr
id=sl_svn172_149

><td class="source">		&#39;year&#39; =&gt; $m[1], <br></td></tr
><tr
id=sl_svn172_150

><td class="source">		&#39;mon&#39; =&gt; $m[2], <br></td></tr
><tr
id=sl_svn172_151

><td class="source">		&#39;mday&#39; =&gt; $m[3], <br></td></tr
><tr
id=sl_svn172_152

><td class="source">		&#39;hours&#39; =&gt; $m[4], <br></td></tr
><tr
id=sl_svn172_153

><td class="source">		&#39;minutes&#39; =&gt; $m[5], <br></td></tr
><tr
id=sl_svn172_154

><td class="source">		&#39;seconds&#39; =&gt; $m[6], <br></td></tr
><tr
id=sl_svn172_155

><td class="source">		&#39;week&#39; =&gt; $w);<br></td></tr
><tr
id=sl_svn172_156

><td class="source">}<br></td></tr
><tr
id=sl_svn172_157

><td class="source"><br></td></tr
><tr
id=sl_svn172_158

><td class="source">function cleanFiles($dirname, $prefix) {<br></td></tr
><tr
id=sl_svn172_159

><td class="source">	$now = getdate();<br></td></tr
><tr
id=sl_svn172_160

><td class="source">	$now[&#39;week&#39;] = date(&quot;W&quot;);<br></td></tr
><tr
id=sl_svn172_161

><td class="source"><br></td></tr
><tr
id=sl_svn172_162

><td class="source">	$hours = Array();<br></td></tr
><tr
id=sl_svn172_163

><td class="source">	$mday = Array();<br></td></tr
><tr
id=sl_svn172_164

><td class="source">	$year = Array();<br></td></tr
><tr
id=sl_svn172_165

><td class="source">	<br></td></tr
><tr
id=sl_svn172_166

><td class="source">	$toDelete = Array();<br></td></tr
><tr
id=sl_svn172_167

><td class="source"><br></td></tr
><tr
id=sl_svn172_168

><td class="source">	// need files recent first<br></td></tr
><tr
id=sl_svn172_169

><td class="source">	$files = Array();<br></td></tr
><tr
id=sl_svn172_170

><td class="source">	($dir = opendir($dirname)) || die (&quot;can&#39;t open dir &#39;$dirname&#39;&quot;);<br></td></tr
><tr
id=sl_svn172_171

><td class="source">	while (false !== ($file = readdir($dir))) {<br></td></tr
><tr
id=sl_svn172_172

><td class="source">		if (preg_match(&quot;/^$prefix/&quot;, $file))<br></td></tr
><tr
id=sl_svn172_173

><td class="source">        array_push($files, $file);<br></td></tr
><tr
id=sl_svn172_174

><td class="source">    }<br></td></tr
><tr
id=sl_svn172_175

><td class="source">	$files = array_reverse($files);<br></td></tr
><tr
id=sl_svn172_176

><td class="source">	<br></td></tr
><tr
id=sl_svn172_177

><td class="source">	// decides for each file<br></td></tr
><tr
id=sl_svn172_178

><td class="source">	foreach ($files as $file) {<br></td></tr
><tr
id=sl_svn172_179

><td class="source">		$fileTime = ParseTWFileDate(substr($file,strpos($file, &#39;.&#39;)+1,strrpos($file,&#39;.&#39;) - strpos($file, &#39;.&#39;) -1));<br></td></tr
><tr
id=sl_svn172_180

><td class="source">		if (($now[&#39;year&#39;] == $fileTime[&#39;year&#39;]) &amp;&amp;<br></td></tr
><tr
id=sl_svn172_181

><td class="source">			($now[&#39;mon&#39;] == $fileTime[&#39;mon&#39;]) &amp;&amp;<br></td></tr
><tr
id=sl_svn172_182

><td class="source">			($now[&#39;mday&#39;] == $fileTime[&#39;mday&#39;]) &amp;&amp;<br></td></tr
><tr
id=sl_svn172_183

><td class="source">			($now[&#39;hours&#39;] == $fileTime[&#39;hours&#39;]))<br></td></tr
><tr
id=sl_svn172_184

><td class="source">				continue;<br></td></tr
><tr
id=sl_svn172_185

><td class="source">		elseif (($now[&#39;year&#39;] == $fileTime[&#39;year&#39;]) &amp;&amp;<br></td></tr
><tr
id=sl_svn172_186

><td class="source">			($now[&#39;mon&#39;] == $fileTime[&#39;mon&#39;]) &amp;&amp;<br></td></tr
><tr
id=sl_svn172_187

><td class="source">			($now[&#39;mday&#39;] == $fileTime[&#39;mday&#39;])) {<br></td></tr
><tr
id=sl_svn172_188

><td class="source">				if (isset($hours[$fileTime[&#39;hours&#39;]]))<br></td></tr
><tr
id=sl_svn172_189

><td class="source">					array_push($toDelete, $file);<br></td></tr
><tr
id=sl_svn172_190

><td class="source">				else <br></td></tr
><tr
id=sl_svn172_191

><td class="source">					$hours[$fileTime[&#39;hours&#39;]] = true;<br></td></tr
><tr
id=sl_svn172_192

><td class="source">			}<br></td></tr
><tr
id=sl_svn172_193

><td class="source">		elseif 	(($now[&#39;year&#39;] == $fileTime[&#39;year&#39;]) &amp;&amp;<br></td></tr
><tr
id=sl_svn172_194

><td class="source">			($now[&#39;mon&#39;] == $fileTime[&#39;mon&#39;])) {<br></td></tr
><tr
id=sl_svn172_195

><td class="source">				if (isset($mday[$fileTime[&#39;mday&#39;]]))<br></td></tr
><tr
id=sl_svn172_196

><td class="source">					array_push($toDelete, $file);<br></td></tr
><tr
id=sl_svn172_197

><td class="source">				else<br></td></tr
><tr
id=sl_svn172_198

><td class="source">					$mday[$fileTime[&#39;mday&#39;]] = true;<br></td></tr
><tr
id=sl_svn172_199

><td class="source">			}<br></td></tr
><tr
id=sl_svn172_200

><td class="source">		else {<br></td></tr
><tr
id=sl_svn172_201

><td class="source">			if (isset($year[$fileTime[&#39;year&#39;]][$fileTime[&#39;mon&#39;]]))<br></td></tr
><tr
id=sl_svn172_202

><td class="source">				array_push($toDelete, $file);<br></td></tr
><tr
id=sl_svn172_203

><td class="source">			else<br></td></tr
><tr
id=sl_svn172_204

><td class="source">				$year[$fileTime[&#39;year&#39;]][$fileTime[&#39;mon&#39;]] = true;<br></td></tr
><tr
id=sl_svn172_205

><td class="source">		}<br></td></tr
><tr
id=sl_svn172_206

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_207

><td class="source">	return $toDelete;<br></td></tr
><tr
id=sl_svn172_208

><td class="source">}<br></td></tr
><tr
id=sl_svn172_209

><td class="source"><br></td></tr
><tr
id=sl_svn172_210

><td class="source">function replaceJSContentIn($content) {<br></td></tr
><tr
id=sl_svn172_211

><td class="source">	if (preg_match (&quot;/(.*?)&lt;!--DOWNLOAD-INSERT-FILE:\&quot;(.*?)\&quot;--&gt;&lt;script\s+type=\&quot;text\/javascript\&quot;&gt;(.*)/ms&quot;, $content,$matches)) {<br></td></tr
><tr
id=sl_svn172_212

><td class="source">		$front = $matches[1];<br></td></tr
><tr
id=sl_svn172_213

><td class="source">		$js = $matches[2];<br></td></tr
><tr
id=sl_svn172_214

><td class="source">		$tail = $matches[3];<br></td></tr
><tr
id=sl_svn172_215

><td class="source">		if (preg_match (&quot;/&lt;\/script&gt;(.*)/ms&quot;, $tail,$matches2)) {		<br></td></tr
><tr
id=sl_svn172_216

><td class="source">			$tail = $matches2[1];<br></td></tr
><tr
id=sl_svn172_217

><td class="source">		}<br></td></tr
><tr
id=sl_svn172_218

><td class="source">		$jsContent = &quot;&lt;script type=\&quot;text/javascript\&quot; src=\&quot;$js\&quot;&gt;&lt;/script&gt;&quot;;<br></td></tr
><tr
id=sl_svn172_219

><td class="source">		$tail = replaceJSContentIn($tail);<br></td></tr
><tr
id=sl_svn172_220

><td class="source">		return($front.$jsContent.$tail);<br></td></tr
><tr
id=sl_svn172_221

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_222

><td class="source">	else<br></td></tr
><tr
id=sl_svn172_223

><td class="source">		return $content;<br></td></tr
><tr
id=sl_svn172_224

><td class="source">}<br></td></tr
><tr
id=sl_svn172_225

><td class="source"><br></td></tr
><tr
id=sl_svn172_226

><td class="source">// Check if file_uploads is active in php config<br></td></tr
><tr
id=sl_svn172_227

><td class="source">if (ini_get(&#39;file_uploads&#39;) != &#39;1&#39;) {<br></td></tr
><tr
id=sl_svn172_228

><td class="source">   echo &quot;Error : File upload is not active in php.ini\n&quot;;<br></td></tr
><tr
id=sl_svn172_229

><td class="source">   toExit();<br></td></tr
><tr
id=sl_svn172_230

><td class="source">}<br></td></tr
><tr
id=sl_svn172_231

><td class="source"><br></td></tr
><tr
id=sl_svn172_232

><td class="source">// var definitions<br></td></tr
><tr
id=sl_svn172_233

><td class="source">$uploadDir = &#39;./&#39;;<br></td></tr
><tr
id=sl_svn172_234

><td class="source">$uploadDirError = false;<br></td></tr
><tr
id=sl_svn172_235

><td class="source">$backupError = false;<br></td></tr
><tr
id=sl_svn172_236

><td class="source">$optionStr = $_POST[&#39;UploadPlugin&#39;];<br></td></tr
><tr
id=sl_svn172_237

><td class="source">$optionArr=explode(&#39;;&#39;,$optionStr);<br></td></tr
><tr
id=sl_svn172_238

><td class="source">$options = array();<br></td></tr
><tr
id=sl_svn172_239

><td class="source">$backupFilename = &#39;&#39;;<br></td></tr
><tr
id=sl_svn172_240

><td class="source">$filename = $_FILES[&#39;userfile&#39;][&#39;name&#39;];<br></td></tr
><tr
id=sl_svn172_241

><td class="source">$destfile = $filename;<br></td></tr
><tr
id=sl_svn172_242

><td class="source"><br></td></tr
><tr
id=sl_svn172_243

><td class="source">// get options<br></td></tr
><tr
id=sl_svn172_244

><td class="source">foreach($optionArr as $o) {<br></td></tr
><tr
id=sl_svn172_245

><td class="source">	list($key, $value) = split(&#39;=&#39;, $o);<br></td></tr
><tr
id=sl_svn172_246

><td class="source">	$options[$key] = $value;<br></td></tr
><tr
id=sl_svn172_247

><td class="source">}<br></td></tr
><tr
id=sl_svn172_248

><td class="source"><br></td></tr
><tr
id=sl_svn172_249

><td class="source">// debug activated by client<br></td></tr
><tr
id=sl_svn172_250

><td class="source">if ($options[&#39;debug&#39;] == 1) {<br></td></tr
><tr
id=sl_svn172_251

><td class="source">	$DEBUG = true;<br></td></tr
><tr
id=sl_svn172_252

><td class="source">}<br></td></tr
><tr
id=sl_svn172_253

><td class="source"><br></td></tr
><tr
id=sl_svn172_254

><td class="source">// authenticate User<br></td></tr
><tr
id=sl_svn172_255

><td class="source">if (($AUTHENTICATE_USER)<br></td></tr
><tr
id=sl_svn172_256

><td class="source">	&amp;&amp; ((!$options[&#39;user&#39;]) || (!$options[&#39;password&#39;]) || ($USERS[$options[&#39;user&#39;]] != $options[&#39;password&#39;]))) {<br></td></tr
><tr
id=sl_svn172_257

><td class="source">	echo &quot;Error : UserName or Password do not match \n&quot;;<br></td></tr
><tr
id=sl_svn172_258

><td class="source">	echo &quot;UserName : [&quot;.$options[&#39;user&#39;]. &quot;] Password : [&quot;. $options[&#39;password&#39;] . &quot;]\n&quot;;<br></td></tr
><tr
id=sl_svn172_259

><td class="source">	toExit();<br></td></tr
><tr
id=sl_svn172_260

><td class="source">}<br></td></tr
><tr
id=sl_svn172_261

><td class="source"><br></td></tr
><tr
id=sl_svn172_262

><td class="source"><br></td></tr
><tr
id=sl_svn172_263

><td class="source"><br></td></tr
><tr
id=sl_svn172_264

><td class="source">// make uploadDir<br></td></tr
><tr
id=sl_svn172_265

><td class="source">if ($options[&#39;uploaddir&#39;]) {<br></td></tr
><tr
id=sl_svn172_266

><td class="source">	$uploadDir = $options[&#39;uploaddir&#39;];<br></td></tr
><tr
id=sl_svn172_267

><td class="source">	// path control for uploadDir   <br></td></tr
><tr
id=sl_svn172_268

><td class="source">    if (!(strpos($uploadDir, &quot;../&quot;) === false)) {<br></td></tr
><tr
id=sl_svn172_269

><td class="source">        echo &quot;Error: directory to upload specifies a parent folder&quot;;<br></td></tr
><tr
id=sl_svn172_270

><td class="source">        toExit();<br></td></tr
><tr
id=sl_svn172_271

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_272

><td class="source">	if (! is_dir($uploadDir)) {<br></td></tr
><tr
id=sl_svn172_273

><td class="source">		mkdirs($uploadDir);<br></td></tr
><tr
id=sl_svn172_274

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_275

><td class="source">	if (! is_dir($uploadDir)) {<br></td></tr
><tr
id=sl_svn172_276

><td class="source">		echo &quot;UploadDirError : $uploadDirError - File NOT uploaded !\n&quot;;<br></td></tr
><tr
id=sl_svn172_277

><td class="source">		toExit();<br></td></tr
><tr
id=sl_svn172_278

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_279

><td class="source">	if ($uploadDir{strlen($uploadDir)-1} != &#39;/&#39;) {<br></td></tr
><tr
id=sl_svn172_280

><td class="source">		$uploadDir = $uploadDir . &#39;/&#39;;<br></td></tr
><tr
id=sl_svn172_281

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_282

><td class="source">}<br></td></tr
><tr
id=sl_svn172_283

><td class="source">$destfile = $uploadDir . $filename;<br></td></tr
><tr
id=sl_svn172_284

><td class="source"><br></td></tr
><tr
id=sl_svn172_285

><td class="source">// backup existing file<br></td></tr
><tr
id=sl_svn172_286

><td class="source">if (file_exists($destfile) &amp;&amp; ($options[&#39;backupDir&#39;])) {<br></td></tr
><tr
id=sl_svn172_287

><td class="source">	if (! is_dir($options[&#39;backupDir&#39;])) {<br></td></tr
><tr
id=sl_svn172_288

><td class="source">		mkdirs($options[&#39;backupDir&#39;]);<br></td></tr
><tr
id=sl_svn172_289

><td class="source">		if (! is_dir($options[&#39;backupDir&#39;])) {<br></td></tr
><tr
id=sl_svn172_290

><td class="source">			$backupError = &quot;backup mkdir error&quot;;<br></td></tr
><tr
id=sl_svn172_291

><td class="source">		}<br></td></tr
><tr
id=sl_svn172_292

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_293

><td class="source">	$backupFilename = $options[&#39;backupDir&#39;].&#39;/&#39;.substr($filename, 0, strrpos($filename, &#39;.&#39;))<br></td></tr
><tr
id=sl_svn172_294

><td class="source">				.date(&#39;.Ymd.His&#39;).substr($filename,strrpos($filename,&#39;.&#39;));<br></td></tr
><tr
id=sl_svn172_295

><td class="source">	rename($destfile, $backupFilename) or ($backupError = &quot;rename error&quot;);<br></td></tr
><tr
id=sl_svn172_296

><td class="source">	// remove overmuch backup<br></td></tr
><tr
id=sl_svn172_297

><td class="source">	if ($CLEAN_BACKUP) {<br></td></tr
><tr
id=sl_svn172_298

><td class="source">		$toDelete = cleanFiles($options[&#39;backupDir&#39;], substr($filename, 0, strrpos($filename, &#39;.&#39;)));<br></td></tr
><tr
id=sl_svn172_299

><td class="source">		foreach ($toDelete as $file) {<br></td></tr
><tr
id=sl_svn172_300

><td class="source">			$f = $options[&#39;backupDir&#39;].&#39;/&#39;.$file;<br></td></tr
><tr
id=sl_svn172_301

><td class="source">			if($DEBUG) {<br></td></tr
><tr
id=sl_svn172_302

><td class="source">				echo &quot;delete : &quot;.$options[&#39;backupDir&#39;].&#39;/&#39;.$file.&quot;\n&quot;;<br></td></tr
><tr
id=sl_svn172_303

><td class="source">			}<br></td></tr
><tr
id=sl_svn172_304

><td class="source">			unlink($options[&#39;backupDir&#39;].&#39;/&#39;.$file);<br></td></tr
><tr
id=sl_svn172_305

><td class="source">		}<br></td></tr
><tr
id=sl_svn172_306

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_307

><td class="source">}<br></td></tr
><tr
id=sl_svn172_308

><td class="source"><br></td></tr
><tr
id=sl_svn172_309

><td class="source">// move uploaded file to uploadDir<br></td></tr
><tr
id=sl_svn172_310

><td class="source">if (move_uploaded_file($_FILES[&#39;userfile&#39;][&#39;tmp_name&#39;], $destfile)) {<br></td></tr
><tr
id=sl_svn172_311

><td class="source">	if ($FOLD_JS) {<br></td></tr
><tr
id=sl_svn172_312

><td class="source">		// rewrite the file to replace JS content<br></td></tr
><tr
id=sl_svn172_313

><td class="source">		$fileContent = file_get_contents ($destfile);<br></td></tr
><tr
id=sl_svn172_314

><td class="source">		$fileContent = replaceJSContentIn($fileContent);<br></td></tr
><tr
id=sl_svn172_315

><td class="source">		if (!$handle = fopen($destfile, &#39;w&#39;)) {<br></td></tr
><tr
id=sl_svn172_316

><td class="source">	         echo &quot;Cannot open file ($destfile)&quot;;<br></td></tr
><tr
id=sl_svn172_317

><td class="source">	         exit;<br></td></tr
><tr
id=sl_svn172_318

><td class="source">	    }<br></td></tr
><tr
id=sl_svn172_319

><td class="source">	    if (fwrite($handle, $fileContent) === FALSE) {<br></td></tr
><tr
id=sl_svn172_320

><td class="source">	        echo &quot;Cannot write to file ($destfile)&quot;;<br></td></tr
><tr
id=sl_svn172_321

><td class="source">	        exit;<br></td></tr
><tr
id=sl_svn172_322

><td class="source">	    }<br></td></tr
><tr
id=sl_svn172_323

><td class="source">	    fclose($handle);<br></td></tr
><tr
id=sl_svn172_324

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_325

><td class="source">    <br></td></tr
><tr
id=sl_svn172_326

><td class="source">	chmod($destfile, 0644);<br></td></tr
><tr
id=sl_svn172_327

><td class="source">	if($DEBUG) {<br></td></tr
><tr
id=sl_svn172_328

><td class="source">		echo &quot;Debug mode \n\n&quot;;<br></td></tr
><tr
id=sl_svn172_329

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_330

><td class="source">	if (!$backupError) {<br></td></tr
><tr
id=sl_svn172_331

><td class="source">		echo &quot;0 - File successfully loaded in &quot; .$destfile. &quot;\n&quot;;<br></td></tr
><tr
id=sl_svn172_332

><td class="source">	} else {<br></td></tr
><tr
id=sl_svn172_333

><td class="source">		echo &quot;BackupError : $backupError - File successfully loaded in &quot; .$destfile. &quot;\n&quot;;<br></td></tr
><tr
id=sl_svn172_334

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_335

><td class="source">	echo(&quot;destfile:$destfile \n&quot;);<br></td></tr
><tr
id=sl_svn172_336

><td class="source">	if (($backupFilename) &amp;&amp; (!$backupError)) {<br></td></tr
><tr
id=sl_svn172_337

><td class="source">		echo &quot;backupfile:$backupFilename\n&quot;;<br></td></tr
><tr
id=sl_svn172_338

><td class="source">	}<br></td></tr
><tr
id=sl_svn172_339

><td class="source">	$mtime = filemtime($destfile);<br></td></tr
><tr
id=sl_svn172_340

><td class="source">	echo(&quot;mtime:$mtime&quot;);<br></td></tr
><tr
id=sl_svn172_341

><td class="source">} <br></td></tr
><tr
id=sl_svn172_342

><td class="source">else {<br></td></tr
><tr
id=sl_svn172_343

><td class="source">	echo &quot;Error : &quot; . $_FILES[&#39;error&#39;].&quot; - File NOT uploaded !\n&quot;;<br></td></tr
><tr
id=sl_svn172_344

><td class="source"><br></td></tr
><tr
id=sl_svn172_345

><td class="source">}<br></td></tr
><tr
id=sl_svn172_346

><td class="source">toExit();<br></td></tr
><tr
id=sl_svn172_347

><td class="source">//}}}<br></td></tr
><tr
id=sl_svn172_348

><td class="source">?&gt;<br></td></tr
></table></pre>
<pre><table width="100%"><tr class="cursor_stop cursor_hidden"><td></td></tr></table></pre>
</td>
</tr></table>

 
<script type="text/javascript">
 var lineNumUnderMouse = -1;
 
 function gutterOver(num) {
 gutterOut();
 var newTR = document.getElementById('gr_svn172_' + num);
 if (newTR) {
 newTR.className = 'undermouse';
 }
 lineNumUnderMouse = num;
 }
 function gutterOut() {
 if (lineNumUnderMouse != -1) {
 var oldTR = document.getElementById(
 'gr_svn172_' + lineNumUnderMouse);
 if (oldTR) {
 oldTR.className = '';
 }
 lineNumUnderMouse = -1;
 }
 }
 var numsGenState = {table_base_id: 'nums_table_'};
 var srcGenState = {table_base_id: 'src_table_'};
 var alignerRunning = false;
 var startOver = false;
 function setLineNumberHeights() {
 if (alignerRunning) {
 startOver = true;
 return;
 }
 numsGenState.chunk_id = 0;
 numsGenState.table = document.getElementById('nums_table_0');
 numsGenState.row_num = 0;
 if (!numsGenState.table) {
 return; // Silently exit if no file is present.
 }
 srcGenState.chunk_id = 0;
 srcGenState.table = document.getElementById('src_table_0');
 srcGenState.row_num = 0;
 alignerRunning = true;
 continueToSetLineNumberHeights();
 }
 function rowGenerator(genState) {
 if (genState.row_num < genState.table.rows.length) {
 var currentRow = genState.table.rows[genState.row_num];
 genState.row_num++;
 return currentRow;
 }
 var newTable = document.getElementById(
 genState.table_base_id + (genState.chunk_id + 1));
 if (newTable) {
 genState.chunk_id++;
 genState.row_num = 0;
 genState.table = newTable;
 return genState.table.rows[0];
 }
 return null;
 }
 var MAX_ROWS_PER_PASS = 1000;
 function continueToSetLineNumberHeights() {
 var rowsInThisPass = 0;
 var numRow = 1;
 var srcRow = 1;
 while (numRow && srcRow && rowsInThisPass < MAX_ROWS_PER_PASS) {
 numRow = rowGenerator(numsGenState);
 srcRow = rowGenerator(srcGenState);
 rowsInThisPass++;
 if (numRow && srcRow) {
 if (numRow.offsetHeight != srcRow.offsetHeight) {
 numRow.firstChild.style.height = srcRow.offsetHeight + 'px';
 }
 }
 }
 if (rowsInThisPass >= MAX_ROWS_PER_PASS) {
 setTimeout(continueToSetLineNumberHeights, 10);
 } else {
 alignerRunning = false;
 if (startOver) {
 startOver = false;
 setTimeout(setLineNumberHeights, 500);
 }
 }
 }
 function initLineNumberHeights() {
 // Do 2 complete passes, because there can be races
 // between this code and prettify.
 startOver = true;
 setTimeout(setLineNumberHeights, 250);
 window.onresize = setLineNumberHeights;
 }
 initLineNumberHeights();
</script>

 
 
 <div id="log">
 <div style="text-align:right">
 <a class="ifCollapse" href="#" onclick="_toggleMeta(this); return false">Show details</a>
 <a class="ifExpand" href="#" onclick="_toggleMeta(this); return false">Hide details</a>
 </div>
 <div class="ifExpand">
 
 
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="changelog">
 <p>Change log</p>
 <div>
 <a href="/p/bidix/source/detail?spec=svn172&amp;r=141">r141</a>
 by Bi...@bidix.info
 on Aug 31, 2008
 &nbsp; <a href="/p/bidix/source/diff?spec=svn172&r=141&amp;format=side&amp;path=/trunk/TiddlyHome/_th/lib/store.php&amp;old_path=/trunk/TiddlyHome/_th/lib/store.php&amp;old=">Diff</a>
 </div>
 <pre>Initial submission from already published
TiddlyHome_0.1.2.zip</pre>
 </div>
 
 
 
 
 
 
 <script type="text/javascript">
 var detail_url = '/p/bidix/source/detail?r=141&spec=svn172';
 var publish_url = '/p/bidix/source/detail?r=141&spec=svn172#publish';
 // describe the paths of this revision in javascript.
 var changed_paths = [];
 var changed_urls = [];
 
 changed_paths.push('/trunk/TiddlyHome/_th');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/download.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/download.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/index.html');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/index.html?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/init.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/init.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/logout.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/logout.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/news.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/news.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/proxy.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/proxy.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/sites.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/sites.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/store.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/store.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/admin/users.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/users.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/images');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/images?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.128.jpg');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.128.jpg?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.256.jpg');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.256.jpg?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.32.jpg');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.32.jpg?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.64.jpg');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.64.jpg?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.jpg');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.jpg?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/images/favicon.ico');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/images/favicon.ico?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/images/feedicon.14.png');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/images/feedicon.14.png?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/Htaccess.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/Htaccess.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/Htgroup.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/Htgroup.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/Htpasswd.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/Htpasswd.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/SiteClass.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/SiteClass.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/download.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/download.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/logout.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/logout.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/news.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/news.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/pageFooter.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/pageFooter.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/pageHeader.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/pageHeader.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/proxy.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/proxy.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/site.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/site.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/siteForm.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/siteForm.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/store.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/store.php?r\x3d141\x26spec\x3dsvn172');
 
 var selected_path = '/trunk/TiddlyHome/_th/lib/store.php';
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/twcore.2.2.6.js');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/twcore.2.2.6.js?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/twcore.js');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/twcore.js?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/user.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/user.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/lib/userForm.php');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/userForm.php?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/plugins');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/plugins?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/plugins/TiddlyHomeSetupPlugin.js');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/plugins/TiddlyHomeSetupPlugin.js?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/templates');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/templates?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/templates/NewsWiki.html');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/NewsWiki.html?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/templates/NewsWikiFR.html');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/NewsWikiFR.html?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/templates/empty.html');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/empty.html?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/templates/htaccessPrivate');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/htaccessPrivate?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/templates/htaccessPublic');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/htaccessPublic?r\x3d141\x26spec\x3dsvn172');
 
 
 changed_paths.push('/trunk/TiddlyHome/_th/templates/ressources.html');
 changed_urls.push('/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/ressources.html?r\x3d141\x26spec\x3dsvn172');
 
 
 function getCurrentPageIndex() {
 for (var i = 0; i < changed_paths.length; i++) {
 if (selected_path == changed_paths[i]) {
 return i;
 }
 }
 }
 function getNextPage() {
 var i = getCurrentPageIndex();
 if (i < changed_paths.length - 1) {
 return changed_urls[i + 1];
 }
 return null;
 }
 function getPreviousPage() {
 var i = getCurrentPageIndex();
 if (i > 0) {
 return changed_urls[i - 1];
 }
 return null;
 }
 function gotoNextPage() {
 var page = getNextPage();
 if (!page) {
 page = detail_url;
 }
 window.location = page;
 }
 function gotoPreviousPage() {
 var page = getPreviousPage();
 if (!page) {
 page = detail_url;
 }
 window.location = page;
 }
 function gotoDetailPage() {
 window.location = detail_url;
 }
 function gotoPublishPage() {
 window.location = publish_url;
 }
</script>

 
 <style type="text/css">
 #review_nav {
 border-top: 3px solid white;
 padding-top: 6px;
 margin-top: 1em;
 }
 #review_nav td {
 vertical-align: middle;
 }
 #review_nav select {
 margin: .5em 0;
 }
 </style>
 <div id="review_nav">
 <table><tr><td>Go to:&nbsp;</td><td>
 <select name="files_in_rev" onchange="window.location=this.value">
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/admin</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/download.php?r=141&amp;spec=svn172"
 
 >...iddlyHome/_th/admin/download.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/index.html?r=141&amp;spec=svn172"
 
 >.../TiddlyHome/_th/admin/index.html</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/init.php?r=141&amp;spec=svn172"
 
 >...nk/TiddlyHome/_th/admin/init.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/logout.php?r=141&amp;spec=svn172"
 
 >.../TiddlyHome/_th/admin/logout.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/news.php?r=141&amp;spec=svn172"
 
 >...nk/TiddlyHome/_th/admin/news.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/proxy.php?r=141&amp;spec=svn172"
 
 >...k/TiddlyHome/_th/admin/proxy.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/sites.php?r=141&amp;spec=svn172"
 
 >...k/TiddlyHome/_th/admin/sites.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/store.php?r=141&amp;spec=svn172"
 
 >...k/TiddlyHome/_th/admin/store.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/admin/users.php?r=141&amp;spec=svn172"
 
 >...k/TiddlyHome/_th/admin/users.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/images?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/images</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.128.jpg?r=141&amp;spec=svn172"
 
 >...th/images/TiddlyHomeLogo.128.jpg</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.256.jpg?r=141&amp;spec=svn172"
 
 >...th/images/TiddlyHomeLogo.256.jpg</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.32.jpg?r=141&amp;spec=svn172"
 
 >..._th/images/TiddlyHomeLogo.32.jpg</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.64.jpg?r=141&amp;spec=svn172"
 
 >..._th/images/TiddlyHomeLogo.64.jpg</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/images/TiddlyHomeLogo.jpg?r=141&amp;spec=svn172"
 
 >...me/_th/images/TiddlyHomeLogo.jpg</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/images/favicon.ico?r=141&amp;spec=svn172"
 
 >...iddlyHome/_th/images/favicon.ico</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/images/feedicon.14.png?r=141&amp;spec=svn172"
 
 >...yHome/_th/images/feedicon.14.png</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/lib</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/Htaccess.php?r=141&amp;spec=svn172"
 
 >.../TiddlyHome/_th/lib/Htaccess.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/Htgroup.php?r=141&amp;spec=svn172"
 
 >...k/TiddlyHome/_th/lib/Htgroup.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/Htpasswd.php?r=141&amp;spec=svn172"
 
 >.../TiddlyHome/_th/lib/Htpasswd.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/SiteClass.php?r=141&amp;spec=svn172"
 
 >...TiddlyHome/_th/lib/SiteClass.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/download.php?r=141&amp;spec=svn172"
 
 >.../TiddlyHome/_th/lib/download.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/logout.php?r=141&amp;spec=svn172"
 
 >...nk/TiddlyHome/_th/lib/logout.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/news.php?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/lib/news.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/pageFooter.php?r=141&amp;spec=svn172"
 
 >...iddlyHome/_th/lib/pageFooter.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/pageHeader.php?r=141&amp;spec=svn172"
 
 >...iddlyHome/_th/lib/pageHeader.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/proxy.php?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/lib/proxy.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/site.php?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/lib/site.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/siteForm.php?r=141&amp;spec=svn172"
 
 >.../TiddlyHome/_th/lib/siteForm.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/store.php?r=141&amp;spec=svn172"
 selected="selected"
 >/trunk/TiddlyHome/_th/lib/store.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/twcore.2.2.6.js?r=141&amp;spec=svn172"
 
 >...ddlyHome/_th/lib/twcore.2.2.6.js</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/twcore.js?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/lib/twcore.js</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/user.php?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/lib/user.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/lib/userForm.php?r=141&amp;spec=svn172"
 
 >.../TiddlyHome/_th/lib/userForm.php</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/plugins?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/plugins</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/plugins/TiddlyHomeSetupPlugin.js?r=141&amp;spec=svn172"
 
 >...plugins/TiddlyHomeSetupPlugin.js</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/templates?r=141&amp;spec=svn172"
 
 >/trunk/TiddlyHome/_th/templates</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/NewsWiki.html?r=141&amp;spec=svn172"
 
 >...Home/_th/templates/NewsWiki.html</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/NewsWikiFR.html?r=141&amp;spec=svn172"
 
 >...me/_th/templates/NewsWikiFR.html</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/empty.html?r=141&amp;spec=svn172"
 
 >...dlyHome/_th/templates/empty.html</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/htaccessPrivate?r=141&amp;spec=svn172"
 
 >...me/_th/templates/htaccessPrivate</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/htaccessPublic?r=141&amp;spec=svn172"
 
 >...ome/_th/templates/htaccessPublic</option>
 
 <option value="/p/bidix/source/browse/trunk/TiddlyHome/_th/templates/ressources.html?r=141&amp;spec=svn172"
 
 >...me/_th/templates/ressources.html</option>
 
 </select>
 </td></tr></table>
 
 
 



 <div style="white-space:nowrap">
 Project members,
 <a href="https://www.google.com/accounts/ServiceLogin?service=code&amp;ltmpl=phosting&amp;continue=https%3A%2F%2Fcode.google.com%2Fp%2Fbidix%2Fsource%2Fbrowse%2Ftrunk%2FTiddlyHome%2F_th%2Flib%2Fstore.php&amp;followup=https%3A%2F%2Fcode.google.com%2Fp%2Fbidix%2Fsource%2Fbrowse%2Ftrunk%2FTiddlyHome%2F_th%2Flib%2Fstore.php"
 >sign in</a> to write a code review</div>


 
 </div>
 
 
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="older_bubble">
 <p>Older revisions</p>
 
 <a href="/p/bidix/source/list?path=/trunk/TiddlyHome/_th/lib/store.php&start=141">All revisions of this file</a>
 </div>
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="fileinfo_bubble">
 <p>File info</p>
 
 <div>Size: 9564 bytes,
 348 lines</div>
 
 <div><a href="//bidix.googlecode.com/svn/trunk/TiddlyHome/_th/lib/store.php">View raw file</a></div>
 </div>
 
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 </div>
 </div>


</div>

</div>
</div>

<script src="https://ssl.gstatic.com/codesite/ph/6717364596070185760/js/prettify/prettify.js"></script>
<script type="text/javascript">prettyPrint();</script>


<script src="https://ssl.gstatic.com/codesite/ph/6717364596070185760/js/source_file_scripts.js"></script>

 <script type="text/javascript" src="https://ssl.gstatic.com/codesite/ph/6717364596070185760/js/kibbles.js"></script>
 <script type="text/javascript">
 var lastStop = null;
 var initialized = false;
 
 function updateCursor(next, prev) {
 if (prev && prev.element) {
 prev.element.className = 'cursor_stop cursor_hidden';
 }
 if (next && next.element) {
 next.element.className = 'cursor_stop cursor';
 lastStop = next.index;
 }
 }
 
 function pubRevealed(data) {
 updateCursorForCell(data.cellId, 'cursor_stop cursor_hidden');
 if (initialized) {
 reloadCursors();
 }
 }
 
 function draftRevealed(data) {
 updateCursorForCell(data.cellId, 'cursor_stop cursor_hidden');
 if (initialized) {
 reloadCursors();
 }
 }
 
 function draftDestroyed(data) {
 updateCursorForCell(data.cellId, 'nocursor');
 if (initialized) {
 reloadCursors();
 }
 }
 function reloadCursors() {
 kibbles.skipper.reset();
 loadCursors();
 if (lastStop != null) {
 kibbles.skipper.setCurrentStop(lastStop);
 }
 }
 // possibly the simplest way to insert any newly added comments
 // is to update the class of the corresponding cursor row,
 // then refresh the entire list of rows.
 function updateCursorForCell(cellId, className) {
 var cell = document.getElementById(cellId);
 // we have to go two rows back to find the cursor location
 var row = getPreviousElement(cell.parentNode);
 row.className = className;
 }
 // returns the previous element, ignores text nodes.
 function getPreviousElement(e) {
 var element = e.previousSibling;
 if (element.nodeType == 3) {
 element = element.previousSibling;
 }
 if (element && element.tagName) {
 return element;
 }
 }
 function loadCursors() {
 // register our elements with skipper
 var elements = CR_getElements('*', 'cursor_stop');
 var len = elements.length;
 for (var i = 0; i < len; i++) {
 var element = elements[i]; 
 element.className = 'cursor_stop cursor_hidden';
 kibbles.skipper.append(element);
 }
 }
 function toggleComments() {
 CR_toggleCommentDisplay();
 reloadCursors();
 }
 function keysOnLoadHandler() {
 // setup skipper
 kibbles.skipper.addStopListener(
 kibbles.skipper.LISTENER_TYPE.PRE, updateCursor);
 // Set the 'offset' option to return the middle of the client area
 // an option can be a static value, or a callback
 kibbles.skipper.setOption('padding_top', 50);
 // Set the 'offset' option to return the middle of the client area
 // an option can be a static value, or a callback
 kibbles.skipper.setOption('padding_bottom', 100);
 // Register our keys
 kibbles.skipper.addFwdKey("n");
 kibbles.skipper.addRevKey("p");
 kibbles.keys.addKeyPressListener(
 'u', function() { window.location = detail_url; });
 kibbles.keys.addKeyPressListener(
 'r', function() { window.location = detail_url + '#publish'; });
 
 kibbles.keys.addKeyPressListener('j', gotoNextPage);
 kibbles.keys.addKeyPressListener('k', gotoPreviousPage);
 
 
 }
 </script>
<script src="https://ssl.gstatic.com/codesite/ph/6717364596070185760/js/code_review_scripts.js"></script>
<script type="text/javascript">
 function showPublishInstructions() {
 var element = document.getElementById('review_instr');
 if (element) {
 element.className = 'opened';
 }
 }
 var codereviews;
 function revsOnLoadHandler() {
 // register our source container with the commenting code
 var paths = {'svn172': '/trunk/TiddlyHome/_th/lib/store.php'}
 codereviews = CR_controller.setup(
 {"assetHostPath": "https://ssl.gstatic.com/codesite/ph", "domainName": null, "loggedInUserEmail": null, "projectName": "bidix", "relativeBaseUrl": "", "profileUrl": null, "token": null, "projectHomeUrl": "/p/bidix", "assetVersionPath": "https://ssl.gstatic.com/codesite/ph/6717364596070185760"}, '', 'svn172', paths,
 CR_BrowseIntegrationFactory);
 
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_DRAFT_PLATE, showPublishInstructions);
 
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_PUB_PLATE, pubRevealed);
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_DRAFT_PLATE, draftRevealed);
 codereviews.registerActivityListener(CR_ActivityType.DISCARD_DRAFT_COMMENT, draftDestroyed);
 
 
 
 
 
 
 
 var initialized = true;
 reloadCursors();
 }
 window.onload = function() {keysOnLoadHandler(); revsOnLoadHandler();};

</script>
<script type="text/javascript" src="https://ssl.gstatic.com/codesite/ph/6717364596070185760/js/dit_scripts.js"></script>

 
 
 
 <script type="text/javascript" src="https://ssl.gstatic.com/codesite/ph/6717364596070185760/js/ph_core.js"></script>
 
 
 
 
</div> 

<div id="footer" dir="ltr">
 <div class="text">
 <a href="/projecthosting/terms.html">Terms</a> -
 <a href="http://www.google.com/privacy.html">Privacy</a> -
 <a href="/p/support/">Project Hosting Help</a>
 </div>
</div>
 <div class="hostedBy" style="margin-top: -20px;">
 <span style="vertical-align: top;">Powered by <a href="http://code.google.com/projecthosting/">Google Project Hosting</a></span>
 </div>

 
 


 
 
 <script type="text/javascript">_CS_reportToCsi();</script>
 
 </body>
</html>

