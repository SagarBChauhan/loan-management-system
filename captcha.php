






<!DOCTYPE html><html lang="en"
      class=""><head><script>var a=window.devsite||{};window.devsite=a;a.readyCallbacks=[];window.devsite.readyCallbacks=a.readyCallbacks;a.ready=function(b){a.readyCallbacks.push(b)};window.devsite.ready=a.ready;
</script><meta charset="utf-8"><meta name="xsrf_token" content="CzU4nfLOt1enN7JuA5w_2mPtbqmUcY3WnPccxqxsvFw6MTU1MjAzMTg3NTY3MjY2OA" /><link rel="canonical" href="https://developers.google.com/recaptcha/docs/v3"><link rel="alternate" href="https://developers.google.com/recaptcha/docs/v3" hreflang="en"><link rel="alternate" href="https://developers.google.cn/recaptcha/docs/v3" hreflang="en-cn"><link rel="alternate" href="https://developers.google.com/recaptcha/docs/v3" hreflang="x-default"><link rel="shortcut icon" href="https://developers.google.com/_static/16eb031c2e/images/favicon.png"><link rel="apple-touch-icon" href="https://developers.google.com/_static/16eb031c2e/images/touch-icon.png"><meta name="viewport" content="width=device-width, initial-scale=1"><style>@-webkit-keyframes gb__a{0%{opacity:0}50%{opacity:1}}@keyframes gb__a{0%{opacity:0}50%{opacity:1}}.gb_Tc{display:inline-block;padding:0 0 0 15px;vertical-align:middle}.gb_Tc:first-child,#gbsfw:first-child+.gb_Tc{padding-left:0}.gb_xc{position:relative}.gb_x{display:inline-block;outline:none;vertical-align:middle;-webkit-border-radius:2px;border-radius:2px;-webkit-box-sizing:border-box;box-sizing:border-box;height:30px;width:30px;color:#000;cursor:pointer;text-decoration:none}#gb#gb a.gb_x{color:#000;cursor:pointer;text-decoration:none}.gb_Ra{border-color:transparent;border-bottom-color:#fff;border-style:dashed dashed solid;border-width:0 8.5px 8.5px;display:none;position:absolute;left:6.5px;top:37px;z-index:1;height:0;width:0;-webkit-animation:gb__a .2s;animation:gb__a .2s}.gb_Sa{border-color:transparent;border-style:dashed dashed solid;border-width:0 8.5px 8.5px;display:none;position:absolute;left:6.5px;z-index:1;height:0;width:0;-webkit-animation:gb__a .2s;animation:gb__a .2s;border-bottom-color:#ccc;border-bottom-color:rgba(0,0,0,.2);top:36px}x:-o-prefocus,div.gb_Sa{border-bottom-color:#ccc}.gb_z{background:#fff;border:1px solid #ccc;border-color:rgba(0,0,0,.2);color:#000;-webkit-box-shadow:0 2px 10px rgba(0,0,0,.2);box-shadow:0 2px 10px rgba(0,0,0,.2);display:none;outline:none;overflow:hidden;position:absolute;right:0;top:44px;-webkit-animation:gb__a .2s;animation:gb__a .2s;-webkit-border-radius:2px;border-radius:2px;-webkit-user-select:text}.gb_Tc.gb_Ob .gb_Ra,.gb_Tc.gb_Ob .gb_Sa,.gb_Tc.gb_Ob .gb_z,.gb_Ob.gb_z{display:block}.gb_Tc.gb_Ob.gb_xf .gb_Ra,.gb_Tc.gb_Ob.gb_xf .gb_Sa{display:none}.gb_yf{position:absolute;right:0;top:44px;z-index:-1}.gb_Aa .gb_Ra,.gb_Aa .gb_Sa,.gb_Aa .gb_z{margin-top:-10px}.gb_wa{display:none!important}.gb_xa{visibility:hidden}.gb_vb .gb_Sa{border:0;border-left:1px solid rgba(0,0,0,.2);border-top:1px solid rgba(0,0,0,.2);height:14px;width:14px;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.gb_vb .gb_Ra{border:0;border-left:1px solid rgba(0,0,0,.2);border-top:1px solid rgba(0,0,0,.2);height:14px;width:14px;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-color:#fff;background:#fff}.gb_If ::-webkit-scrollbar{height:15px;width:15px}.gb_If ::-webkit-scrollbar-button{height:0;width:0}.gb_If ::-webkit-scrollbar-thumb{background-clip:padding-box;background-color:rgba(0,0,0,.3);border:5px solid transparent;-webkit-border-radius:10px;border-radius:10px;min-height:20px;min-width:20px;height:5px;width:5px}.gb_If ::-webkit-scrollbar-thumb:hover,.gb_If ::-webkit-scrollbar-thumb:active{background-color:rgba(0,0,0,.4)}.gb_w .gb_x{background-position:0 -1801px;opacity:.55}.gb_y .gb_w .gb_x{background-position:0 -1801px}.gb_g .gb_w .gb_x{background-position:-35px -1317px;opacity:1}.gb_z.gb_A{min-height:196px;overflow-y:auto;width:320px}.gb_B{-webkit-transition:height .2s ease-in-out;transition:height .2s ease-in-out}.gb_C{background:#fff;margin:0;min-height:100px;padding:28px;padding-right:27px;text-align:left;white-space:normal;width:265px}.gb_D{background:#f5f5f5;cursor:pointer;height:40px;overflow:hidden}.gb_E{position:relative}.gb_D{display:block;line-height:40px;text-align:center;width:320px}.gb_E{display:block;line-height:40px;text-align:center}.gb_E.gb_F{line-height:0}.gb_D,.gb_D:visited,.gb_D:active,.gb_E,.gb_E:visited{color:rgba(0,0,0,0.87);text-decoration:none}.gb_E:active{color:rgba(0,0,0,0.87)}#gb a.gb_D,#gb a.gb_D:visited,#gb a.gb_D:active,#gb a.gb_E,#gb a.gb_E:visited{color:rgba(0,0,0,0.87);text-decoration:none}#gb a.gb_E:active{color:rgba(0,0,0,0.87)}.gb_E,.gb_C{display:none}.gb_u,.gb_u+.gb_E,.gb_H .gb_E,.gb_H .gb_C{display:block}.gb_E:hover,.gb_E:active,#gb a.gb_E:hover,#gb a.gb_E:active{text-decoration:underline}.gb_E{border-bottom:1px solid #ebebeb;left:28px;width:264px}.gb_H .gb_D{display:none}.gb_E:last-child{border-bottom-width:0}.gb_I .gb_c{display:initial}.gb_I.gb_J{height:100px;text-align:center}.gb_I.gb_J img{padding:34px 0;height:32px;width:32px}.gb_I .gb_k+img{border:0;margin:8px;height:48px;width:48px}.gb_I div.gb_K{background:#ffa;-webkit-border-radius:5px;border-radius:5px;padding:5px;text-align:center}.gb_I.gb_L,.gb_I.gb_M{padding-bottom:0}.gb_I.gb_N,.gb_I.gb_M{padding-top:0}.gb_I.gb_M a,.gb_I.gb_N a{top:0}.gb_O .gb_D{margin-top:0;position:static}.gb_P{display:inline-block}.gb_Q{margin:-12px 28px 28px;position:relative;width:264px;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.1),0 0 1px rgba(0,0,0,0.1);box-shadow:0 1px 2px rgba(0,0,0,0.1),0 0 1px rgba(0,0,0,0.1)}.gb_n{background-image:url('https://ssl.gstatic.com/gb/images/v1_051523630.png');-webkit-background-size:92px 2839px;background-size:92px 2839px;display:inline-block;margin:8px;vertical-align:middle;height:64px;width:64px}.gb_R{color:#262626;display:inline-block;font:13px/18px Arial,sans-serif;margin-right:80px;padding:10px 10px 10px 0;vertical-align:middle;white-space:normal}.gb_S{font:16px/24px Arial,sans-serif}.gb_T,#gb#gb .gb_T{color:#427fed;text-decoration:none}.gb_T:hover,#gb#gb .gb_T:hover{text-decoration:underline}.gb_U .gb_C{position:relative}.gb_U .gb_c{position:absolute;top:28px;left:28px}.gb_D.gb_V{display:none;height:0}.gb_b .gb_w .gb_x::before,.gb_b.gb_y .gb_w .gb_x::before{left:0;top:-1801px}.gb_b.gb_g .gb_w .gb_x::before{left:-35px;top:-1317px}.gb_vb .gb_D{position:relative}.gb_w .gb_x:hover,.gb_w .gb_x:focus{opacity:.85}.gb_g .gb_w .gb_x:hover,.gb_g .gb_w .gb_x:focus{opacity:1}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_I .gb_k{background-image:url('https://ssl.gstatic.com/gb/images/v2_abb067380.png')}}#gb#gb a.gb_c,#gb#gb a.gb_d,#gb#gb span.gb_d{color:rgba(0,0,0,0.87);text-decoration:none}#gb#gb a.gb_d:hover,#gb#gb a.gb_d:focus{opacity:.85;text-decoration:underline}.gb_e.gb_f{display:none;padding-left:15px;vertical-align:middle}.gb_e.gb_f:first-child{padding-left:0}.gb_e .gb_d{display:inline-block;line-height:24px;outline:none;vertical-align:middle}#gb#gb.gb_g a.gb_d,#gb#gb.gb_g span.gb_d,#gb#gb .gb_g a.gb_d,#gb#gb .gb_g span.gb_d{color:#fff}#gb#gb.gb_g span.gb_d,#gb#gb .gb_g span.gb_d{opacity:.7}.gb_a.gb_a{-webkit-background-size:64px 64px;background-size:64px 64px}#gb2 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/3a1e625196.png')}.gb_b #gb2 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/3a1e625196.png')}#gb22 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/3daf4c1f88.png')}.gb_b #gb22 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/3daf4c1f88.png')}#gb45 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/f420d06f66.png')}.gb_b #gb45 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/f420d06f66.png')}#gb72 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/28a40ba7cc.png')}.gb_b #gb72 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/28a40ba7cc.png')}#gb117 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/142da27578.png')}.gb_b #gb117 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/142da27578.png')}#gb136 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/911e3628e6.png')}.gb_b #gb136 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/911e3628e6.png')}#gb166 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/41679a9ec5.png')}.gb_b #gb166 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/41679a9ec5.png')}#gb171 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/4244245d7e.png')}.gb_b #gb171 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/4244245d7e.png')}#gb177 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/4653513b7d.png')}.gb_b #gb177 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/4653513b7d.png')}#gb206 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/ad330d8459.png')}.gb_b #gb206 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/ad330d8459.png')}#gb207 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/2c21041e16.png')}.gb_b #gb207 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/2c21041e16.png')}#gb211 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/c03dda0b34.png')}.gb_b #gb211 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/c03dda0b34.png')}#gb217 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/71060be5b3.png')}.gb_b #gb217 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/71060be5b3.png')}#gb228 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/74aa55e0c2.png')}.gb_b #gb228 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/74aa55e0c2.png')}#gb249 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/afa40f6e42.png')}.gb_b #gb249 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/afa40f6e42.png')}#gb260 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/ea554714e7.png')}.gb_b #gb260 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/ea554714e7.png')}#gb261 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/0b26f6f8e4.png')}.gb_b #gb261 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/0b26f6f8e4.png')}#gb108 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/dfbeb24785.png')}.gb_b #gb108 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/dfbeb24785.png')}#gb60 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/85bb99a341.png')}.gb_b #gb60 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/85bb99a341.png')}#gb175 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/eacd033c28.png')}.gb_b #gb175 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/eacd033c28.png')}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){#gb2 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/438087d3df.png')}.gb_b #gb2 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/438087d3df.png')}#gb22 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/cfa67efcd3.png')}.gb_b #gb22 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/cfa67efcd3.png')}#gb45 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/9c561d4392.png')}.gb_b #gb45 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/9c561d4392.png')}#gb72 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/cfa4e2be67.png')}.gb_b #gb72 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/cfa4e2be67.png')}#gb117 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/e3cbb9b858.png')}.gb_b #gb117 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/e3cbb9b858.png')}#gb136 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/17bdcddea9.png')}.gb_b #gb136 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/17bdcddea9.png')}#gb166 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/be3fe52205.png')}.gb_b #gb166 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/be3fe52205.png')}#gb171 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/1b217ae532.png')}.gb_b #gb171 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/1b217ae532.png')}#gb177 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/188f0d697b.png')}.gb_b #gb177 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/188f0d697b.png')}#gb206 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/20808fb750.png')}.gb_b #gb206 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/20808fb750.png')}#gb207 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/6d9eaee7f9.png')}.gb_b #gb207 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/6d9eaee7f9.png')}#gb211 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/2d7fffa981.png')}.gb_b #gb211 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/2d7fffa981.png')}#gb217 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/e2c0b463b4.png')}.gb_b #gb217 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/e2c0b463b4.png')}#gb228 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/fe8c881457.png')}.gb_b #gb228 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/fe8c881457.png')}#gb249 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/d54db42004.png')}.gb_b #gb249 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/d54db42004.png')}#gb260 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/99be7c5086.png')}.gb_b #gb260 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/99be7c5086.png')}#gb261 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/9001dae971.png')}.gb_b #gb261 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/9001dae971.png')}#gb108 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/ca7b209615.png')}.gb_b #gb108 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/ca7b209615.png')}#gb60 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/e000432278.png')}.gb_b #gb60 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/e000432278.png')}#gb175 .gb_a{background-image:url('//ssl.gstatic.com/gb/images/a/84d52a8885.png')}.gb_b #gb175 .gb_a::before{content:url('//ssl.gstatic.com/gb/images/a/84d52a8885.png')}}.gb_h{padding:1px;display:inline-block;vertical-align:top;color:black;z-index:999;height:98px;width:86px}.gb_h a{text-decoration:none}.gb_h[aria-grabbed=true]{visibility:hidden}.gb_h:hover{z-index:1001}.gb_h:hover a{border:1px solid #e5e5e5;-webkit-border-radius:2px;border-radius:2px;margin:7px 1px}.gb_h.gb_i a{border:1px solid #e5e5e5;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.1);box-shadow:0 1px 2px rgba(0,0,0,0.1);background:#fff;cursor:-moz-grabbing;cursor:-webkit-grabbing;margin:-1px;visibility:visible;z-index:1001}.gb_j{opacity:.5}.gb_h.gb_i a{color:rgba(0,0,0,0.87)!important;cursor:-moz-grabbing;cursor:-webkit-grabbing;font:13px/27px Arial,sans-serif;text-decoration:none!important}.gb_c{color:rgba(0,0,0,0.87);display:inline-block;font-size:13px;margin:8px 2px;text-align:center;outline:none}.gb_c[draggable=false]{-webkit-user-select:none}.gb_c .gb_k,.gb_c .gb_a{display:inline-block;vertical-align:top;height:64px;width:64px}.gb_c .gb_l{display:inline-block;height:64px;vertical-align:top;width:64px}.gb_m{display:block;line-height:20px;overflow:hidden;white-space:nowrap;width:84px;text-overflow:ellipsis}.gb_h:hover .gb_c{z-index:1}.gb_h:hover .gb_m{background:rgba(255,255,255,.9);white-space:normal;overflow-wrap:break-word;word-wrap:break-word}.gb_c .gb_k{background-image:url('https://ssl.gstatic.com/gb/images/v1_051523630.png');-webkit-background-size:92px 2839px;background-size:92px 2839px}.gb_b .gb_c .gb_k,.gb_b .gb_n.gb_k{background-image:none;overflow:hidden;position:relative}.gb_b .gb_c .gb_k::before,.gb_b .gb_n.gb_k::before{content:url('https://ssl.gstatic.com/gb/images/v1_051523630.png');position:absolute}.gb_b .gb_a{background-image:none!important;position:relative}.gb_b .gb_a::before{left:0;position:absolute;top:0}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_c .gb_k{background-image:url('https://ssl.gstatic.com/gb/images/v2_abb067380.png')}.gb_b .gb_c .gb_k::before{content:url('https://ssl.gstatic.com/gb/images/v2_abb067380.png');-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;transform-origin:0 0}.gb_b .gb_c .gb_a::before{-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;transform-origin:0 0}}.gb_o .gb_c:focus,#gb#gb .gb_o a.gb_c:focus{text-decoration:underline}.gb_h[aria-grabbed=true].gb_p{visibility:visible}.gb_q,.gb_r{position:relative;top:27px;visibility:hidden}.gb_s,.gb_t{left:37px;visibility:hidden}.gb_q{float:left;width:0;height:0;border-top:5px solid transparent;border-bottom:5px solid transparent;border-right:5px solid #4273db}.gb_r{float:right;width:0;height:0;border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:5px solid #4273db}.gb_s{position:absolute;top:0;width:0;height:0;border-left:5px solid transparent;border-right:5px solid transparent;border-bottom:5px solid #4273db}.gb_t{position:absolute;top:59px;width:0;height:0;border-left:5px solid transparent;border-right:5px solid transparent;border-top:5px solid #4273db}ul.gb_u li.gb_p:not(:first-child) .gb_q,ul.gb_u li.gb_p:not(:nth-child(-n+3)) .gb_s,ul.gb_u li.gb_p .gb_r,ul.gb_u li.gb_p .gb_t,ul.gb_v li.gb_p .gb_q,ul.gb_v li.gb_p .gb_s,ul.gb_v li.gb_p:not(:last-child) .gb_r,ul.gb_v li.gb_p:not(:nth-last-child(-n+3)) .gb_t{visibility:visible}a.gb_W{border:none;color:#4285f4;cursor:default;font-weight:bold;outline:none;position:relative;text-align:center;text-decoration:none;text-transform:uppercase;white-space:nowrap;-webkit-user-select:none}a.gb_W:hover:after,a.gb_W:focus:after{background-color:rgba(0,0,0,.12);content:'';height:100%;left:0;position:absolute;top:0;width:100%}a.gb_W:hover,a.gb_W:focus{text-decoration:none}a.gb_W:active{background-color:rgba(153,153,153,.4);text-decoration:none}a.gb_X{background-color:#4285f4;color:#fff}a.gb_X:active{background-color:#0043b2}.gb_Z{-webkit-box-shadow:0 1px 1px rgba(0,0,0,.16);box-shadow:0 1px 1px rgba(0,0,0,.16)}.gb_W,.gb_X,.gb_0,.gb_1{display:inline-block;line-height:28px;padding:0 12px;-webkit-border-radius:2px;border-radius:2px}.gb_0{background:#f8f8f8;border:1px solid #c6c6c6}.gb_1{background:#f8f8f8}.gb_0,#gb a.gb_0.gb_0,.gb_1{color:#666;cursor:default;text-decoration:none}#gb a.gb_1.gb_1{cursor:default;text-decoration:none}.gb_1{border:1px solid #4285f4;font-weight:bold;outline:none;background:#4285f4;background:-webkit-linear-gradient(top,#4387fd,#4683ea);background:linear-gradient(top,#4387fd,#4683ea);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd,endColorstr=#4683ea,GradientType=0)}#gb a.gb_1.gb_1{color:#fff}.gb_1:hover{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}.gb_1:active{-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15);background:#3c78dc;background:-webkit-linear-gradient(top,#3c7ae4,#3f76d3);background:linear-gradient(top,#3c7ae4,#3f76d3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4,endColorstr=#3f76d3,GradientType=0)}.gb_zf{display:inline-block;line-height:normal;position:relative;z-index:987}.gb_ya{-webkit-background-size:32px 32px;background-size:32px 32px;-webkit-border-radius:50%;border-radius:50%;display:block;margin:-1px;overflow:hidden;position:relative;height:32px;width:32px;z-index:0}@media (min-resolution:1.25dppx),(-o-min-device-pixel-ratio:5/4),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_ya::before{display:inline-block;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:left 0;transform-origin:left 0}.gb_5a::before{display:inline-block;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:left 0;transform-origin:left 0}}.gb_ya:hover,.gb_ya:focus{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15);box-shadow:0 1px 0 rgba(0,0,0,.15)}.gb_ya:active{-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15)}.gb_ya:active::after{background:rgba(0,0,0,.1);-webkit-border-radius:50%;border-radius:50%;content:'';display:block;height:100%}.gb_za{cursor:pointer;line-height:30px;min-width:30px;opacity:.75;overflow:hidden;vertical-align:middle;text-overflow:ellipsis}.gb_x.gb_za{width:auto}.gb_za:hover,.gb_za:focus{opacity:.85}.gb_Aa .gb_za,.gb_Aa .gb_Ba{line-height:26px}#gb#gb.gb_Aa a.gb_za,.gb_Aa .gb_Ba{font-size:11px;height:auto}.gb_Ca{border-top:4px solid #000;border-left:4px dashed transparent;border-right:4px dashed transparent;display:inline-block;margin-left:6px;opacity:.75;vertical-align:middle}.gb_Da:hover .gb_Ca{opacity:.85}.gb_fa>.gb_Ea{padding:3px 3px 3px 4px}.gb_g .gb_za,.gb_g .gb_Ca{opacity:1}#gb#gb.gb_g.gb_g a.gb_za,#gb#gb .gb_g.gb_g a.gb_za{color:#fff}.gb_g.gb_g .gb_Ca{border-top-color:#fff;opacity:1}.gb_y .gb_ya:hover,.gb_g .gb_ya:hover,.gb_y .gb_ya:focus,.gb_g .gb_ya:focus{-webkit-box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2)}.gb_Fa .gb_Ea,.gb_Ha .gb_Ea{position:absolute;right:1px}.gb_Ea.gb_f,.gb_Ia.gb_f,.gb_Da.gb_f{-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size}.gb_Ja.gb_Ka .gb_za{width:30px!important}.gb_La.gb_xa{display:none}@-webkit-keyframes progressmove{0%{margin-left:-100%}to{margin-left:100%}}@keyframes progressmove{0%{margin-left:-100%}to{margin-left:100%}}.gb_Ma.gb_wa{display:none}.gb_Ma{background-color:#ccc;height:3px;overflow:hidden}.gb_Na{background-color:#f4b400;height:100%;width:50%;-webkit-animation:progressmove 1.5s linear 0s infinite;animation:progressmove 1.5s linear 0s infinite}.gb_Oa{height:40px;position:absolute;right:-5px;top:-5px;width:40px}.gb_Pa .gb_Oa,.gb_Qa .gb_Oa{right:0;top:0}.gb_za~.gb_Ra,.gb_za~.gb_Sa{left:auto;right:6.5px}.gb_Ta{outline:none;-webkit-transform:translateZ(0);transform:translateZ(0)}.gb_Ua.gb_Ta{-webkit-border-radius:8px;border-radius:8px}.gb_Ta.gb_ka{width:320px}.gb_Ua.gb_Ta{width:320px}.gb_Va.gb_Wa{color:#5f6368;font:400 12px/16px Roboto,RobotoDraft,Helvetica,Arial,sans-serif}.gb_Xa,#gb a.gb_Xa.gb_Xa,.gb_Za a,#gb .gb_Za.gb_Za a{color:#36c;text-decoration:none}.gb_Va>.gb_Xa,#gb .gb_Va>a.gb_Xa.gb_Xa{color:#0070ff;font:inherit;font-weight:500;text-decoration:none}.gb_Xa.gb_0a:active,#gb .gb_Xa.gb_0a:active,.gb_Xa.gb_0a:hover,#gb .gb_Xa.gb_0a:hover,.gb_Za a:active,#gb .gb_Za a:active,.gb_Za a:hover,#gb .gb_Za a:hover{text-decoration:underline}.gb_1a{margin:20px;white-space:nowrap}.gb_Ua>.gb_1a{margin:20px 16px}.gb_2a,.gb_3a{display:inline-block;vertical-align:top}.gb_Ua .gb_2a,.gb_Ua .gb_3a{display:block;vertical-align:top;text-align:center}.gb_Ta.gb_ka .gb_3a{max-width:164px}.gb_2a{margin-right:20px;position:relative}.gb_Ua .gb_2a{margin:0 94px 10px 100px;height:86px;width:86px}.gb_4a{-webkit-border-radius:50%;border-radius:50%;overflow:hidden;-webkit-transform:translateZ(0)}.gb_5a{-webkit-background-size:96px 96px;background-size:96px 96px;border:none;vertical-align:top;height:96px;width:96px}.gb_Ua .gb_5a{-webkit-background-size:80px 80px;background-size:80px 80px;height:80px;width:80px}.gb_La{background:rgba(78,144,254,.7);bottom:0;color:#fff;font-size:9px;font-weight:bold;left:0;line-height:9px;position:absolute;padding:7px 0;text-align:center;width:96px}.gb_Ua .gb_6a{background:#fff;bottom:0;position:absolute;right:0;overflow:visible;height:32px;width:32px}.gb_7a{background:#fff;bottom:0;-webkit-box-shadow:0 1px 1px 0 rgba(65,69,73,0.3),0 1px 3px 1px rgba(65,69,73,0.15);box-shadow:0 1px 1px 0 rgba(65,69,73,0.3),0 1px 3px 1px rgba(65,69,73,0.15);margin:0 2.5px 3px;position:absolute;right:0;height:26px;width:26px}.gb_7a:hover{background-color:#f8faff}.gb_7a:focus,.gb_7a:hover:focus{background-color:#f4f8ff}.gb_7a:active,.gb_7a:focus:active{background:#fff;-webkit-box-shadow:0 1px 3px 0 rgba(60,64,67,0.3),0 4px 8px 3px rgba(60,64,67,0.15);box-shadow:0 1px 3px 0 rgba(60,64,67,0.3),0 4px 8px 3px rgba(60,64,67,0.15)}.gb_7a:hover>.gb_8a,.gb_7a:focus>.gb_8a,.gb_7a:active>.gb_8a{fill:#1a73e8}.gb_4a .gb_La{background:rgba(0,0,0,.54)}.gb_9a{font-weight:bold;margin:-4px 0 1px 0;text-overflow:ellipsis;overflow:hidden}.gb_Ua .gb_9a{color:#202124;font:500 16px/18px Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;letter-spacing:.29px;margin:0 0 2px 0;text-align:center;text-overflow:ellipsis;overflow:hidden}.gb_bb{color:#666;text-overflow:ellipsis;overflow:hidden}.gb_Ua .gb_bb{color:#5f6368;font:400 14px/19px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;letter-spacing:normal;text-align:center;text-overflow:ellipsis;overflow:hidden}.gb_cb.gb_cb{background-color:#ffffff;border:1px solid #dadce0;-webkit-border-radius:100px;border-radius:100px;color:#3c4043;display:inline-block;font:500 14px/16px Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;letter-spacing:.25px;margin:16px 0 0;max-width:254px;padding:8px 16px;text-align:center;text-decoration:none;text-overflow:ellipsis;overflow:hidden}.gb_cb:hover{background-color:#f7f8f8}.gb_cb:focus,.gb_cb:hover:focus{background-color:#f4f4f4}.gb_cb:active,.gb_cb:focus:active{background-color:#e8e8e9;border-color:transparent;-webkit-box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 2px 6px 2px rgba(60,64,67,0.15);box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 2px 6px 2px rgba(60,64,67,0.15)}.gb_Za{color:#ccc;margin:6px 0}.gb_Ta.gb_ka .gb_Za a{display:block;line-height:24px;margin:0}.gb_Ta.gb_ka .gb_Za a:first-child:last-child{line-height:normal}.gb_Ta:not(.gb_ka) .gb_Za a{margin:0 10px}.gb_Ta:not(.gb_ka) .gb_Za a:first-child{margin-left:0}.gb_Ta:not(.gb_ka) .gb_Za a:last-child{margin-right:0}.gb_db{color:#5f6368;margin:14px 16px;text-align:center}.gb_eb.gb_eb{-webkit-border-radius:4px;border-radius:4px;color:#5f6368;display:inline-block;font:400 12px/16px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;padding:4px 8px;text-decoration:none;text-align:center;white-space:normal}.gb_eb:hover{background-color:#f7f8f8}.gb_eb:focus,.gb_eb:hover:focus{background-color:#f4f4f4}.gb_eb:active,.gb_eb:active:focus{background-color:#e8e8e9}.gb_3a .gb_0{background:#4d90fe;border-color:#3079ed;font-weight:bold;margin:10px 0 0 0;color:#fff}#gb .gb_3a a.gb_0.gb_0{color:#fff}.gb_3a .gb_0:hover{background:#357ae8;border-color:#2f5bb7}.gb_fb.gb_J{border-top:none}.gb_fb{background:#f5f5f5;border-top:1px solid #ccc;border-color:rgba(0,0,0,.2);padding:10px 0;width:100%;display:table}.gb_fb .gb_gb{margin:0 20px;white-space:nowrap}.gb_fb>div{display:table-cell;text-align:right}.gb_fb>div:first-child{text-align:left}.gb_fb .gb_hb{display:block;text-align:center}.gb_ib .gb_Ra{border-bottom-color:#fef9db}.gb_Wa{background:#fef9db;font-size:11px;padding:10px 20px;white-space:normal}.gb_Va.gb_Wa{background:#e8f0fe;-webkit-border-radius:4px;border-radius:4px;margin:4px;text-align:center}.gb_Va.gb_Wa>#gbpbt>span{white-space:nowrap;font-weight:500}.gb_Wa b,.gb_Xa{white-space:nowrap}.gb_jb.gb_jb{background-color:#ffffff;color:#3c4043;display:table;font:500 14px/16px Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;letter-spacing:.25px;outline-offset:-2px;padding:14px 24px;text-align:center;text-decoration:none;width:100%}.gb_jb:hover{background-color:#f7f8f8}.gb_jb:focus,.gb_jb:hover:focus{background-color:#f4f4f4}.gb_jb:active,.gb_jb:focus:active{background-color:#e8e8e9}.gb_kb{border:none;display:table-cell;vertical-align:middle;height:20px;width:20px;fill:#5f6368}.gb_lb{display:table-cell;padding:0 40px 0 16px;text-align:left;vertical-align:middle}.gb_mb{border-bottom:1px solid #e8eaed;border-top:1px solid #e8eaed;text-align:center}.gb_nb.gb_nb{background-color:#ffffff;border:1px solid #dadce0;-webkit-border-radius:4px;border-radius:4px;color:#3c4043;display:inline-block;font:500 14px/16px Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;letter-spacing:.15px;margin:16px;padding:10px 24px;text-align:center;text-decoration:none;white-space:normal}.gb_nb:hover{background-color:#f7f8f8}.gb_nb:focus,.gb_nb:hover:focus{background-color:#f4f4f4}.gb_nb:active,.gb_nb:active:focus{background-color:#e8e8e9;border-color:transparent;-webkit-box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 2px 6px 2px rgba(60,64,67,0.15);box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 2px 6px 2px rgba(60,64,67,0.15)}.gb_qb{background:#f5f5f5;border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);max-height:230px;overflow:auto}.gb_rb{border-top:1px solid #e8eaed;max-height:300px;overflow:auto}.gb_sb.gb_ka{max-height:170px}.gb_sb.gb_ka.gb_tb{max-height:124px}.gb_ub{border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);display:block;outline-offset:-2px;padding:10px 20px;position:relative;white-space:nowrap}.gb_rb>.gb_ub{border:none;height:35px;padding:12px 16px 13px}.gb_vb .gb_ub:focus .gb_wb{outline:1px dotted #fff}.gb_ub:hover{background:#eee}.gb_rb>.gb_ub:hover{background-color:#f7f8f8}.gb_rb>.gb_ub:focus,.gb_rb>.gb_ub:hover:focus{background-color:#f4f4f4}.gb_rb>.gb_ub:active,.gb_rb>.gb_ub:focus:active{background-color:#e8e8e9}.gb_ub[selected="true"]{overflow:hidden}.gb_ub[selected="true"]>.gb_xb{background-color:rgba(117,117,117,.9)}.gb_ub[selected="true"]>.gb_yb{display:block;position:absolute;z-index:2}.gb_yb::-moz-focus-inner{border:0}.gb_yb{background-color:transparent;border:none;color:#fff;display:none;font-family:Roboto,Arial,sans-serif;font-weight:400;font-size:14px;height:36px;min-width:86px;text-align:center;top:16px;width:auto}.gb_ub[selected="true"]>.gb_yb:focus{background-color:rgba(0,0,0,.24);-webkit-border-radius:2px;border-radius:2px;outline:0}.gb_ub[selected="true"]>.gb_yb:hover,.gb_ub[selected="true"]>.gb_yb:focus:hover{background-color:#565656;-webkit-border-radius:2px;border-radius:2px}.gb_ub[selected="true"]>.gb_yb:active{-webkit-border-radius:2px;border-radius:2px;background-color:#212121}.gb_zb{left:0;margin-left:5%}.gb_Ab{margin-right:5%;right:0}.gb_ub:first-child,.gb_Bb:first-child+.gb_ub{border-top:0}.gb_Bb{display:none}.gb_Cb{cursor:default}.gb_Cb:hover{background:transparent}.gb_Db{border:none;vertical-align:top;height:48px;width:48px}.gb_Ua .gb_Db{height:32px;width:32px}.gb_wb{display:inline-block;margin:6px 0 0 10px}.gb_Ua .gb_wb{margin:0 0 0 12px}.gb_Ta.gb_ka .gb_wb{max-width:222px}.gb_Cb .gb_Db,.gb_Cb .gb_wb{opacity:.4}.gb_Eb{color:#000;text-overflow:ellipsis;overflow:hidden}.gb_Ua .gb_Eb{color:#3c4043;font:500 14px/18px Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;letter-spacing:.25px}.gb_Cb .gb_Eb{color:#666}.gb_Fb{color:#666;text-overflow:ellipsis;overflow:hidden}.gb_Ua .gb_Fb{color:#5f6368;font:400 12px/16px Roboto,RobotoDraft,Helvetica,Arial,sans-serif}.gb_Hb{color:#666;font-style:italic}.gb_xb{background-color:transparent;height:100%;left:0;position:absolute;text-align:center;top:0;width:100%;z-index:1}.gb_yb:hover{background-color:rgba(100,100,100,0.4)}.gb_Ib{background:#f5f5f5;border-top:1px solid #ccc;border-top-color:rgba(0,0,0,.2);display:block;padding:10px 20px}.gb_Jb{background-position:-35px -311px;display:inline-block;margin:1px 0;vertical-align:middle;height:25px;width:25px}.gb_b .gb_Jb::before{left:-35px;top:-311px}.gb_Kb{color:#427fed;display:inline-block;padding:0 25px 0 10px;vertical-align:middle;white-space:normal}.gb_Ib:hover .gb_Kb{text-decoration:underline}.gb_fb .gb_gb:hover{-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);box-shadow:0 1px 1px rgba(0,0,0,0.1);border-color:#c6c6c6;color:#222;background-color:#fff;background-image:-webkit-gradient(linear,left top,left bottom,from(#fff),to(#f8f8f8));background-image:-webkit-linear-gradient(top,#fff,#f8f8f8);background-image:-webkit-linear-gradient(top,#fff,#f8f8f8);background-image:linear-gradient(top,#fff,#f8f8f8);filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#ffffff',EndColorStr='#f8f8f8')}.gb_Lb{height:108px;position:absolute;right:-6px;top:-6px;width:108px}#gbsfw{min-width:400px;overflow:visible}.gb_Mb>iframe.gb_Nb{visibility:hidden}.gb_Nb,#gbsfw.gb_Ob{display:block;outline:none}#gbsfw.gb_K iframe{display:none}.gb_Pb{padding:118px 0;text-align:center}.gb_Qb{background:no-repeat center 0;color:#aaa;font-size:13px;line-height:20px;padding-top:76px;background-image:-webkit-image-set(url('//ssl.gstatic.com/gb/images/a/f5cdd88b65.png') 1x,url('//ssl.gstatic.com/gb/images/a/133fc21e88.png') 2x)}.gb_Qb a{color:#4285f4;text-decoration:none}.gb_Ja:not(.gb_b) .gb_ya::before,.gb_Ja:not(.gb_b) .gb_5a::before{content:none}.gb_b .gb_Tb .gb_Vb::before{left:0;top:-2806px}.gb_b.gb_g .gb_Tb .gb_Vb::before{left:0;top:-2250px}.gb_b.gb_y .gb_Tb .gb_Vb::before{left:0;top:-830px}.gb_b .gb_ia{background-image:none!important}.gb_b .gb_Wb{visibility:visible}.gb_vb .gb_9d span{background:transparent}.gb_Rb{min-width:152px;overflow:hidden;position:relative;z-index:987}.gb_Sb{position:absolute;padding:0 30px 0 30px}.gb_Tb{display:inline-block;line-height:0;outline:none;vertical-align:middle}.gb_Ub .gb_Tb{position:relative;top:2px}.gb_Tb .gb_Vb,.gb_ia{display:block}.gb_Wb{border:none;display:block;visibility:hidden}.gb_Tb .gb_Vb{background-position:0 -2806px;height:33px;width:92px}img.gb_ma{border:0;vertical-align:middle}.gb_g .gb_Tb .gb_Vb{background-position:0 -2250px}.gb_y .gb_Tb .gb_Vb{background-position:0 -830px;opacity:.54}@-webkit-keyframes gb__nb{0%{-webkit-transform:scale(0,0);transform:scale(0,0)}20%{-webkit-transform:scale(1.4,1.4);transform:scale(1.4,1.4)}50%{-webkit-transform:scale(.8,.8);transform:scale(.8,.8)}85%{-webkit-transform:scale(1.1,1.1);transform:scale(1.1,1.1)}to{-webkit-transform:scale(1.0,1.0);transform:scale(1.0,1.0)}}@keyframes gb__nb{0%{-webkit-transform:scale(0,0);transform:scale(0,0)}20%{-webkit-transform:scale(1.4,1.4);transform:scale(1.4,1.4)}50%{-webkit-transform:scale(.8,.8);transform:scale(.8,.8)}85%{-webkit-transform:scale(1.1,1.1);transform:scale(1.1,1.1)}to{-webkit-transform:scale(1.0,1.0);transform:scale(1.0,1.0)}}.gb_oc{background-position:-60px 0;opacity:.55;height:100%;width:100%}.gb_x:hover .gb_oc,.gb_x:focus .gb_oc{opacity:.85}.gb_pc .gb_oc{background-position:0 -484px}.gb_qc{background-color:#cb4437;-webkit-border-radius:8px;border-radius:8px;font:bold 11px Arial;color:#fff;line-height:16px;min-width:14px;padding:0 1px;position:absolute;right:0;text-align:center;text-shadow:0 1px 0 rgba(0,0,0,0.1);top:0;visibility:hidden;z-index:990}.gb_rc .gb_qc,.gb_rc .gb_sc,.gb_rc .gb_sc.gb_tc{visibility:visible}.gb_sc{padding:0 2px;visibility:hidden}.gb_uc:not(.gb_vc) .gb_Sa,.gb_uc:not(.gb_vc) .gb_Ra{left:3px}.gb_qc.gb_wc{-webkit-animation:gb__nb .6s 1s both ease-in-out;animation:gb__nb .6s 1s both ease-in-out;-webkit-perspective-origin:top right;perspective-origin:top right;-webkit-transform:scale(1,1);transform:scale(1,1);-webkit-transform-origin:top right;transform-origin:top right}.gb_wc .gb_sc{visibility:visible}.gb_y .gb_x .gb_oc{background-position:0 -1317px;opacity:.7}.gb_y .gb_pc .gb_oc{background-position:0 -311px}.gb_y .gb_x:hover .gb_oc,.gb_y .gb_x:focus .gb_oc{opacity:.85}.gb_g .gb_x .gb_oc{background-position:0 -1075px;opacity:1}.gb_g .gb_pc .gb_oc{background-position:-35px -1352px}.gb_y .gb_qc,.gb_g .gb_qc{border:none}.gb_uc .gb_xc{font-size:14px;font-weight:bold;top:0;right:0}.gb_uc .gb_x{display:inline-block;vertical-align:middle;-webkit-box-sizing:border-box;box-sizing:border-box;height:30px;width:30px}.gb_uc .gb_Ra{border-bottom-color:#e5e5e5}.gb_yc{background-color:rgba(0,0,0,.55);color:#fff;font-size:12px;font-weight:bold;line-height:20px;margin:5px;padding:0 2px;text-align:center;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-border-radius:50%;border-radius:50%;height:20px;width:20px}.gb_yc.gb_zc{background-position:-69px -1974px}.gb_yc.gb_Ac{background-position:-69px -2043px}.gb_x:hover .gb_yc,.gb_x:focus .gb_yc{background-color:rgba(0,0,0,.85)}#gbsfw.gb_Bc{background:#e5e5e5;border-color:#ccc}.gb_y .gb_yc{background-color:rgba(0,0,0,.7)}.gb_g .gb_yc.gb_yc,.gb_g .gb_rc .gb_yc.gb_yc,.gb_g .gb_rc .gb_x:hover .gb_yc,.gb_g .gb_rc .gb_x:focus .gb_yc{background-color:#fff;color:#404040}.gb_g .gb_yc.gb_zc{background-position:0 -2323px}.gb_g .gb_yc.gb_Ac{background-position:-35px 0}.gb_rc .gb_yc.gb_yc{background-color:#db4437;color:#fff}.gb_rc .gb_x:hover .gb_yc,.gb_rc .gb_x:focus .gb_yc{background-color:#a52714}.gb_b .gb_oc::before{left:-60px;top:0}.gb_b .gb_pc .gb_oc::before{left:0;top:-484px}.gb_b.gb_y .gb_x .gb_oc::before{left:0;top:-1317px}.gb_b.gb_y .gb_pc .gb_oc::before{left:0;top:-311px}.gb_b.gb_g .gb_x .gb_oc::before{left:0;top:-1075px}.gb_b.gb_g .gb_pc .gb_oc::before{left:-35px;top:-1352px}.gb_vb .gb_yc{border:1px solid #fff;color:#fff}.gb_vb.gb_y .gb_yc{border-color:#000;color:#000}.gb_b .gb_yc.gb_zc::before,.gb_vb.gb_b.gb_g .gb_yc.gb_zc::before{left:-69px;top:-1974px}.gb_b .gb_yc.gb_Ac::before,.gb_vb.gb_b.gb_g .gb_yc.gb_Ac::before{left:-69px;top:-2043px}.gb_b.gb_g .gb_yc.gb_zc::before,.gb_vb.gb_b.gb_y .gb_yc.gb_zc::before{left:0;top:-2323px}.gb_b.gb_g .gb_yc.gb_Ac::before,.gb_vb.gb_b.gb_y .gb_yc.gb_Ac::before{left:-35px;top:0}.gb_nd{color:#ffffff;font-size:13px;font-weight:bold;height:25px;line-height:19px;padding-top:5px;padding-left:12px;position:relative;background-color:#4d90fe}.gb_nd .gb_od{color:#ffffff;cursor:default;font-size:22px;font-weight:normal;position:absolute;right:12px;top:5px}.gb_nd .gb_4c,.gb_nd .gb_1c{color:#ffffff;display:inline-block;font-size:11px;margin-left:16px;padding:0 8px;white-space:nowrap}.gb_pd{background:none;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0.16)),to(rgba(0,0,0,0.2)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));background-image:linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.16),rgba(0,0,0,0.2));border-radius:2px;border:1px solid #dcdcdc;border:1px solid rgba(0,0,0,0.1);cursor:default!important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#160000ff,endColorstr=#220000ff);text-decoration:none!important;-webkit-border-radius:2px}.gb_pd:hover{background:none;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0.14)),to(rgba(0,0,0,0.2)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));background-image:linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));background-image:-webkit-linear-gradient(top,rgba(0,0,0,0.14),rgba(0,0,0,0.2));border:1px solid rgba(0,0,0,0.2);box-shadow:0 1px 1px rgba(0,0,0,0.1);-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#14000000,endColorstr=#22000000)}.gb_pd:active{box-shadow:inset 0 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.3)}.gb_Tc.gb_Uc{padding:0}.gb_Uc .gb_z{background:#ffffff;border:solid 1px transparent;-webkit-border-radius:8px;border-radius:8px;-webkit-box-sizing:border-box;box-sizing:border-box;padding:16px;right:0;top:72px;-webkit-box-shadow:0 1px 2px 0 rgba(65,69,73,0.3),0 3px 6px 2px rgba(65,69,73,0.15);box-shadow:0 1px 2px 0 rgba(65,69,73,0.3),0 3px 6px 2px rgba(65,69,73,0.15)}.gb_Vc.gb_Uc .gb_z{background:#4d90fe}a.gb_Wc{color:#5f6368!important;font-size:22px;height:24px;opacity:1;padding:8px;position:absolute;right:8px;top:8px;text-decoration:none!important;width:24px}.gb_Vc a.gb_Wc{color:#c1d1f4!important}a.gb_Wc:focus,a.gb_Wc:active,a.gb_Wc:focus:hover{background-color:#e8eaed;-webkit-border-radius:50%;border-radius:50%;outline:none}a.gb_Wc:hover{background-color:#f1f3f4;-webkit-border-radius:50%;border-radius:50%;outline:none}svg.gb_Xc{fill:#5f6368;opacity:1}.gb_Zc{padding:0;white-space:normal;display:table}.gb_0c{line-height:normal;font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif}.gb_Uc .gb_1:active{outline:none;-webkit-box-shadow:0 4px 5px rgba(0,0,0,.16);box-shadow:0 4px 5px rgba(0,0,0,.16)}.gb_W.gb_1c.gb_2c{-webkit-border-radius:4px;border-radius:4px;cursor:pointer;height:16px;color:#5f6368;font-family:Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-weight:500;letter-spacing:.25px;line-height:16px;padding:8px 6px;text-transform:none;-webkit-font-smoothing:antialiased}.gb_W.gb_1c:hover{background-color:#f8f9fa}.gb_W.gb_1c:focus,.gb_W.gb_1c:hover:focus{background-color:#f1f3f4;border-color:transparent}.gb_W.gb_1c:active{background-color:#f1f3f4;-webkit-box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.15);box-shadow:0 1px 2px 0 rgba(60,64,67,0.3),0 1px 3px 1px rgba(60,64,67,0.15)}.gb_Sc{color:#5f6368;font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;letter-spacing:.25px;line-height:20px;margin:0;margin-bottom:5px}.gb_3c{text-align:right;font-size:14px;padding-bottom:0;white-space:nowrap}.gb_3c .gb_4c{margin-left:12px;text-transform:none}a.gb_1.gb_4c:hover{background-color:#2b7de9;border-color:transparent;-webkit-box-shadow:0 1px 2px 0 rgba(66,133,244,0.3),0 1px 3px 1px rgba(66,133,244,0.15);box-shadow:0 1px 2px 0 rgba(66,133,244,0.3),0 1px 3px 1px rgba(66,133,244,0.15)}a.gb_1.gb_4c:focus,a.gb_1.gb_4c:hover:focus{background-color:#5094ed;border-color:transparent;-webkit-box-shadow:0 1px 2px 0 rgba(66,133,244,0.3),0 1px 3px 1px rgba(66,133,244,0.15);box-shadow:0 1px 2px 0 rgba(66,133,244,0.3),0 1px 3px 1px rgba(66,133,244,0.15)}a.gb_1.gb_4c:active{background-color:#63a0ef;-webkit-box-shadow:0 1px 2px 0 rgba(66,133,244,0.3),0 1px 3px 1px rgba(66,133,244,0.15);box-shadow:0 1px 2px 0 rgba(66,133,244,0.3),0 1px 3px 1px rgba(66,133,244,0.15)}.gb_3c .gb_4c.gb_5c{padding-left:6px;padding-right:14px}.gb_3c .gb_2c.gb_4c img{background-color:inherit;-webkit-border-radius:initial;border-radius:initial;height:18px;margin:0 8px 0 4px;vertical-align:text-top;width:18px}.gb_6c .gb_Zc .gb_7c .gb_2c{border:2px solid transparent}.gb_6c .gb_Zc .gb_7c .gb_2c:focus:after,.gb_6c .gb_Zc .gb_7c .gb_2c:hover:after{background-color:transparent}.gb_0c{background-color:#404040;color:#fff;padding:16px;position:absolute;top:36px;min-width:328px;max-width:650px;right:0;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:4px 4px 12px rgba(0,0,0,0.4);box-shadow:4px 4px 12px rgba(0,0,0,0.4)}.gb_0c a,.gb_0c a:visited{color:#5e97f6;text-decoration:none}.gb_8c{text-transform:uppercase}.gb_9c{padding-left:50px}.gb_Vc .gb_Zc{width:200px}.gb_ad{color:#3c4043;font-family:Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;letter-spacing:.1px;line-height:20px;margin:0;margin-bottom:12px}.gb_Vc .gb_ad{color:#ffffff}.gb_Vc .gb_Sc{color:#ffffff}.gb_Sc a.gb_cd{text-decoration:none;color:#5e97f6}.gb_Sc a.gb_cd:visited{color:#5e97f6}.gb_Sc a.gb_cd:hover,.gb_Sc a.gb_cd:active{text-decoration:underline}.gb_dd{position:absolute;background:transparent;top:-999px;z-index:-1;visibility:hidden;margin-top:1px;margin-left:1px}#gb .gb_Uc{margin:0}.gb_Uc .gb_gb{background:#4d90fe;border:2px solid transparent;-webkit-box-sizing:border-box;box-sizing:border-box;font-weight:500;margin-top:21px;min-width:70px;text-align:center;-webkit-font-smoothing:antialiased}.gb_Uc a.gb_1{background:#1a73e8;-webkit-border-radius:4px;border-radius:4px;color:#ffffff;font-family:Google Sans,Roboto,RobotoDraft,Helvetica,Arial,sans-serif;font-size:14px;font-weight:500;letter-spacing:.25px;line-height:16px;padding:8px 22px;-webkit-font-smoothing:antialiased}.gb_Uc:not(.gb_6c) a.gb_1{float:right}#gb .gb_Uc a.gb_gb.gb_gb{color:#ffffff;cursor:pointer}.gb_Uc .gb_gb:hover{background:#357ae8;border-color:#2f5bb7}.gb_ed,.gb_7c{display:table-cell}.gb_ed{vertical-align:middle}.gb_ed img{height:48px;padding-left:4px;padding-right:20px;width:48px}.gb_7c{padding-left:13px;width:100%}.gb_Uc .gb_7c{padding-top:4px;min-width:326px;padding-left:0;width:326px}.gb_Uc.gb_fd .gb_7c{min-width:254px;width:254px}.gb_Uc:not(.gb_6c) .gb_7c{padding-top:32px}.gb_gd{display:block;display:inline-block;padding:1em 0 0 0;position:relative;width:100%}.gb_hd{color:#ff0000;font-style:italic;margin:0;padding-left:46px}.gb_gd .gb_id{float:right;margin:-20px 0;width:-webkit-calc(100% - 46px);width:calc(100% - 46px)}.gb_jd svg{fill:grey}.gb_jd.gb_kd svg{fill:#4285f4}.gb_gd .gb_id label:after{background-color:#4285f4}.gb_jd{display:inline;float:right;margin-right:22px;position:relative;top:2px}.gb_Af{margin-bottom:32px;font-size:small}.gb_Af .gb_Bf{margin-right:5px}.gb_Af .gb_Cf{color:red}.gb_Ic{display:none}.gb_Ic.gb_Ob{display:block}.gb_Jc{background-color:#fff;-webkit-box-shadow:0 1px 0 rgba(0,0,0,0.08);box-shadow:0 1px 0 rgba(0,0,0,0.08);color:#000;position:relative;z-index:986}.gb_Kc{height:40px;padding:16px 24px;white-space:nowrap}.gb_Lc{position:fixed;bottom:16px;padding:16px;right:16px;white-space:normal;width:328px;-webkit-transition:width .2s,bottom .2s,right .2s;transition:width .2s,bottom .2s,right .2s;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:0 5px 5px -3px rgba(0,0,0,0.2),0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12);box-shadow:0 5px 5px -3px rgba(0,0,0,0.2),0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12)}@media (max-width:400px){.gb_Jc.gb_Lc{max-width:368px;width:auto;bottom:0;right:0}}.gb_Jc .gb_gb{border:0;font-weight:500;font-size:14px;line-height:36px;min-width:32px;padding:0 16px;vertical-align:middle}.gb_Jc .gb_gb:before{content:'';height:6px;left:0;position:absolute;top:-6px;width:100%}.gb_Jc .gb_gb:after{bottom:-6px;content:'';height:6px;left:0;position:absolute;width:100%}.gb_Jc .gb_gb+.gb_gb{margin-left:8px}.gb_Mc{height:48px;padding:4px;margin:-8px 0 0 -8px}.gb_Lc .gb_Mc{float:left;margin:-4px}.gb_Nc{font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;overflow:hidden;vertical-align:top}.gb_Kc .gb_Nc{display:inline-block;padding-left:8px;width:640px}.gb_Lc .gb_Nc{display:block;margin-left:56px;padding-bottom:16px}.gb_Oc{background-color:inherit}.gb_Kc .gb_Oc{display:inline-block;position:absolute;top:18px;right:24px}.gb_Lc .gb_Oc{text-align:right;padding-right:24px;padding-top:6px}.gb_Oc .gb_Pc{height:1.5em;margin:-.25em 10px -.25em 0;vertical-align:text-top;width:1.5em}.gb_Qc{line-height:20px;font-size:16px;font-weight:700;color:rgba(0,0,0,.87)}.gb_Lc .gb_Qc{color:rgba(0,0,0,.87);font-size:16px;line-height:20px;padding-top:8px}.gb_Kc .gb_Qc,.gb_Kc .gb_Rc{width:640px}.gb_Rc .gb_Sc,.gb_Rc{line-height:20px;font-size:13px;font-weight:400;color:rgba(0,0,0,.54)}.gb_Lc .gb_Rc .gb_Sc{font-size:14px}.gb_Lc .gb_Rc{padding-top:12px}.gb_Lc .gb_Rc a{color:rgba(66,133,244,1)}.gb_Df{position:relative;width:650px;z-index:986}#gbq2{padding-top:15px}.gb_Ef .gb_Df{min-width:200px;-webkit-flex:0 2 auto;flex:0 2 auto;-webkit-flex:0 2 main-size;flex:0 2 main-size}.gb_Ff~.gb_Df{min-width:0}.gb_Ef #gbqf{margin-right:0;display:-webkit-flex;display:flex}.gb_Ef .gbqff{min-width:0;-webkit-flex:1 1 auto;flex:1 1 auto;-webkit-flex:1 1 main-size;flex:1 1 main-size}.gb_b .gbqfi::before{left:0;top:-1352px}.gb_vb .gbqfb:focus .gbqfi{outline:1px dotted #fff}#gbq2{display:block}#gbqf{display:block;margin:0;margin-right:60px;white-space:nowrap}.gbqff{border:none;display:inline-block;margin:0;padding:0;vertical-align:top;width:100%}.gbqfqw,#gbqfb,.gbqfwa{vertical-align:top}#gbqfaa,#gbqfab,#gbqfqwb{position:absolute}#gbqfaa{left:0}#gbqfab{right:0}.gbqfqwb,.gbqfqwc{right:0;left:0;height:100%}.gbqfqwb{padding:0 8px}#gbqfbw{display:inline-block;vertical-align:top}#gbqfb{border:1px solid transparent;border-bottom-left-radius:0;border-top-left-radius:0;height:30px;margin:0;outline:none;padding:0 0;width:60px;-webkit-box-shadow:none;box-shadow:none;-webkit-box-sizing:border-box;box-sizing:border-box;background:#4285f4;background:-webkit-linear-gradient(top,#4387fd,#4683ea);background:linear-gradient(top,#4387fd,#4683ea);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd,endColorstr=#4683ea,GradientType=1)}#gbqfb:hover{-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);box-shadow:0 1px 1px rgba(0,0,0,0.1)}#gbqfb:focus{-webkit-box-shadow:inset 0 0 0 1px rgba(255,255,255,0.5);box-shadow:inset 0 0 0 1px rgba(255,255,255,0.5)}#gbqfb:hover:focus{-webkit-box-shadow:inset 0 0 0 1px #fff,0 1px 1px rgba(0,0,0,0.1);box-shadow:inset 0 0 0 1px #fff,0 1px 1px rgba(0,0,0,0.1)}#gbqfb:active:active{border:1px solid transparent;-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,.15);box-shadow:inset 0 2px 0 rgba(0,0,0,.15);background:#3c78dc;background:-webkit-linear-gradient(top,#3c7ae4,#3f76d3);background:linear-gradient(top,#3c7ae4,#3f76d3);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4,endColorstr=#3f76d3,GradientType=1)}.gbqfi{background-position:0 -1352px;display:inline-block;margin:-1px;height:30px;width:30px}.gbqfqw{background:#fff;background-clip:padding-box;border:1px solid #cdcdcd;border-color:rgba(0,0,0,.15);border-right-width:0;height:30px;-webkit-box-sizing:border-box;box-sizing:border-box}#gbfwc .gbqfqw{border-right-width:1px}#gbqfqw{position:relative}.gbqfqw.gbqfqw:hover{border-color:#a9a9a9;border-color:rgba(0,0,0,.3)}.gbqfwa{display:inline-block;width:100%}.gbqfwb{width:40%}.gbqfwc{width:60%}.gbqfwb .gbqfqw{margin-left:10px}.gbqfqw.gbqfqw:active,.gbqfqw.gbqfqwf.gbqfqwf{border-color:#4285f4}#gbqfq,#gbqfqb,#gbqfqc{background:transparent;border:none;height:20px;margin-top:4px;padding:0;vertical-align:top;width:100%}#gbqfq:focus,#gbqfqb:focus,#gbqfqc:focus{outline:none}.gbqfif,.gbqfsf{color:#222;font:16px arial,sans-serif}#gbqfbwa{display:none;text-align:center;height:0}#gbqfbwa .gbqfba{margin:16px 8px}#gbqfsa,#gbqfsb{font:bold 11px/27px Arial,sans-serif!important;vertical-align:top}.gb_y .gbqfqw.gbqfqw,.gb_g .gbqfqw.gbqfqw{border-color:rgba(255,255,255,1);-webkit-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}.gb_y #gbqfb,.gb_g #gbqfb{-webkit-box-shadow:0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 2px rgba(0,0,0,.2)}.gb_y #gbqfb:hover,.gb_g #gbqfb:hover{-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1),0 1px 2px rgba(0,0,0,.2);box-shadow:0 1px 1px rgba(0,0,0,0.1),0 1px 2px rgba(0,0,0,.2)}.gb_y #gbqfb:active,.gb_g #gbqfb:active{-webkit-box-shadow:inset 0 2px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2);box-shadow:inset 0 2px 0 rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.2)}.gbqfb,.gbqfba,.gbqfbb{cursor:default!important;display:inline-block;font-weight:bold;height:29px;line-height:29px;min-width:54px;padding:0 8px;text-align:center;text-decoration:none!important;-webkit-border-radius:2px;border-radius:2px;-webkit-user-select:none}.gbqfba:focus{border:1px solid #4d90fe;outline:none;-webkit-box-shadow:inset 0 0 0 1px rgba(255,255,255,0.5);box-shadow:inset 0 0 0 1px rgba(255,255,255,0.5)}.gbqfba:hover{border-color:#c6c6c6;color:#222!important;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.1);box-shadow:0 1px 1px rgba(0,0,0,0.1);background:#f8f8f8;background:-webkit-linear-gradient(top,#f8f8f8,#f1f1f1);background:linear-gradient(top,#f8f8f8,#f1f1f1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#f8f8f8,endColorstr=#f1f1f1,GradientType=1)}.gbqfba:hover:focus{-webkit-box-shadow:inset 0 0 0 1px #fff,0 1px 1px rgba(0,0,0,0.1);box-shadow:inset 0 0 0 1px #fff,0 1px 1px rgba(0,0,0,0.1)}.gbqfb::-moz-focus-inner{border:0}.gbqfba::-moz-focus-inner{border:0}.gbqfba{border:1px solid #dcdcdc;border-color:rgba(0,0,0,0.1);color:#444!important;font-size:11px;background:#f5f5f5;background:-webkit-linear-gradient(top,#f5f5f5,#f1f1f1);background:linear-gradient(top,#f5f5f5,#f1f1f1);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#f5f5f5,endColorstr=#f1f1f1,GradientType=1)}.gbqfba:active{-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1)}.gb_ig{color:#000;font:13px/27px Arial,sans-serif;left:0;min-width:1117px;position:absolute;top:0;-webkit-user-select:none;width:100%}.gb_If{font:13px/27px Arial,sans-serif;position:relative;height:60px;width:100%}.gb_Aa .gb_If{height:28px}#gba{height:60px}#gba.gb_Aa{height:28px}#gba.gb_jg{height:90px}#gba.gb_kg{height:132px}#gba.gb_jg.gb_Aa{height:58px}.gb_If>.gb_f{height:60px;line-height:58px;vertical-align:middle}.gb_Aa .gb_If>.gb_f{height:28px;line-height:26px}.gb_If::before{background:#e5e5e5;bottom:0;content:'';display:none;height:1px;left:0;position:absolute;right:0}.gb_If{background:#f1f1f1}.gb_lg .gb_If{background:#fff}.gb_lg .gb_If::before,.gb_Aa .gb_If::before{display:none}.gb_y .gb_If,.gb_g .gb_If,.gb_Aa .gb_If{background:transparent}.gb_y .gb_If::before{background:#e1e1e1;background:rgba(0,0,0,.12)}.gb_g .gb_If::before{background:#333;background:rgba(255,255,255,.2)}.gb_f{display:inline-block;-webkit-flex:0 0 auto;flex:0 0 auto;-webkit-flex:0 0 main-size;flex:0 0 main-size}.gb_f.gb_mg{float:right;-webkit-order:1;order:1}.gb_ng{white-space:nowrap}.gb_Ef .gb_ng{display:-webkit-flex;display:flex}.gb_ng,.gb_f{margin-left:0!important;margin-right:0!important}.gb_Vb{background-image:url('https://ssl.gstatic.com/gb/images/v1_051523630.png');-webkit-background-size:92px 2839px;background-size:92px 2839px}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_Vb{background-image:url('https://ssl.gstatic.com/gb/images/v2_abb067380.png')}}.gb_Ja{min-width:255px;padding-left:30px;padding-right:30px;position:relative;text-align:right;z-index:986;-webkit-align-items:center;align-items:center;-webkit-justify-content:flex-end;justify-content:flex-end;-webkit-user-select:none}.gb_Aa .gb_Ja{min-width:0}.gb_Ja.gb_f{-webkit-flex:1 1 auto;flex:1 1 auto;-webkit-flex:1 1 main-size;flex:1 1 main-size}.gb_mc{line-height:normal;position:relative;text-align:left}.gb_mc.gb_f,.gb_ce.gb_f,.gb_Ba.gb_f{-webkit-flex:0 1 auto;flex:0 1 auto;-webkit-flex:0 1 main-size;flex:0 1 main-size}.gb_8f,.gb_9f{display:inline-block;padding:0 0 0 15px;position:relative;vertical-align:middle}.gb_ce{line-height:normal;padding-right:15px}.gb_Ja .gb_ce{padding-right:0}.gb_Ba{color:#404040;line-height:30px;min-width:30px;overflow:hidden;vertical-align:middle;text-overflow:ellipsis}#gb.gb_Aa.gb_Aa .gb_ie,#gb.gb_Aa.gb_Aa .gb_mc>.gb_9f .gb_3f{background:none;border:none;color:#36c;cursor:pointer;filter:none;font-size:11px;line-height:26px;padding:0;-webkit-box-shadow:none;box-shadow:none}#gb.gb_Aa.gb_g .gb_ie,#gb.gb_Aa.gb_g .gb_mc>.gb_9f .gb_3f{color:#fff}.gb_Aa .gb_ie{text-transform:uppercase}.gb_Ja.gb_Ff{padding-left:0;padding-right:29px}.gb_Ja.gb_ag{max-width:400px}.gb_bg{background-clip:content-box;background-origin:content-box;opacity:.27;padding:22px;height:16px;width:16px}.gb_bg.gb_f{display:none}.gb_bg:hover,.gb_bg:focus{opacity:.55}.gb_cg{background-position:0 -1248px}.gb_dg{background-position:-35px -2288px;padding-left:30px;padding-right:14px;position:absolute;right:0;top:0;z-index:990}.gb_Fa:not(.gb_Ha) .gb_dg,.gb_Ff .gb_cg{display:inline-block}.gb_Fa .gb_cg{padding-left:30px;padding-right:0;width:0}.gb_Fa:not(.gb_Ha) .gb_eg{display:none}.gb_Ja.gb_f.gb_Ff,.gb_Ff:not(.gb_Ha) .gb_mc{-webkit-flex:0 0 auto;flex:0 0 auto;-webkit-flex:0 0 main-size;flex:0 0 main-size}.gb_bg,.gb_Ff .gb_ce,.gb_Ha .gb_mc{overflow:hidden}.gb_Fa .gb_ce{padding-right:0}.gb_Ff .gb_mc{padding:1px 1px 1px 0}.gb_Fa .gb_mc{width:75px}.gb_Ja.gb_fg,.gb_Ja.gb_fg .gb_cg,.gb_Ja.gb_fg .gb_cg::before,.gb_Ja.gb_fg .gb_ce,.gb_Ja.gb_fg .gb_mc{-webkit-transition:width .5s ease-in-out,min-width .5s ease-in-out,max-width .5s ease-in-out,padding .5s ease-in-out,left .5s ease-in-out;transition:width .5s ease-in-out,min-width .5s ease-in-out,max-width .5s ease-in-out,padding .5s ease-in-out,left .5s ease-in-out}.gb_Ef .gb_Ja{min-width:0}.gb_Ja.gb_Ka,.gb_Ja.gb_Ka .gb_mc,.gb_Ja.gb_gg,.gb_Ja.gb_gg .gb_mc{min-width:0!important}.gb_Ja.gb_Ka,.gb_Ja.gb_Ka .gb_f{-webkit-flex:0 0 auto!important;-webkit-box-flex:0 0 auto!important;-webkit-flex:0 0 auto!important;flex:0 0 auto!important}.gb_Ja.gb_Ka .gb_Ba{width:30px!important}.gb_hg{margin-right:32px}.gb_xa{display:none}.gb_b .gb_cg::before{clip:rect(1248px 16px 1264px 0);left:22px;top:-1226px}.gb_b .gb_Vb.gb_dg{position:absolute}.gb_b .gb_dg::before{clip:rect(2288px 51px 2304px 35px);left:-5px;top:-2266px}.gb_b .gb_Fa .gb_cg::before{left:30px}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_b .gb_cg::before{clip:rect(2496px 32px 2528px 0)}.gb_b .gb_dg::before{clip:rect(4576px 102px 4608px 70px)}}.gb_b .gb_Vb,.gb_b .gbii,.gb_b .gbip{background-image:none;overflow:hidden;position:relative}.gb_b .gb_Vb::before{content:url('https://ssl.gstatic.com/gb/images/v1_051523630.png');position:absolute}@media (min-resolution:1.25dppx),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gb_b .gb_Vb::before{content:url('https://ssl.gstatic.com/gb/images/v2_abb067380.png');-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;transform-origin:0 0}}.gb_vb a:focus{outline:1px dotted #fff!important}sentinel{}#gbq .gbgt-hvr,#gbq .gbgt:focus{background-color:transparent;background-image:none}.gbqfh#gbq1{display:none}.gbxx{display:none !important}#gbq{line-height:normal;position:relative;top:0px;white-space:nowrap}#gbq{left:0;width:100%}#gbq2{top:0px;z-index:986}#gbq4{display:inline-block;max-height:29px;overflow:hidden;position:relative}.gbqfh#gbq2{z-index:985}.gbqfh#gbq2{margin:0;margin-left:0 !important;padding-top:0;position:relative;top:310px}.gbqfh #gbqf{margin:auto;min-width:534px;padding:0 !important}.gbqfh #gbqfbw{display:none}.gbqfh #gbqfbwa{display:block}.gbqfh #gbqf{max-width:512px;min-width:200px}.gbqfh .gbqfqw{border-right-width:1px}
.gbii::before{content:url(https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s32-c-mo/photo.jpg)}.gbip::before{content:url(https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s96-c-mo/photo.jpg)}@media (min-resolution:1.25dppx),(-o-min-device-pixel-ratio:5/4),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gbii::before{content:url(https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s64-c-mo/photo.jpg)}.gbip::before{content:url(https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s192-c-mo/photo.jpg)}}
.gbii{background-image:url(https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s32-c-mo/photo.jpg)}.gbip{background-image:url(https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s96-c-mo/photo.jpg)}@media (min-resolution:1.25dppx),(-o-min-device-pixel-ratio:5/4),(-webkit-min-device-pixel-ratio:1.25),(min-device-pixel-ratio:1.25){.gbii{background-image:url(https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s64-c-mo/photo.jpg)}.gbip{background-image:url(https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s192-c-mo/photo.jpg)}}
</style><script>(window['gbar']=window['gbar']||{})._CONFIG=[[[0,"www.gstatic.com","og.og.en_US.yklmSyiiaTI.O","co.in","en","331",0,[3,2,"","","3700646","236550449","0"],"40400","gyCCXP7dKMTcjwSehbrIDw",0,0,"og.og.-1cl95pnicybrh.L.W.O","AA2YrTuzTbMcgd7daEkhgfEHzR28cKSEGw","AA2YrTtiYTo1hvh6DlK_OamI9YBrCaDtbw","",2,1,200,"IND",null,null,"18","331",0],null,0,["m;/_/scs/abc-static/_/js/k=gapi.gapi.en.1YQiBIu1zGM.O/rt=j/d=1/rs=AHpOoo8jmooDqnwUNQ5CPVlex635ObQRZg/m=__features__","https://apis.google.com","","1","1","",null,1,"es_plusone_gc_20190224.0_p0","en",null,0],["1","gci_91f30755d6a6b787dcc2a4062e6e9824.js","googleapis.client:plusone:gapi.iframes","0","en"],null,null,null,null,["%1$s (default)","Brand Account",1,"%1$s (delegated)",1,null,96,"https://developers.google.com/recaptcha/docs/v3?authuser=$authuser",null,null,null,1,"https://accounts.google.com/ListAccounts?listPages=0\u0026authuser=0\u0026pid=331\u0026gpsia=1\u0026source=ogb\u0026mo=1\u0026mn=1\u0026hl=en",0,"dashboard",null,null,null,null,"Profile","",1,null,"Signed out","https://accounts.google.com/AccountChooser?source=ogb\u0026continue=$continue\u0026Email=$email","https://accounts.google.com/RemoveLocalAccount?source=ogb\u0026Email=$email","REMOVE","SIGN IN",0,0,1,0,1,0,0,"000770F20338144CEDB9D2FC4BCBC6862E93009B414379B321::1552031875669",null,0,"Session expired",null,0,"https://docs.google.com/picker","Visitor"],[1,1,0,null,"0","16mscit006@gmail.com","","AJPG9d4rk8AtnqI6d5vxj8xcQHfN_6Af_OBK3vXl9gcvpd03oVGgGD5k9flE3mb4ZZW99FXaT66J-F99SfwaaNE0NAcBKs5U7w"],[1,0.001000000047497451,1],[1,0.1000000014901161,2,1],null,null,[0,0,["lg"],0,["lat"]],[["ld","gl","is","id","nb","nw","sd","p","vd","awd","st","lod","eld","ip","dp","cpd","","drt","","","","","bd","","mud","bg",""],[""]],null,null,[1,null,null,"[[[[2,[192]],[2,[1]],[2,[8]],[2,[23]],[2,[36]],[2,[78]],[2,[49]],[2,[24]],[2,[119]],[2,[51]],[2,[31]]],[[2,[25]],[2,[10]],[2,[30]],[2,[53]],[2,[300]],[2,[136]],[2,[265]]]]]",["https","ogs.google.com",0,"/u/0","rt=j\u0026sourceid=331",["/u/0/_/og/customization/get",""],["/u/0/_/og/customization/set",""],["/u/0/_/og/customization/remove",""]],"AJPG9d4rk8AtnqI6d5vxj8xcQHfN_6Af_OBK3vXl9gcvpd03oVGgGD5k9flE3mb4ZZW99FXaT66J-F99SfwaaNE0NAcBKs5U7w"],[30,152,0,750,60],null,null,null,["https","clients5.google.com","","pagead/drt/dn/"],null,[1,0],[["mousedown","touchstart","touchmove","wheel","keydown"],300000],[1,1,0,40400,331,"IND","en","236550449.0",4,0.009999999776482582,1,0,null,null,0,0,"3700646",0,0],[300000,"/u/0","/u/0/_/og/botguard/get","AJPG9d4rk8AtnqI6d5vxj8xcQHfN_6Af_OBK3vXl9gcvpd03oVGgGD5k9flE3mb4ZZW99FXaT66J-F99SfwaaNE0NAcBKs5U7w","https",0,"ogs.google.com","rt=j\u0026sourceid=331","","","",0,0],[""]]];(window['gbar']=window['gbar']||{})._LDD=["bt","base","bn","bu","cp","el","lo","ni","sf","up","dd","aw","iw","if","gi","vi","pi","eq"];this.gbar_=this.gbar_||{};(function(_){var window=this;
try{
var aa,da,ja,ka,la,sa,va,ua,Ga,Ha;aa=function(a){var c=0;return function(){return c<a.length?{done:!1,value:a[c++]}:{done:!0}}};_.ba=function(a){var c="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return c?c.call(a):{next:aa(a)}};_.ca="function"==typeof Object.create?Object.create:function(a){var c=function(){};c.prototype=a;return new c};
if("function"==typeof Object.setPrototypeOf)da=Object.setPrototypeOf;else{var ea;a:{var fa={Ig:!0},ha={};try{ha.__proto__=fa;ea=ha.Ig;break a}catch(a){}ea=!1}da=ea?function(a,c){a.__proto__=c;if(a.__proto__!==c)throw new TypeError("a`"+a);return a}:null}_.ia=da;ja="function"==typeof Object.defineProperties?Object.defineProperty:function(a,c,d){a!=Array.prototype&&a!=Object.prototype&&(a[c]=d.value)};
ka="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this;la=function(a,c){if(c){var d=ka;a=a.split(".");for(var e=0;e<a.length-1;e++){var f=a[e];f in d||(d[f]={});d=d[f]}a=a[a.length-1];e=d[a];c=c(e);c!=e&&null!=c&&ja(d,a,{configurable:!0,writable:!0,value:c})}};
la("String.prototype.startsWith",function(a){return a?a:function(a,d){if(null==this)throw new TypeError("b`startsWith");if(a instanceof RegExp)throw new TypeError("c`startsWith");var c=this.length,f=a.length;d=Math.max(0,Math.min(d|0,this.length));for(var g=0;g<f&&d<c;)if(this[d++]!=a[g++])return!1;return g>=f}});var ma=function(){ma=function(){};ka.Symbol||(ka.Symbol=na)},oa=function(a,c){this.b=a;ja(this,"description",{configurable:!0,writable:!0,value:c})};oa.prototype.toString=function(){return this.b};
var na=function(){function a(d){if(this instanceof a)throw new TypeError("d");return new oa("jscomp_symbol_"+(d||"")+"_"+c++,d)}var c=0;return a}(),qa=function(){ma();var a=ka.Symbol.iterator;a||(a=ka.Symbol.iterator=ka.Symbol("Symbol.iterator"));"function"!=typeof Array.prototype[a]&&ja(Array.prototype,a,{configurable:!0,writable:!0,value:function(){return pa(aa(this))}});qa=function(){}},pa=function(a){qa();a={next:a};a[ka.Symbol.iterator]=function(){return this};return a},ra=function(a,c){return Object.prototype.hasOwnProperty.call(a,
c)};
la("WeakMap",function(a){function c(){}function d(a){ra(a,f)||ja(a,f,{value:new c})}function e(a){var e=Object[a];e&&(Object[a]=function(a){if(a instanceof c)return a;d(a);return e(a)})}if(function(){if(!a||!Object.seal)return!1;try{var c=Object.seal({}),d=Object.seal({}),e=new a([[c,2],[d,3]]);if(2!=e.get(c)||3!=e.get(d))return!1;e["delete"](c);e.set(d,4);return!e.has(c)&&4==e.get(d)}catch(z){return!1}}())return a;var f="$jscomp_hidden_"+Math.random();e("freeze");e("preventExtensions");e("seal");var g=
0,h=function(a){this.ea=(g+=Math.random()+1).toString();if(a){a=_.ba(a);for(var c;!(c=a.next()).done;)c=c.value,this.set(c[0],c[1])}};h.prototype.set=function(a,c){d(a);if(!ra(a,f))throw Error("e`"+a);a[f][this.ea]=c;return this};h.prototype.get=function(a){return ra(a,f)?a[f][this.ea]:void 0};h.prototype.has=function(a){return ra(a,f)&&ra(a[f],this.ea)};h.prototype["delete"]=function(a){return ra(a,f)&&ra(a[f],this.ea)?delete a[f][this.ea]:!1};return h});
la("Map",function(a){if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var c=Object.seal({x:4}),d=new a(_.ba([[c,"s"]]));if("s"!=d.get(c)||1!=d.size||d.get({x:4})||d.set({x:4},"t")!=d||2!=d.size)return!1;var e=d.entries(),f=e.next();if(f.done||f.value[0]!=c||"s"!=f.value[1])return!1;f=e.next();return f.done||4!=f.value[0].x||"t"!=f.value[1]||!e.next().done?!1:!0}catch(D){return!1}}())return a;qa();var c=new WeakMap,d=function(a){this.o={};
this.b=g();this.size=0;if(a){a=_.ba(a);for(var c;!(c=a.next()).done;)c=c.value,this.set(c[0],c[1])}};d.prototype.set=function(a,c){a=0===a?0:a;var d=e(this,a);d.list||(d.list=this.o[d.id]=[]);d.Ra?d.Ra.value=c:(d.Ra={next:this.b,Hb:this.b.Hb,head:this.b,key:a,value:c},d.list.push(d.Ra),this.b.Hb.next=d.Ra,this.b.Hb=d.Ra,this.size++);return this};d.prototype["delete"]=function(a){a=e(this,a);return a.Ra&&a.list?(a.list.splice(a.index,1),a.list.length||delete this.o[a.id],a.Ra.Hb.next=a.Ra.next,a.Ra.next.Hb=
a.Ra.Hb,a.Ra.head=null,this.size--,!0):!1};d.prototype.clear=function(){this.o={};this.b=this.b.Hb=g();this.size=0};d.prototype.has=function(a){return!!e(this,a).Ra};d.prototype.get=function(a){return(a=e(this,a).Ra)&&a.value};d.prototype.entries=function(){return f(this,function(a){return[a.key,a.value]})};d.prototype.keys=function(){return f(this,function(a){return a.key})};d.prototype.values=function(){return f(this,function(a){return a.value})};d.prototype.forEach=function(a,c){for(var d=this.entries(),
e;!(e=d.next()).done;)e=e.value,a.call(c,e[1],e[0],this)};d.prototype[Symbol.iterator]=d.prototype.entries;var e=function(a,d){var e=d&&typeof d;"object"==e||"function"==e?c.has(d)?e=c.get(d):(e=""+ ++h,c.set(d,e)):e="p_"+d;var f=a.o[e];if(f&&ra(a.o,e))for(a=0;a<f.length;a++){var g=f[a];if(d!==d&&g.key!==g.key||d===g.key)return{id:e,list:f,index:a,Ra:g}}return{id:e,list:f,index:-1,Ra:void 0}},f=function(a,c){var d=a.b;return pa(function(){if(d){for(;d.head!=a.b;)d=d.Hb;for(;d.next!=d.head;)return d=
d.next,{done:!1,value:c(d)};d=null}return{done:!0,value:void 0}})},g=function(){var a={};return a.Hb=a.next=a.head=a},h=0;return d});
la("Set",function(a){if(function(){if(!a||"function"!=typeof a||!a.prototype.entries||"function"!=typeof Object.seal)return!1;try{var c=Object.seal({x:4}),e=new a(_.ba([c]));if(!e.has(c)||1!=e.size||e.add(c)!=e||1!=e.size||e.add({x:4})!=e||2!=e.size)return!1;var f=e.entries(),g=f.next();if(g.done||g.value[0]!=c||g.value[1]!=c)return!1;g=f.next();return g.done||g.value[0]==c||4!=g.value[0].x||g.value[1]!=g.value[0]?!1:f.next().done}catch(h){return!1}}())return a;qa();var c=function(a){this.b=new Map;
if(a){a=_.ba(a);for(var c;!(c=a.next()).done;)this.add(c.value)}this.size=this.b.size};c.prototype.add=function(a){a=0===a?0:a;this.b.set(a,a);this.size=this.b.size;return this};c.prototype["delete"]=function(a){a=this.b["delete"](a);this.size=this.b.size;return a};c.prototype.clear=function(){this.b.clear();this.size=0};c.prototype.has=function(a){return this.b.has(a)};c.prototype.entries=function(){return this.b.entries()};c.prototype.values=function(){return this.b.values()};c.prototype.keys=c.prototype.values;
c.prototype[Symbol.iterator]=c.prototype.values;c.prototype.forEach=function(a,c){var d=this;this.b.forEach(function(e){return a.call(c,e,e,d)})};return c});la("Math.log10",function(a){return a?a:function(a){return Math.log(a)/Math.LN10}});la("Object.entries",function(a){return a?a:function(a){var c=[],e;for(e in a)ra(a,e)&&c.push([e,a[e]]);return c}});
la("Array.from",function(a){return a?a:function(a,d,e){d=null!=d?d:function(a){return a};var c=[],g="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];if("function"==typeof g){a=g.call(a);for(var h=0;!(g=a.next()).done;)c.push(d.call(e,g.value,h++))}else for(g=a.length,h=0;h<g;h++)c.push(d.call(e,a[h],h));return c}});sa=sa||{};_.m=this;_.n=function(a){return void 0!==a};_.p=function(a){return"string"==typeof a};_.ta=function(a){return"number"==typeof a};
_.wa=function(){if(null===ua)a:{var a=_.m.document;if((a=a.querySelector&&a.querySelector("script[nonce]"))&&(a=a.nonce||a.getAttribute("nonce"))&&va.test(a)){ua=a;break a}ua=""}return ua};va=/^[\w+/_-]+[=]{0,2}$/;ua=null;_.t=function(a,c){a=a.split(".");c=c||_.m;for(var d=0;d<a.length;d++)if(c=c[a[d]],null==c)return null;return c};_.xa=function(){};_.ya=function(a){a.qe=void 0;a.W=function(){return a.qe?a.qe:a.qe=new a}};
_.za=function(a){var c=typeof a;if("object"==c)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return c;var d=Object.prototype.toString.call(a);if("[object Window]"==d)return"object";if("[object Array]"==d||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==d||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==c&&"undefined"==typeof a.call)return"object";return c};_.Aa=function(a){return"array"==_.za(a)};_.Ba=function(a){var c=_.za(a);return"array"==c||"object"==c&&"number"==typeof a.length};_.Ca=function(a){return"function"==_.za(a)};_.Ea=function(a){var c=typeof a;return"object"==c&&null!=a||"function"==c};_.Fa="closure_uid_"+(1E9*Math.random()>>>0);Ga=function(a,c,d){return a.call.apply(a.bind,arguments)};
Ha=function(a,c,d){if(!a)throw Error();if(2<arguments.length){var e=Array.prototype.slice.call(arguments,2);return function(){var d=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(d,e);return a.apply(c,d)}}return function(){return a.apply(c,arguments)}};_.u=function(a,c,d){Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?_.u=Ga:_.u=Ha;return _.u.apply(null,arguments)};
_.Ia=function(a,c){var d=Array.prototype.slice.call(arguments,1);return function(){var c=d.slice();c.push.apply(c,arguments);return a.apply(this,c)}};_.v=Date.now||function(){return+new Date};_.w=function(a,c){a=a.split(".");var d=_.m;a[0]in d||"undefined"==typeof d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)!a.length&&_.n(c)?d[e]=c:d[e]&&d[e]!==Object.prototype[e]?d=d[e]:d=d[e]={}};
_.x=function(a,c){function d(){}d.prototype=c.prototype;a.J=c.prototype;a.prototype=new d;a.prototype.constructor=a;a.Nk=function(a,d,g){for(var e=Array(arguments.length-2),f=2;f<arguments.length;f++)e[f-2]=arguments[f];return c.prototype[d].apply(a,e)}};
_.Ja=function(a){if(Error.captureStackTrace)Error.captureStackTrace(this,_.Ja);else{var c=Error().stack;c&&(this.stack=c)}a&&(this.message=String(a))};_.x(_.Ja,Error);_.Ja.prototype.name="CustomError";var Ka;var Sa;_.La=Array.prototype.indexOf?function(a,c){return Array.prototype.indexOf.call(a,c,void 0)}:function(a,c){if(_.p(a))return _.p(c)&&1==c.length?a.indexOf(c,0):-1;for(var d=0;d<a.length;d++)if(d in a&&a[d]===c)return d;return-1};_.Ma=Array.prototype.forEach?function(a,c,d){Array.prototype.forEach.call(a,c,d)}:function(a,c,d){for(var e=a.length,f=_.p(a)?a.split(""):a,g=0;g<e;g++)g in f&&c.call(d,f[g],g,a)};
_.Na=Array.prototype.filter?function(a,c,d){return Array.prototype.filter.call(a,c,d)}:function(a,c,d){for(var e=a.length,f=[],g=0,h=_.p(a)?a.split(""):a,l=0;l<e;l++)if(l in h){var q=h[l];c.call(d,q,l,a)&&(f[g++]=q)}return f};_.Oa=Array.prototype.map?function(a,c,d){return Array.prototype.map.call(a,c,d)}:function(a,c,d){for(var e=a.length,f=Array(e),g=_.p(a)?a.split(""):a,h=0;h<e;h++)h in g&&(f[h]=c.call(d,g[h],h,a));return f};
_.Pa=Array.prototype.reduce?function(a,c,d){return Array.prototype.reduce.call(a,c,d)}:function(a,c,d){var e=d;(0,_.Ma)(a,function(d,g){e=c.call(void 0,e,d,g,a)});return e};_.Qa=Array.prototype.some?function(a,c){return Array.prototype.some.call(a,c,void 0)}:function(a,c){for(var d=a.length,e=_.p(a)?a.split(""):a,f=0;f<d;f++)if(f in e&&c.call(void 0,e[f],f,a))return!0;return!1};
Sa=function(a){a:{var c=Ra;for(var d=a.length,e=_.p(a)?a.split(""):a,f=0;f<d;f++)if(f in e&&c.call(void 0,e[f],f,a)){c=f;break a}c=-1}return 0>c?null:_.p(a)?a.charAt(c):a[c]};_.Ta=function(a,c){c=(0,_.La)(a,c);var d;(d=0<=c)&&Array.prototype.splice.call(a,c,1);return d};_.Ua=function(a){var c=a.length;if(0<c){for(var d=Array(c),e=0;e<c;e++)d[e]=a[e];return d}return[]};_.Va=function(a,c,d){return 2>=arguments.length?Array.prototype.slice.call(a,c):Array.prototype.slice.call(a,c,d)};
var Za,$a,ab,bb,cb,db,eb,gb;_.Wa=function(a,c){return 0==a.lastIndexOf(c,0)};_.Xa=function(a){return/^[\s\xa0]*$/.test(a)};_.Ya=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};
_.fb=function(a,c){if(c)a=a.replace(Za,"&amp;").replace($a,"&lt;").replace(ab,"&gt;").replace(bb,"&quot;").replace(cb,"&#39;").replace(db,"&#0;");else{if(!eb.test(a))return a;-1!=a.indexOf("&")&&(a=a.replace(Za,"&amp;"));-1!=a.indexOf("<")&&(a=a.replace($a,"&lt;"));-1!=a.indexOf(">")&&(a=a.replace(ab,"&gt;"));-1!=a.indexOf('"')&&(a=a.replace(bb,"&quot;"));-1!=a.indexOf("'")&&(a=a.replace(cb,"&#39;"));-1!=a.indexOf("\x00")&&(a=a.replace(db,"&#0;"))}return a};Za=/&/g;$a=/</g;ab=/>/g;bb=/"/g;cb=/'/g;
db=/\x00/g;eb=/[\x00&<>"']/;_.hb=function(a,c){var d=0;a=(0,_.Ya)(String(a)).split(".");c=(0,_.Ya)(String(c)).split(".");for(var e=Math.max(a.length,c.length),f=0;0==d&&f<e;f++){var g=a[f]||"",h=c[f]||"";do{g=/(\d*)(\D*)(.*)/.exec(g)||["","","",""];h=/(\d*)(\D*)(.*)/.exec(h)||["","","",""];if(0==g[0].length&&0==h[0].length)break;d=gb(0==g[1].length?0:parseInt(g[1],10),0==h[1].length?0:parseInt(h[1],10))||gb(0==g[2].length,0==h[2].length)||gb(g[2],h[2]);g=g[3];h=h[3]}while(0==d)}return d}; gb=function(a,c){return a<c?-1:a>c?1:0};
_.ib=function(a){return encodeURIComponent(String(a))};_.jb=function(a){return a=_.fb(a,void 0)};a:{var lb=_.m.navigator;if(lb){var mb=lb.userAgent;if(mb){_.kb=mb;break a}}_.kb=""}_.y=function(a){return-1!=_.kb.indexOf(a)};var ob,qb,rb,sb;_.nb=function(a,c,d){for(var e in a)c.call(d,a[e],e,a)};ob=function(a,c){for(var d in a)if(c.call(void 0,a[d],d,a))return!0;return!1};_.pb=function(a){var c=[],d=0,e;for(e in a)c[d++]=a[e];return c};qb=function(a){var c=[],d=0,e;for(e in a)c[d++]=e;return c};rb=function(a,c){return null!==a&&c in a};sb="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" "); _.tb=function(a,c){for(var d,e,f=1;f<arguments.length;f++){e=arguments[f];for(d in e)a[d]=e[d];for(var g=0;g<sb.length;g++)d=sb[g],Object.prototype.hasOwnProperty.call(e,d)&&(a[d]=e[d])}};
var xb;_.ub=function(){return _.y("Trident")||_.y("MSIE")};_.vb=function(){return _.y("Firefox")||_.y("FxiOS")};_.yb=function(){return _.y("Safari")&&!(xb()||_.y("Coast")||_.y("Opera")||_.y("Edge")||_.vb()||_.y("Silk")||_.y("Android"))};xb=function(){return(_.y("Chrome")||_.y("CriOS"))&&!_.y("Edge")};
var zb;zb=function(){return _.y("iPhone")&&!_.y("iPod")&&!_.y("iPad")};_.Ab=function(){return zb()||_.y("iPad")||_.y("iPod")};var Eb;_.Bb=function(a){_.Bb[" "](a);return a};_.Bb[" "]=_.xa;_.Cb=function(a,c){try{return _.Bb(a[c]),!0}catch(d){}return!1};Eb=function(a,c){var d=Db;return Object.prototype.hasOwnProperty.call(d,a)?d[a]:d[a]=c(a)};var Mb,Vb,Wb,Db,dc;_.Fb=_.y("Opera");_.A=_.ub();_.Gb=_.y("Edge");_.Hb=_.Gb||_.A;_.Ib=_.y("Gecko")&&!(-1!=_.kb.toLowerCase().indexOf("webkit")&&!_.y("Edge"))&&!(_.y("Trident")||_.y("MSIE"))&&!_.y("Edge");_.Jb=-1!=_.kb.toLowerCase().indexOf("webkit")&&!_.y("Edge");Mb=_.m.navigator||null;_.Lb=Mb&&Mb.platform||"";_.Nb=_.y("Macintosh");_.Ob=_.y("Windows");_.Pb=_.y("Linux")||_.y("CrOS");_.Qb=_.y("Android");_.Rb=zb();_.Sb=_.y("iPad");_.Tb=_.y("iPod");_.Ub=_.Ab();
Vb=function(){var a=_.m.document;return a?a.documentMode:void 0};a:{var Xb="",Yb=function(){var a=_.kb;if(_.Ib)return/rv:([^\);]+)(\)|;)/.exec(a);if(_.Gb)return/Edge\/([\d\.]+)/.exec(a);if(_.A)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(_.Jb)return/WebKit\/(\S+)/.exec(a);if(_.Fb)return/(?:Version)[ \/]?(\S+)/.exec(a)}();Yb&&(Xb=Yb?Yb[1]:"");if(_.A){var Zb=Vb();if(null!=Zb&&Zb>parseFloat(Xb)){Wb=String(Zb);break a}}Wb=Xb}_.$b=Wb;Db={}; _.ac=function(a){return Eb(a,function(){return 0<=_.hb(_.$b,a)})};_.cc=function(a){return Number(bc)>=a};var ec=_.m.document;dc=ec&&_.A?Vb()||("CSS1Compat"==ec.compatMode?parseInt(_.$b,10):5):void 0;var bc=dc;
_.fc=_.vb();_.gc=zb()||_.y("iPod");_.hc=_.y("iPad");_.ic=_.y("Android")&&!(xb()||_.vb()||_.y("Opera")||_.y("Silk"));_.jc=xb();_.kc=_.yb()&&!_.Ab();var lc=null;_.mc=function(a){this.b=0;this.o=a};_.mc.prototype.next=function(){return this.b<this.o.length?{done:!1,value:this.o[this.b++]}:{done:!0,value:void 0}};"undefined"!=typeof Symbol&&(_.mc.prototype[Symbol.iterator]=function(){return this});var nc,oc,pc,xc,zc,Ac;_.B=function(){};nc="function"==typeof Uint8Array;
_.C=function(a,c,d,e,f,g){a.b=null;c||(c=d?[d]:[]);a.fa=d?String(d):void 0;a.B=0===d?-1:0;a.w=c;a:{d=a.w.length;c=-1;if(d&&(c=d-1,d=a.w[c],!(null===d||"object"!=typeof d||_.Aa(d)||nc&&d instanceof Uint8Array))){a.C=c-a.B;a.A=d;break a}-1<e?(a.C=Math.max(e,c+1-a.B),a.A=null):a.C=Number.MAX_VALUE}a.G={};if(f)for(e=0;e<f.length;e++)c=f[e],c<a.C?(c+=a.B,a.w[c]=a.w[c]||oc):(pc(a),a.A[c]=a.A[c]||oc);if(g&&g.length)for(e=0;e<g.length;e++)_.qc(a,g[e])};oc=[];
pc=function(a){var c=a.C+a.B;a.w[c]||(a.A=a.w[c]={})};_.E=function(a,c){if(c<a.C){c+=a.B;var d=a.w[c];return d===oc?a.w[c]=[]:d}if(a.A)return d=a.A[c],d===oc?a.A[c]=[]:d};_.F=function(a,c){a=_.E(a,c);return null==a?a:!!a};_.G=function(a,c,d){a=_.E(a,c);return null==a?d:a};_.rc=function(a,c,d){a=_.F(a,c);return null==a?d:a};_.sc=function(a,c,d){a=_.E(a,c);a=null==a?a:+a;return null==a?d:a};_.H=function(a,c,d){c<a.C?a.w[c+a.B]=d:(pc(a),a.A[c]=d)};
_.qc=function(a,c){for(var d,e,f=0;f<c.length;f++){var g=c[f],h=_.E(a,g);null!=h&&(d=g,e=h,_.H(a,g,void 0))}return d?(_.H(a,d,e),d):0};_.I=function(a,c,d){a.b||(a.b={});if(!a.b[d]){var e=_.E(a,d);e&&(a.b[d]=new c(e))}return a.b[d]};_.uc=function(a,c,d){_.tc(a,c,d);c=a.b[d];c==oc&&(c=a.b[d]=[]);return c};_.tc=function(a,c,d){a.b||(a.b={});if(!a.b[d]){for(var e=_.E(a,d),f=[],g=0;g<e.length;g++)f[g]=new c(e[g]);a.b[d]=f}};_.vc=function(a,c,d){a.b||(a.b={});var e=d?d.Oa():d;a.b[c]=d;_.H(a,c,e)};
_.wc=function(a,c,d){a.b||(a.b={});d=d||[];for(var e=[],f=0;f<d.length;f++)e[f]=d[f].Oa();a.b[c]=d;_.H(a,c,e)};xc=function(a){if(a.b)for(var c in a.b){var d=a.b[c];if(_.Aa(d))for(var e=0;e<d.length;e++)d[e]&&d[e].Oa();else d&&d.Oa()}};_.B.prototype.Oa=function(){xc(this);return this.w};
_.B.prototype.o=nc?function(){var a=Uint8Array.prototype.toJSON;Uint8Array.prototype.toJSON=function(){if(!lc){lc={};for(var a=0;65>a;a++)lc[a]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(a)}a=lc;for(var d=[],e=0;e<this.length;e+=3){var f=this[e],g=e+1<this.length,h=g?this[e+1]:0,l=e+2<this.length,q=l?this[e+2]:0,r=f>>2;f=(f&3)<<4|h>>4;h=(h&15)<<2|q>>6;q&=63;l||(q=64,g||(h=64));d.push(a[r],a[f],a[h],a[q])}return d.join("")};try{return JSON.stringify(this.w&&this.Oa(),
yc)}finally{Uint8Array.prototype.toJSON=a}}:function(){return JSON.stringify(this.w&&this.Oa(),yc)};var yc=function(a,c){return _.ta(c)&&(isNaN(c)||Infinity===c||-Infinity===c)?String(c):c};_.B.prototype.toString=function(){xc(this);return this.w.toString()};_.B.prototype.clone=function(){return zc(this)};zc=function(a){return new a.constructor(Ac(a.Oa()))};
Ac=function(a){if(_.Aa(a)){for(var c=Array(a.length),d=0;d<a.length;d++){var e=a[d];null!=e&&(c[d]="object"==typeof e?Ac(e):e)}return c}if(nc&&a instanceof Uint8Array)return new Uint8Array(a);c={};for(d in a)e=a[d],null!=e&&(c[d]="object"==typeof e?Ac(e):e);return c};_.Cc=function(a,c){_.Bc[a]=c;c.Uk=a};_.Bc={};
_.Dc=function(a){_.C(this,a,0,-1,null,null)};_.x(_.Dc,_.B);var Ec=function(a){_.C(this,a,0,-1,null,null)};_.x(Ec,_.B);_.J=function(a,c){return null!=a?!!a:!!c};_.K=function(a,c){void 0==c&&(c="");return null!=a?a:c};_.L=function(a,c){void 0==c&&(c=0);return null!=a?a:c};_.Fc=function(){this.data={}};_.Fc.prototype.b=function(){window.console&&window.console.log&&window.console.log("Log data: ",this.data)};_.Fc.prototype.o=function(a){var c=[],d;for(d in this.data)c.push(encodeURIComponent(d)+"="+encodeURIComponent(String(this.data[d])));return("atyp=i&zx="+(new Date).getTime()+"&"+c.join("&")).substr(0,a)};
_.Gc=function(a,c){this.data={};var d=_.I(a,_.Dc,8)||new _.Dc;this.data.ei=window.google&&window.google.kEI?window.google.kEI:_.K(_.E(a,10));this.data.ogf=_.K(_.E(d,3));var e=window.google&&window.google.sn?/.*hp$/.test(window.google.sn)?!1:!0:_.J(_.F(a,7));this.data.ogrp=e?"1":"";this.data.ogv=_.K(_.E(d,6))+"."+_.K(_.E(d,7));this.data.ogd=_.K(_.E(a,21));this.data.ogc=_.K(_.E(a,20));this.data.ogl=_.K(_.E(a,5));c&&(this.data.oggv=c)};_.x(_.Gc,_.Fc);
var Oc;_.Hc=function(){this.b={};this.o={}};_.ya(_.Hc);_.Jc=function(a,c){a.W=function(){return _.Ic(_.Hc.W(),c)};a.Fj=function(){return _.Hc.W().b[c]||null}};_.Kc=function(a){return _.Ic(_.Hc.W(),a)};_.Mc=function(a,c){var d=_.Hc.W();if(a in d.b){if(d.b[a]!=c)throw new Lc(a);}else{d.b[a]=c;if(c=d.o[a])for(var e=0,f=c.length;e<f;e++)c[e].b(d.b,a);delete d.o[a]}};_.Ic=function(a,c){if(c in a.b)return a.b[c];throw new Nc(c);};Oc=function(a){_.Ja.call(this);this.ea=a};_.x(Oc,_.Ja); var Lc=function(a){Oc.call(this,a)};_.x(Lc,Oc);var Nc=function(a){Oc.call(this,a)};_.x(Nc,Oc);
var Qc,Rc,Sc;_.Pc=function(a){return a};Qc=function(a){var c=c||0;return function(){return a.apply(this,Array.prototype.slice.call(arguments,0,c))}};Rc=function(a){var c=arguments,d=c.length;return function(){for(var a=0;a<d;a++)if(c[a].apply(this,arguments))return!0;return!1}};Sc=function(a){return function(){return!a.apply(this,arguments)}};
_.M=function(){this.fa=this.fa;this.Pa=this.Pa};_.M.prototype.fa=!1;_.M.prototype.ia=function(){this.fa||(this.fa=!0,this.R())};_.Uc=function(a,c){c=_.Ia(_.Tc,c);a.fa?_.n(void 0)?c.call(void 0):c():(a.Pa||(a.Pa=[]),a.Pa.push(_.n(void 0)?(0,_.u)(c,void 0):c))};_.M.prototype.R=function(){if(this.Pa)for(;this.Pa.length;)this.Pa.shift()()};_.Tc=function(a){a&&"function"==typeof a.ia&&a.ia()};
var Vc,Wc;Vc=!_.A||_.cc(9);Wc=!_.Ib&&!_.A||_.A&&_.cc(9)||_.Ib&&_.ac("1.9.1");_.Xc=_.A&&!_.ac("9");_.Yc=_.A||_.Fb||_.Jb;var $c;_.ad=function(a,c){this.b=a===_.Zc&&c||"";this.o=$c};_.ad.prototype.zb=!0;_.ad.prototype.fb=function(){return this.b};_.ad.prototype.toString=function(){return"Const{"+this.b+"}"};_.bd=function(a){return a instanceof _.ad&&a.constructor===_.ad&&a.o===$c?a.b:"type_error:Const"};$c={};_.Zc={};
_.dd=function(){this.b="";this.o=_.cd};_.dd.prototype.zb=!0;_.cd={};_.dd.prototype.fb=function(){return this.b};_.ed=function(a){var c=new _.dd;c.b=a;return c};_.ed("");var fd;_.gd=function(){this.o="";this.w=fd};_.gd.prototype.zb=!0;_.gd.prototype.fb=function(){return this.o};_.gd.prototype.oe=!0;_.gd.prototype.b=function(){return 1};_.hd=function(a){if(a instanceof _.gd&&a.constructor===_.gd&&a.w===fd)return a.o;_.za(a);return"type_error:TrustedResourceUrl"};fd={};_.id=function(a){var c=new _.gd;c.o=a;return c};
var jd;_.kd=function(){this.o="";this.w=jd};_.kd.prototype.zb=!0;_.kd.prototype.fb=function(){return this.o};_.kd.prototype.oe=!0;_.kd.prototype.b=function(){return 1};_.md=function(a){if(a instanceof _.kd&&a.constructor===_.kd&&a.w===jd)return a.o;_.za(a);return"type_error:SafeUrl"};_.nd=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;_.pd=function(a){if(a instanceof _.kd)return a;a="object"==typeof a&&a.zb?a.fb():String(a);_.nd.test(a)||(a="about:invalid#zClosurez");return _.od(a)};jd={}; _.od=function(a){var c=new _.kd;c.o=a;return c};_.od("about:blank");
_.rd=function(){this.b="";this.o=_.qd};_.rd.prototype.zb=!0;_.qd={};_.rd.prototype.fb=function(){return this.b};_.sd=function(a){var c=new _.rd;c.b=a;return c};_.td=_.sd("");var ud;_.vd=function(){this.o="";this.A=ud;this.w=null};_.vd.prototype.oe=!0;_.vd.prototype.b=function(){return this.w};_.vd.prototype.zb=!0;_.vd.prototype.fb=function(){return this.o};_.wd=function(a){if(a instanceof _.vd&&a.constructor===_.vd&&a.A===ud)return a.o;_.za(a);return"type_error:SafeHtml"};ud={};_.xd=function(a,c){var d=new _.vd;d.o=a;d.w=c;return d};_.xd("<!DOCTYPE html>",0);_.yd=_.xd("",0);_.zd=_.xd("<br>",0);
var Ad;Ad=function(a){var c=!1,d;return function(){c||(d=a(),c=!0);return d}}(function(){var a=document.createElement("div");a.innerHTML="<div><div></div></div>";var c=a.firstChild.firstChild;a.innerHTML="";return!c.parentElement});_.Bd=function(a,c){c=_.wd(c);if(Ad())for(;a.lastChild;)a.removeChild(a.lastChild);a.innerHTML=c};_.Cd=function(a,c){a.src=_.hd(c);(c=_.wa())&&a.setAttribute("nonce",c)};
var Dd=function(a,c){return a+Math.random()*(c-a)};var Jd,Nd,Pd;_.Gd=function(a){return a?new _.Ed(_.Fd(a)):Ka||(Ka=new _.Ed)};_.Hd=function(a,c){return(c||document).getElementsByTagName(String(a))};
_.Id=function(a,c,d,e){a=e||a;var f=c&&"*"!=c?String(c).toUpperCase():"";if(a.querySelectorAll&&a.querySelector&&(f||d))return a.querySelectorAll(f+(d?"."+d:""));if(d&&a.getElementsByClassName){c=a.getElementsByClassName(d);if(f){a={};for(var g=e=0,h;h=c[g];g++)f==h.nodeName&&(a[e++]=h);a.length=e;return a}return c}c=a.getElementsByTagName(f||"*");if(d){a={};for(g=e=0;h=c[g];g++){f=h.className;var l;if(l="function"==typeof f.split)l=0<=(0,_.La)(f.split(/\s+/),d);l&&(a[e++]=h)}a.length=e;return a}return c};
_.Kd=function(a,c){_.nb(c,function(c,e){c&&"object"==typeof c&&c.zb&&(c=c.fb());"style"==e?a.style.cssText=c:"class"==e?a.className=c:"for"==e?a.htmlFor=c:Jd.hasOwnProperty(e)?a.setAttribute(Jd[e],c):_.Wa(e,"aria-")||_.Wa(e,"data-")?a.setAttribute(e,c):a[e]=c})};Jd={cellpadding:"cellPadding",cellspacing:"cellSpacing",colspan:"colSpan",frameborder:"frameBorder",height:"height",maxlength:"maxLength",nonce:"nonce",role:"role",rowspan:"rowSpan",type:"type",usemap:"useMap",valign:"vAlign",width:"width"};
_.Md=function(a){return a?a.parentWindow||a.defaultView:window};_.N=function(a,c,d){return Nd(document,arguments)};Nd=function(a,c){var d=String(c[0]),e=c[1];if(!Vc&&e&&(e.name||e.type)){d=["<",d];e.name&&d.push(' name="',_.jb(e.name),'"');if(e.type){d.push(' type="',_.jb(e.type),'"');var f={};_.tb(f,e);delete f.type;e=f}d.push(">");d=d.join("")}d=a.createElement(d);e&&(_.p(e)?d.className=e:_.Aa(e)?d.className=e.join(" "):_.Kd(d,e));2<c.length&&_.Od(a,d,c,2);return d};
_.Od=function(a,c,d,e){function f(d){d&&c.appendChild(_.p(d)?a.createTextNode(d):d)}for(;e<d.length;e++){var g=d[e];!_.Ba(g)||_.Ea(g)&&0<g.nodeType?f(g):(0,_.Ma)(Pd(g)?_.Ua(g):g,f)}};_.Qd=function(a){return document.createElement(String(a))};_.Rd=function(a){for(var c;c=a.firstChild;)a.removeChild(c)};_.Sd=function(a){return a&&a.parentNode?a.parentNode.removeChild(a):null};_.Td=function(a){return Wc&&void 0!=a.children?a.children:(0,_.Na)(a.childNodes,function(a){return 1==a.nodeType})};
_.Ud=function(a,c){if(!a||!c)return!1;if(a.contains&&1==c.nodeType)return a==c||a.contains(c);if("undefined"!=typeof a.compareDocumentPosition)return a==c||!!(a.compareDocumentPosition(c)&16);for(;c&&a!=c;)c=c.parentNode;return c==a};_.Fd=function(a){return 9==a.nodeType?a:a.ownerDocument||a.document};
_.Vd=function(a,c){if("textContent"in a)a.textContent=c;else if(3==a.nodeType)a.data=String(c);else if(a.firstChild&&3==a.firstChild.nodeType){for(;a.lastChild!=a.firstChild;)a.removeChild(a.lastChild);a.firstChild.data=String(c)}else _.Rd(a),a.appendChild(_.Fd(a).createTextNode(String(c)))};Pd=function(a){if(a&&"number"==typeof a.length){if(_.Ea(a))return"function"==typeof a.item||"string"==typeof a.item;if(_.Ca(a))return"function"==typeof a.item}return!1};
_.Ed=function(a){this.b=a||_.m.document||document};_.k=_.Ed.prototype;_.k.M=function(a){return _.p(a)?this.b.getElementById(a):a};_.k.ja=function(a,c,d){return Nd(this.b,arguments)};_.k.createElement=function(a){return this.b.createElement(String(a))};_.k.Lc=function(a,c){a.appendChild(c)};_.k.wf=_.Rd;_.k.Mc=_.Sd;_.k.lh=_.Td;_.k.kh=_.Ud;
var Xd=function(a){_.C(this,a,0,-1,Wd,null)};_.x(Xd,_.B);var Wd=[1,2,3,4];var Yd=function(a){if(!a)return"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var c=a.substring(a.indexOf("://")+3),d=c.indexOf("/");-1!=d&&(c=c.substring(0,d));a=a.substring(0,a.indexOf("://"));if("http"!==a&&"https"!==a&&"chrome-extension"!==a&&"file"!==a&&"android-app"!==a&&"chrome-search"!==a&&"app"!==a)throw Error("p`"+a);d="";var e=c.indexOf(":");if(-1!=e){var f=c.substring(e+1);c=c.substring(0, e);if("http"===a&&"80"!==f||"https"===a&&"443"!==f)d=":"+f}return a+"://"+c+d};
var Zd=function(){function a(){f[0]=1732584193;f[1]=4023233417;f[2]=2562383102;f[3]=271733878;f[4]=3285377520;z=r=0}function c(a){for(var c=h,d=0;64>d;d+=4)c[d/4]=a[d]<<24|a[d+1]<<16|a[d+2]<<8|a[d+3];for(d=16;80>d;d++)a=c[d-3]^c[d-8]^c[d-14]^c[d-16],c[d]=(a<<1|a>>>31)&4294967295;a=f[0];var e=f[1],g=f[2],l=f[3],q=f[4];for(d=0;80>d;d++){if(40>d)if(20>d){var r=l^e&(g^l);var D=1518500249}else r=e^g^l,D=1859775393;else 60>d?(r=e&g|l&(e|g),D=2400959708):(r=e^g^l,D=3395469782);r=((a<<5|a>>>27)&4294967295)+
r+q+D+c[d]&4294967295;q=l;l=g;g=(e<<30|e>>>2)&4294967295;e=a;a=r}f[0]=f[0]+a&4294967295;f[1]=f[1]+e&4294967295;f[2]=f[2]+g&4294967295;f[3]=f[3]+l&4294967295;f[4]=f[4]+q&4294967295}function d(a,d){if("string"===typeof a){a=unescape(encodeURIComponent(a));for(var e=[],f=0,h=a.length;f<h;++f)e.push(a.charCodeAt(f));a=e}d||(d=a.length);e=0;if(0==r)for(;e+64<d;)c(a.slice(e,e+64)),e+=64,z+=64;for(;e<d;)if(g[r++]=a[e++],z++,64==r)for(r=0,c(g);e+64<d;)c(a.slice(e,e+64)),e+=64,z+=64}function e(){var a=[],
e=8*z;56>r?d(l,56-r):d(l,64-(r-56));for(var h=63;56<=h;h--)g[h]=e&255,e>>>=8;c(g);for(h=e=0;5>h;h++)for(var q=24;0<=q;q-=8)a[e++]=f[h]>>q&255;return a}for(var f=[],g=[],h=[],l=[128],q=1;64>q;++q)l[q]=0;var r,z;a();return{reset:a,update:d,digest:e,fh:function(){for(var a=e(),c="",d=0;d<a.length;d++)c+="0123456789ABCDEF".charAt(Math.floor(a[d]/16))+"0123456789ABCDEF".charAt(a[d]%16);return c}}};
var ae=function(a,c,d){var e=[],f=[];if(1==(_.Aa(d)?2:1))return f=[c,a],(0,_.Ma)(e,function(a){f.push(a)}),$d(f.join(" "));var g=[],h=[];(0,_.Ma)(d,function(a){h.push(a.key);g.push(a.value)});d=Math.floor((new Date).getTime()/1E3);f=0==g.length?[d,c,a]:[g.join(":"),d,c,a];(0,_.Ma)(e,function(a){f.push(a)});a=$d(f.join(" "));a=[d,a];0==h.length||a.push(h.join(""));return a.join("_")},$d=function(a){var c=Zd();c.update(a);return c.fh().toLowerCase()};
var be=function(a){this.b=a||{cookie:""}},ce;_.k=be.prototype;_.k.set=function(a,c,d,e,f,g){if(/[;=\s]/.test(a))throw Error("q`"+a);if(/[;\r\n]/.test(c))throw Error("r`"+c);_.n(d)||(d=-1);f=f?";domain="+f:"";e=e?";path="+e:"";g=g?";secure":"";d=0>d?"":0==d?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date((0,_.v)()+1E3*d)).toUTCString();this.b.cookie=a+"="+c+f+e+d+g};
_.k.get=function(a,c){for(var d=a+"=",e=(this.b.cookie||"").split(";"),f=0,g;f<e.length;f++){g=(0,_.Ya)(e[f]);if(0==g.lastIndexOf(d,0))return g.substr(d.length);if(g==a)return""}return c};_.k.remove=function(a,c,d){var e=_.n(this.get(a));this.set(a,"",0,c,d);return e};_.k.jb=function(){return ce(this).keys};_.k.kb=function(){return ce(this).values};_.k.Sc=function(){return!this.b.cookie};_.k.clear=function(){for(var a=ce(this).keys,c=a.length-1;0<=c;c--)this.remove(a[c])};
ce=function(a){a=(a.b.cookie||"").split(";");for(var c=[],d=[],e,f,g=0;g<a.length;g++)f=(0,_.Ya)(a[g]),e=f.indexOf("="),-1==e?(c.push(""),d.push(f)):(c.push(f.substring(0,e)),d.push(f.substring(e+1)));return{keys:c,values:d}};_.de=new be("undefined"==typeof document?null:document);
var ee=function(a){var c=Yd(String(_.m.location.href)),d=_.m.__OVERRIDE_SID;null==d&&(d=(new be(document)).get("SID"));if(d&&(c=(d=0==c.indexOf("https:")||0==c.indexOf("chrome-extension:"))?_.m.__SAPISID:_.m.__APISID,null==c&&(c=(new be(document)).get(d?"SAPISID":"APISID")),c)){d=d?"SAPISIDHASH":"APISIDHASH";var e=String(_.m.location.href);return e&&c&&d?[d,ae(Yd(e),c,a||null)].join(" "):null}return null};
_.fe="StopIteration"in _.m?_.m.StopIteration:{message:"StopIteration",stack:""};_.ge=function(){};_.ge.prototype.next=function(){throw _.fe;};_.ge.prototype.Cc=function(){return this};var he;he=function(a){return/^\s*$/.test(a)?!1:/^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g,"@").replace(/(?:"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)[\s\u2028\u2029]*(?=:|,|]|}|$)/g,"]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g,""))};_.ie=function(a){a=String(a);if(he(a))try{return eval("("+a+")")}catch(c){}throw Error("t`"+a);};_.je=/\uffff/.test("\uffff")?/[\\"\x00-\x1f\x7f-\uffff]/g:/[\\"\x00-\x1f\x7f-\xff]/g;
var ke=function(a){this.b=this.o=this.w=a};ke.prototype.reset=function(){this.b=this.o=this.w};ke.prototype.pa=function(){return this.o};_.le=function(a){switch(a){case 200:case 201:case 202:case 204:case 206:case 304:case 1223:return!0;default:return!1}};_.me=function(){};_.me.prototype.o=null;var ne=function(a){return a.o||(a.o=a.A())};var pe;pe=function(){};_.x(pe,_.me);pe.prototype.b=function(){var a=qe(this);return a?new ActiveXObject(a):new XMLHttpRequest};pe.prototype.A=function(){var a={};qe(this)&&(a[0]=!0,a[1]=!0);return a};var qe=function(a){if(!a.w&&"undefined"==typeof XMLHttpRequest&&"undefined"!=typeof ActiveXObject){for(var c=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP","Microsoft.XMLHTTP"],d=0;d<c.length;d++){var e=c[d];try{return new ActiveXObject(e),a.w=e}catch(f){}}throw Error("v");}return a.w}; _.oe=new pe;
_.re=function(a,c){this.o={};this.b=[];this.A=this.w=0;var d=arguments.length;if(1<d){if(d%2)throw Error("g");for(var e=0;e<d;e+=2)this.set(arguments[e],arguments[e+1])}else if(a)if(a instanceof _.re)for(d=a.jb(),e=0;e<d.length;e++)this.set(d[e],a.get(d[e]));else for(e in a)this.set(e,a[e])};_.k=_.re.prototype;_.k.kb=function(){se(this);for(var a=[],c=0;c<this.b.length;c++)a.push(this.o[this.b[c]]);return a};_.k.jb=function(){se(this);return this.b.concat()};_.k.Sc=function(){return 0==this.w};
_.k.clear=function(){this.o={};this.A=this.w=this.b.length=0};_.k.remove=function(a){return _.te(this.o,a)?(delete this.o[a],this.w--,this.A++,this.b.length>2*this.w&&se(this),!0):!1};var se=function(a){if(a.w!=a.b.length){for(var c=0,d=0;c<a.b.length;){var e=a.b[c];_.te(a.o,e)&&(a.b[d++]=e);c++}a.b.length=d}if(a.w!=a.b.length){var f={};for(d=c=0;c<a.b.length;)e=a.b[c],_.te(f,e)||(a.b[d++]=e,f[e]=1),c++;a.b.length=d}};_.k=_.re.prototype;_.k.get=function(a,c){return _.te(this.o,a)?this.o[a]:c};
_.k.set=function(a,c){_.te(this.o,a)||(this.w++,this.b.push(a),this.A++);this.o[a]=c};_.k.forEach=function(a,c){for(var d=this.jb(),e=0;e<d.length;e++){var f=d[e],g=this.get(f);a.call(c,g,f,this)}};_.k.clone=function(){return new _.re(this)};_.k.Cc=function(a){se(this);var c=0,d=this.A,e=this,f=new _.ge;f.next=function(){if(d!=e.A)throw Error("w");if(c>=e.b.length)throw _.fe;var f=e.b[c++];return a?f:e.o[f]};return f};_.te=function(a,c){return Object.prototype.hasOwnProperty.call(a,c)};
_.ue=function(a){if(a.kb&&"function"==typeof a.kb)return a.kb();if(_.p(a))return a.split("");if(_.Ba(a)){for(var c=[],d=a.length,e=0;e<d;e++)c.push(a[e]);return c}return _.pb(a)};_.ve=function(a){if(a.jb&&"function"==typeof a.jb)return a.jb();if(!a.kb||"function"!=typeof a.kb){if(_.Ba(a)||_.p(a)){var c=[];a=a.length;for(var d=0;d<a;d++)c.push(d);return c}return qb(a)}}; _.we=function(a,c){if(a.forEach&&"function"==typeof a.forEach)a.forEach(c,void 0);else if(_.Ba(a)||_.p(a))(0,_.Ma)(a,c,void 0);else for(var d=_.ve(a),e=_.ue(a),f=e.length,g=0;g<f;g++)c.call(void 0,e[g],d&&d[g],a)};
_.xe=function(a){a.prototype.$goog_Thenable=!0};_.ye=function(a){if(!a)return!1;try{return!!a.$goog_Thenable}catch(c){return!1}};var ze=function(a,c){this.w=a;this.A=c;this.o=0;this.b=null};ze.prototype.get=function(){if(0<this.o){this.o--;var a=this.b;this.b=a.next;a.next=null}else a=this.w();return a};var Ae=function(a,c){a.A(c);100>a.o&&(a.o++,c.next=a.b,a.b=c)};var Be=function(){this.o=this.b=null},De=new ze(function(){return new Ce},function(a){a.reset()});Be.prototype.add=function(a,c){var d=De.get();d.set(a,c);this.o?this.o.next=d:this.b=d;this.o=d};Be.prototype.remove=function(){var a=null;this.b&&(a=this.b,this.b=this.b.next,this.b||(this.o=null),a.next=null);return a};var Ce=function(){this.next=this.scope=this.fn=null};Ce.prototype.set=function(a,c){this.fn=a;this.scope=c;this.next=null}; Ce.prototype.reset=function(){this.next=this.scope=this.fn=null};
var Ee=function(a){_.m.setTimeout(function(){throw a;},0)},Fe,Ge=function(){var a=_.m.MessageChannel;"undefined"===typeof a&&"undefined"!==typeof window&&window.postMessage&&window.addEventListener&&!_.y("Presto")&&(a=function(){var a=document.createElement("IFRAME");a.style.display="none";a.src="";document.documentElement.appendChild(a);var c=a.contentWindow;a=c.document;a.open();a.write("");a.close();var d="callImmediate"+Math.random(),e="file:"==c.location.protocol?"*":c.location.protocol+"//"+
c.location.host;a=(0,_.u)(function(a){if(("*"==e||a.origin==e)&&a.data==d)this.port1.onmessage()},this);c.addEventListener("message",a,!1);this.port1={};this.port2={postMessage:function(){c.postMessage(d,e)}}});if("undefined"!==typeof a&&!_.ub()){var c=new a,d={},e=d;c.port1.onmessage=function(){if(_.n(d.next)){d=d.next;var a=d.cf;d.cf=null;a()}};return function(a){e.next={cf:a};e=e.next;c.port2.postMessage(0)}}return"undefined"!==typeof document&&"onreadystatechange"in document.createElement("SCRIPT")? function(a){var c=document.createElement("SCRIPT");c.onreadystatechange=function(){c.onreadystatechange=null;c.parentNode.removeChild(c);c=null;a();a=null};document.documentElement.appendChild(c)}:function(a){_.m.setTimeout(a,0)}};
var Le=function(a,c){He||Ie();Je||(He(),Je=!0);Ke.add(a,c)},He,Ie=function(){if(_.m.Promise&&_.m.Promise.resolve){var a=_.m.Promise.resolve(void 0);He=function(){a.then(Me)}}else He=function(){var a=Me;!_.Ca(_.m.setImmediate)||_.m.Window&&_.m.Window.prototype&&!_.y("Edge")&&_.m.Window.prototype.setImmediate==_.m.setImmediate?(Fe||(Fe=Ge()),Fe(a)):_.m.setImmediate(a)}},Je=!1,Ke=new Be,Me=function(){for(var a;a=Ke.remove();){try{a.fn.call(a.scope)}catch(c){Ee(c)}Ae(De,a)}Je=!1};
var Pe,Xe,bf,af,cf;_.Oe=function(a,c){this.b=0;this.D=void 0;this.A=this.o=this.w=null;this.B=this.C=!1;if(a!=_.xa)try{var d=this;a.call(c,function(a){Ne(d,2,a)},function(a){Ne(d,3,a)})}catch(e){Ne(this,3,e)}};Pe=function(){this.next=this.context=this.o=this.w=this.b=null;this.A=!1};Pe.prototype.reset=function(){this.context=this.o=this.w=this.b=null;this.A=!1};var Qe=new ze(function(){return new Pe},function(a){a.reset()}),Re=function(a,c,d){var e=Qe.get();e.w=a;e.o=c;e.context=d;return e};
_.Oe.prototype.then=function(a,c,d){return Se(this,_.Ca(a)?a:null,_.Ca(c)?c:null,d)};_.xe(_.Oe);_.Te=function(a,c){return Se(a,null,c,void 0)};_.Oe.prototype.cancel=function(a){0==this.b&&Le(function(){var c=new _.Ue(a);Ve(this,c)},this)};
var Ve=function(a,c){if(0==a.b)if(a.w){var d=a.w;if(d.o){for(var e=0,f=null,g=null,h=d.o;h&&(h.A||(e++,h.b==a&&(f=h),!(f&&1<e)));h=h.next)f||(g=h);f&&(0==d.b&&1==e?Ve(d,c):(g?(e=g,e.next==d.A&&(d.A=e),e.next=e.next.next):We(d),Xe(d,f,3,c)))}a.w=null}else Ne(a,3,c)},Ze=function(a,c){a.o||2!=a.b&&3!=a.b||Ye(a);a.A?a.A.next=c:a.o=c;a.A=c},Se=function(a,c,d,e){var f=Re(null,null,null);f.b=new _.Oe(function(a,h){f.w=c?function(d){try{var f=c.call(e,d);a(f)}catch(r){h(r)}}:a;f.o=d?function(c){try{var f=
d.call(e,c);!_.n(f)&&c instanceof _.Ue?h(c):a(f)}catch(r){h(r)}}:h});f.b.w=a;Ze(a,f);return f.b};_.Oe.prototype.G=function(a){this.b=0;Ne(this,2,a)};_.Oe.prototype.fa=function(a){this.b=0;Ne(this,3,a)};
var Ne=function(a,c,d){if(0==a.b){a===d&&(c=3,d=new TypeError("x"));a.b=1;a:{var e=d,f=a.G,g=a.fa;if(e instanceof _.Oe){Ze(e,Re(f||_.xa,g||null,a));var h=!0}else if(_.ye(e))e.then(f,g,a),h=!0;else{if(_.Ea(e))try{var l=e.then;if(_.Ca(l)){$e(e,l,f,g,a);h=!0;break a}}catch(q){g.call(a,q);h=!0;break a}h=!1}}h||(a.D=d,a.b=c,a.w=null,Ye(a),3!=c||d instanceof _.Ue||af(a,d))}},$e=function(a,c,d,e,f){var g=!1,h=function(a){g||(g=!0,d.call(f,a))},l=function(a){g||(g=!0,e.call(f,a))};try{c.call(a,h,l)}catch(q){l(q)}},
Ye=function(a){a.C||(a.C=!0,Le(a.F,a))},We=function(a){var c=null;a.o&&(c=a.o,a.o=c.next,c.next=null);a.o||(a.A=null);return c};_.Oe.prototype.F=function(){for(var a;a=We(this);)Xe(this,a,this.b,this.D);this.C=!1};Xe=function(a,c,d,e){if(3==d&&c.o&&!c.A)for(;a&&a.B;a=a.w)a.B=!1;if(c.b)c.b.w=null,bf(c,d,e);else try{c.A?c.w.call(c.context):bf(c,d,e)}catch(f){cf.call(null,f)}Ae(Qe,c)};bf=function(a,c,d){2==c?a.w.call(a.context,d):a.o&&a.o.call(a.context,d)}; af=function(a,c){a.B=!0;Le(function(){a.B&&cf.call(null,c)})};cf=Ee;_.Ue=function(a){_.Ja.call(this,a)};_.x(_.Ue,_.Ja);_.Ue.prototype.name="cancel";
var ef,ff,gf;_.df=!_.A||_.cc(9);ef=!_.A||_.cc(9);ff=_.A&&!_.ac("9");gf=function(){if(!_.m.addEventListener||!Object.defineProperty)return!1;var a=!1,c=Object.defineProperty({},"passive",{get:function(){a=!0}});try{_.m.addEventListener("test",_.xa,c),_.m.removeEventListener("test",_.xa,c)}catch(d){}return a}();
_.hf=function(a,c){this.type=a;this.b=this.target=c;this.o=!1;this.og=!0};_.hf.prototype.stopPropagation=function(){this.o=!0};_.hf.prototype.preventDefault=function(){this.og=!1};_.jf=_.Jb?"webkitTransitionEnd":_.Fb?"otransitionend":"transitionend";_.kf=function(a,c){_.hf.call(this,a?a.type:"");this.relatedTarget=this.b=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.w=this.keyCode=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.state=null;this.pointerId=0;this.pointerType="";this.Sa=null;a&&this.init(a,c)};_.x(_.kf,_.hf);var lf={2:"touch",3:"pen",4:"mouse"};
_.kf.prototype.init=function(a,c){var d=this.type=a.type,e=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.b=c;(c=a.relatedTarget)?_.Ib&&(_.Cb(c,"nodeName")||(c=null)):"mouseover"==d?c=a.fromElement:"mouseout"==d&&(c=a.toElement);this.relatedTarget=c;e?(this.clientX=void 0!==e.clientX?e.clientX:e.pageX,this.clientY=void 0!==e.clientY?e.clientY:e.pageY,this.screenX=e.screenX||0,this.screenY=e.screenY||0):(this.clientX=void 0!==a.clientX?a.clientX:
a.pageX,this.clientY=void 0!==a.clientY?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.keyCode=a.keyCode||0;this.key=a.key||"";this.w=a.charCode||("keypress"==d?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=a.pointerId||0;this.pointerType=_.p(a.pointerType)?a.pointerType:lf[a.pointerType]||"";this.state=a.state;this.Sa=a;a.defaultPrevented&&this.preventDefault()};
_.kf.prototype.stopPropagation=function(){_.kf.J.stopPropagation.call(this);this.Sa.stopPropagation?this.Sa.stopPropagation():this.Sa.cancelBubble=!0};_.kf.prototype.preventDefault=function(){_.kf.J.preventDefault.call(this);var a=this.Sa;if(a.preventDefault)a.preventDefault();else if(a.returnValue=!1,ff)try{if(a.ctrlKey||112<=a.keyCode&&123>=a.keyCode)a.keyCode=-1}catch(c){}};
var of;_.mf="closure_listenable_"+(1E6*Math.random()|0);_.nf=function(a){return!(!a||!a[_.mf])};of=0;var pf=function(a,c,d,e,f){this.listener=a;this.b=null;this.src=c;this.type=d;this.capture=!!e;this.yd=f;this.key=++of;this.xc=this.bd=!1},qf=function(a){a.xc=!0;a.listener=null;a.b=null;a.src=null;a.yd=null};var rf=function(a){this.src=a;this.b={};this.o=0};rf.prototype.add=function(a,c,d,e,f){var g=a.toString();a=this.b[g];a||(a=this.b[g]=[],this.o++);var h=sf(a,c,e,f);-1<h?(c=a[h],d||(c.bd=!1)):(c=new pf(c,this.src,g,!!e,f),c.bd=d,a.push(c));return c};rf.prototype.remove=function(a,c,d,e){a=a.toString();if(!(a in this.b))return!1;var f=this.b[a];c=sf(f,c,d,e);return-1<c?(qf(f[c]),Array.prototype.splice.call(f,c,1),0==f.length&&(delete this.b[a],this.o--),!0):!1};
var tf=function(a,c){var d=c.type;if(!(d in a.b))return!1;var e=_.Ta(a.b[d],c);e&&(qf(c),0==a.b[d].length&&(delete a.b[d],a.o--));return e};rf.prototype.tc=function(a,c){a=this.b[a.toString()];var d=[];if(a)for(var e=0;e<a.length;++e){var f=a[e];f.capture==c&&d.push(f)}return d};rf.prototype.Vb=function(a,c,d,e){a=this.b[a.toString()];var f=-1;a&&(f=sf(a,c,d,e));return-1<f?a[f]:null};
rf.prototype.hasListener=function(a,c){var d=_.n(a),e=d?a.toString():"",f=_.n(c);return ob(this.b,function(a){for(var g=0;g<a.length;++g)if(!(d&&a[g].type!=e||f&&a[g].capture!=c))return!0;return!1})};var sf=function(a,c,d,e){for(var f=0;f<a.length;++f){var g=a[f];if(!g.xc&&g.listener==c&&g.capture==!!d&&g.yd==e)return f}return-1};
var uf,vf,wf,zf,Bf,Cf,Hf,Gf,Df,If;uf="closure_lm_"+(1E6*Math.random()|0);vf={};wf=0;_.O=function(a,c,d,e,f){if(e&&e.once)return _.xf(a,c,d,e,f);if(_.Aa(c)){for(var g=0;g<c.length;g++)_.O(a,c[g],d,e,f);return null}d=_.yf(d);return _.nf(a)?a.K(c,d,_.Ea(e)?!!e.capture:!!e,f):zf(a,c,d,!1,e,f)};
zf=function(a,c,d,e,f,g){if(!c)throw Error("y");var h=_.Ea(f)?!!f.capture:!!f,l=_.Af(a);l||(a[uf]=l=new rf(a));d=l.add(c,d,e,h,g);if(d.b)return d;e=Bf();d.b=e;e.src=a;e.listener=d;if(a.addEventListener)gf||(f=h),void 0===f&&(f=!1),a.addEventListener(c.toString(),e,f);else if(a.attachEvent)a.attachEvent(Cf(c.toString()),e);else if(a.addListener&&a.removeListener)a.addListener(e);else throw Error("z");wf++;return d};
Bf=function(){var a=Df,c=ef?function(d){return a.call(c.src,c.listener,d)}:function(d){d=a.call(c.src,c.listener,d);if(!d)return d};return c};_.xf=function(a,c,d,e,f){if(_.Aa(c)){for(var g=0;g<c.length;g++)_.xf(a,c[g],d,e,f);return null}d=_.yf(d);return _.nf(a)?a.ab(c,d,_.Ea(e)?!!e.capture:!!e,f):zf(a,c,d,!0,e,f)};_.Ef=function(a,c,d,e,f){if(_.Aa(c))for(var g=0;g<c.length;g++)_.Ef(a,c[g],d,e,f);else e=_.Ea(e)?!!e.capture:!!e,d=_.yf(d),_.nf(a)?a.ra(c,d,e,f):a&&(a=_.Af(a))&&(c=a.Vb(c,d,e,f))&&_.Ff(c)};
_.Ff=function(a){if(_.ta(a)||!a||a.xc)return!1;var c=a.src;if(_.nf(c))return c.Wc(a);var d=a.type,e=a.b;c.removeEventListener?c.removeEventListener(d,e,a.capture):c.detachEvent?c.detachEvent(Cf(d),e):c.addListener&&c.removeListener&&c.removeListener(e);wf--;(d=_.Af(c))?(tf(d,a),0==d.o&&(d.src=null,c[uf]=null)):qf(a);return!0};Cf=function(a){return a in vf?vf[a]:vf[a]="on"+a};
Hf=function(a,c,d,e){var f=!0;if(a=_.Af(a))if(c=a.b[c.toString()])for(c=c.concat(),a=0;a<c.length;a++){var g=c[a];g&&g.capture==d&&!g.xc&&(g=Gf(g,e),f=f&&!1!==g)}return f};Gf=function(a,c){var d=a.listener,e=a.yd||a.src;a.bd&&_.Ff(a);return d.call(e,c)};
Df=function(a,c){if(a.xc)return!0;if(!ef){var d=c||_.t("window.event");c=new _.kf(d,this);var e=!0;if(!(0>d.keyCode||void 0!=d.returnValue)){a:{var f=!1;if(0==d.keyCode)try{d.keyCode=-1;break a}catch(h){f=!0}if(f||void 0==d.returnValue)d.returnValue=!0}d=[];for(f=c.b;f;f=f.parentNode)d.push(f);a=a.type;for(f=d.length-1;!c.o&&0<=f;f--){c.b=d[f];var g=Hf(d[f],a,!0,c);e=e&&g}for(f=0;!c.o&&f<d.length;f++)c.b=d[f],g=Hf(d[f],a,!1,c),e=e&&g}return e}return Gf(a,new _.kf(c,this))}; _.Af=function(a){a=a[uf];return a instanceof rf?a:null};If="__closure_events_fn_"+(1E9*Math.random()>>>0);_.yf=function(a){if(_.Ca(a))return a;a[If]||(a[If]=function(c){return a.handleEvent(c)});return a[If]};
_.P=function(){_.M.call(this);this.xb=new rf(this);this.Jg=this;this.De=null};_.x(_.P,_.M);_.P.prototype[_.mf]=!0;_.k=_.P.prototype;_.k.pd=function(){return this.De};_.k.Ne=function(a){this.De=a};_.k.addEventListener=function(a,c,d,e){_.O(this,a,c,d,e)};_.k.removeEventListener=function(a,c,d,e){_.Ef(this,a,c,d,e)};
_.k.dispatchEvent=function(a){var c,d=this.pd();if(d)for(c=[];d;d=d.pd())c.push(d);d=this.Jg;var e=a.type||a;if(_.p(a))a=new _.hf(a,d);else if(a instanceof _.hf)a.target=a.target||d;else{var f=a;a=new _.hf(e,d);_.tb(a,f)}f=!0;if(c)for(var g=c.length-1;!a.o&&0<=g;g--){var h=a.b=c[g];f=h.qc(e,!0,a)&&f}a.o||(h=a.b=d,f=h.qc(e,!0,a)&&f,a.o||(f=h.qc(e,!1,a)&&f));if(c)for(g=0;!a.o&&g<c.length;g++)h=a.b=c[g],f=h.qc(e,!1,a)&&f;return f};_.k.R=function(){_.P.J.R.call(this);this.Kd();this.De=null};
_.k.K=function(a,c,d,e){return this.xb.add(String(a),c,!1,d,e)};_.k.ab=function(a,c,d,e){return this.xb.add(String(a),c,!0,d,e)};_.k.ra=function(a,c,d,e){return this.xb.remove(String(a),c,d,e)};_.k.Wc=function(a){return tf(this.xb,a)};_.k.Kd=function(a){if(this.xb){var c=this.xb;a=a&&a.toString();var d=0,e;for(e in c.b)if(!a||e==a){for(var f=c.b[e],g=0;g<f.length;g++)++d,qf(f[g]);delete c.b[e];c.o--}c=d}else c=0;return c};
_.k.qc=function(a,c,d){a=this.xb.b[String(a)];if(!a)return!0;a=a.concat();for(var e=!0,f=0;f<a.length;++f){var g=a[f];if(g&&!g.xc&&g.capture==c){var h=g.listener,l=g.yd||g.src;g.bd&&this.Wc(g);e=!1!==h.call(l,d)&&e}}return e&&0!=d.og};_.k.tc=function(a,c){return this.xb.tc(String(a),c)};_.k.Vb=function(a,c,d,e){return this.xb.Vb(String(a),c,d,e)};_.k.hasListener=function(a,c){return this.xb.hasListener(_.n(a)?String(a):void 0,c)};
_.Jf=function(a,c){_.P.call(this);this.A=a||1;this.w=c||_.m;this.B=(0,_.u)(this.D,this);this.C=(0,_.v)()};_.x(_.Jf,_.P);_.Jf.prototype.o=!1;_.Jf.prototype.b=null;_.Kf=function(a,c){a.A=c;a.b&&a.o?(a.stop(),a.start()):a.b&&a.stop()};_.Jf.prototype.D=function(){if(this.o){var a=(0,_.v)()-this.C;0<a&&a<.8*this.A?this.b=this.w.setTimeout(this.B,this.A-a):(this.b&&(this.w.clearTimeout(this.b),this.b=null),this.dispatchEvent("tick"),this.o&&(this.stop(),this.start()))}};
_.Jf.prototype.start=function(){this.o=!0;this.b||(this.b=this.w.setTimeout(this.B,this.A),this.C=(0,_.v)())};_.Jf.prototype.stop=function(){this.o=!1;this.b&&(this.w.clearTimeout(this.b),this.b=null)};_.Jf.prototype.R=function(){_.Jf.J.R.call(this);this.stop();delete this.w};_.Lf=function(a,c,d){if(_.Ca(a))d&&(a=(0,_.u)(a,d));else if(a&&"function"==typeof a.handleEvent)a=(0,_.u)(a.handleEvent,a);else throw Error("A");return 2147483647<Number(c)?-1:_.m.setTimeout(a,c||0)};
var Sf,Tf,Zf;_.Mf=function(a,c,d,e,f,g,h){var l="";a&&(l+=a+":");d&&(l+="//",c&&(l+=c+"@"),l+=d,e&&(l+=":"+e));f&&(l+=f);g&&(l+="?"+g);h&&(l+="#"+h);return l};_.Nf=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;_.Of=function(a){a=a.match(_.Nf)[1]||null;!a&&_.m.self&&_.m.self.location&&(a=_.m.self.location.protocol,a=a.substr(0,a.length-1));return a?a.toLowerCase():""};
_.Pf=function(a){var c=a.indexOf("#");0>c&&(c=a.length);var d=a.indexOf("?");if(0>d||d>c){d=c;var e=""}else e=a.substring(d+1,c);return[a.substr(0,d),e,a.substr(c)]};_.Qf=function(a,c){return c?a?a+"&"+c:c:a};_.Rf=function(a,c){if(!c)return a;a=_.Pf(a);a[1]=_.Qf(a[1],c);return a[0]+(a[1]?"?"+a[1]:"")+a[2]};Sf=function(a,c,d){if(_.Aa(c))for(var e=0;e<c.length;e++)Sf(a,String(c[e]),d);else null!=c&&d.push(a+(""===c?"":"="+_.ib(c)))};
Tf=function(a,c){var d=[];for(c=c||0;c<a.length;c+=2)Sf(a[c],a[c+1],d);return d.join("&")};_.Uf=function(a){var c=[],d;for(d in a)Sf(d,a[d],c);return c.join("&")};_.Vf=function(a,c){var d=2==arguments.length?Tf(arguments[1],0):Tf(arguments,1);return _.Rf(a,d)};_.Wf=function(a,c,d){d=null!=d?"="+_.ib(d):"";return _.Rf(a,c+d)};_.Xf=function(a,c,d,e){for(var f=d.length;0<=(c=a.indexOf(d,c))&&c<e;){var g=a.charCodeAt(c-1);if(38==g||63==g)if(g=a.charCodeAt(c+f),!g||61==g||38==g||35==g)return c;c+=f+1}return-1}; _.Yf=/#|$/;Zf=/[?&]($|#)/;_.$f=function(a,c){for(var d=a.search(_.Yf),e=0,f,g=[];0<=(f=_.Xf(a,e,c,d));)g.push(a.substring(e,f)),e=Math.min(a.indexOf("&",f)+1||d,d);g.push(a.substr(e));return g.join("").replace(Zf,"$1")};
var bg,cg,dg;_.ag=function(a){_.P.call(this);this.headers=new _.re;this.F=a||null;this.o=!1;this.D=this.b=null;this.H="";this.w=this.L=this.B=this.G=!1;this.C=0;this.A=null;this.P="";this.O=this.N=!1};_.x(_.ag,_.P);bg=/^https?$/i;cg=["POST","PUT"];dg=[];_.eg=function(a,c,d,e,f,g,h){var l=new _.ag;dg.push(l);c&&l.K("complete",c);l.ab("ready",l.X);g&&(l.C=Math.max(0,g));h&&(l.N=h);l.send(a,d,e,f)};_.ag.prototype.X=function(){this.ia();_.Ta(dg,this)};
_.ag.prototype.send=function(a,c,d,e){if(this.b)throw Error("C`"+this.H+"`"+a);c=c?c.toUpperCase():"GET";this.H=a;this.G=!1;this.o=!0;this.b=this.F?this.F.b():_.oe.b();this.D=this.F?ne(this.F):ne(_.oe);this.b.onreadystatechange=(0,_.u)(this.S,this);try{this.L=!0,this.b.open(c,String(a),!0),this.L=!1}catch(g){fg(this);return}a=d||"";var f=this.headers.clone();e&&_.we(e,function(a,c){f.set(c,a)});e=Sa(f.jb());d=_.m.FormData&&a instanceof _.m.FormData;!(0<=(0,_.La)(cg,c))||e||d||f.set("Content-Type",
"application/x-www-form-urlencoded;charset=utf-8");f.forEach(function(a,c){this.b.setRequestHeader(c,a)},this);this.P&&(this.b.responseType=this.P);"withCredentials"in this.b&&this.b.withCredentials!==this.N&&(this.b.withCredentials=this.N);try{gg(this),0<this.C&&((this.O=hg(this.b))?(this.b.timeout=this.C,this.b.ontimeout=(0,_.u)(this.Vc,this)):this.A=_.Lf(this.Vc,this.C,this)),this.B=!0,this.b.send(a),this.B=!1}catch(g){fg(this)}};
var hg=function(a){return _.A&&_.ac(9)&&_.ta(a.timeout)&&_.n(a.ontimeout)},Ra=function(a){return"content-type"==a.toLowerCase()};_.ag.prototype.Vc=function(){"undefined"!=typeof sa&&this.b&&(this.dispatchEvent("timeout"),this.abort(8))};var fg=function(a){a.o=!1;a.b&&(a.w=!0,a.b.abort(),a.w=!1);ig(a);jg(a)},ig=function(a){a.G||(a.G=!0,a.dispatchEvent("complete"),a.dispatchEvent("error"))};
_.ag.prototype.abort=function(){this.b&&this.o&&(this.o=!1,this.w=!0,this.b.abort(),this.w=!1,this.dispatchEvent("complete"),this.dispatchEvent("abort"),jg(this))};_.ag.prototype.R=function(){this.b&&(this.o&&(this.o=!1,this.w=!0,this.b.abort(),this.w=!1),jg(this,!0));_.ag.J.R.call(this)};_.ag.prototype.S=function(){this.fa||(this.L||this.B||this.w?kg(this):this.T())};_.ag.prototype.T=function(){kg(this)};
var kg=function(a){if(a.o&&"undefined"!=typeof sa&&(!a.D[1]||4!=(a.b?a.b.readyState:0)||2!=a.Xa()))if(a.B&&4==(a.b?a.b.readyState:0))_.Lf(a.S,0,a);else if(a.dispatchEvent("readystatechange"),4==(a.b?a.b.readyState:0)){a.o=!1;try{a.Tc()?(a.dispatchEvent("complete"),a.dispatchEvent("success")):(a.Xa(),ig(a))}finally{jg(a)}}},jg=function(a,c){if(a.b){gg(a);var d=a.b,e=a.D[0]?_.xa:null;a.b=null;a.D=null;c||a.dispatchEvent("ready");try{d.onreadystatechange=e}catch(f){}}},gg=function(a){a.b&&a.O&&(a.b.ontimeout=
null);a.A&&(_.m.clearTimeout(a.A),a.A=null)};_.ag.prototype.Tc=function(){var a=this.Xa(),c;if(!(c=_.le(a))){if(a=0===a)a=_.Of(String(this.H)),a=!bg.test(a);c=a}return c};_.ag.prototype.Xa=function(){try{return 2<(this.b?this.b.readyState:0)?this.b.status:-1}catch(a){return-1}};_.ag.prototype.vf=function(){try{return this.b?this.b.responseText:""}catch(a){return""}};_.ag.prototype.qd=function(){if(this.b){a:{var a=this.b.responseText;if(_.m.JSON)try{var c=_.m.JSON.parse(a);break a}catch(d){}c=_.ie(a)}return c}};
/*

Math.uuid.js (v1.4)
http://www.broofa.com
mailto:robert@broofa.com
Copyright (c) 2010 Robert Kieffer
Dual licensed under the MIT and GPL licenses.
*/
var lg=function(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(a){var c=16*Math.random()|0;return("x"==a?c:c&3|8).toString(16)})};var mg=function(a,c,d){_.eg(a.url,function(a){a=a.target;a.Tc()?c(a.vf()):d(a.Xa())},a.o,a.body,a.b,a.w,a.withCredentials)};var ng,pg,tg,yg,vg;_.og=function(a){_.C(this,a,0,28,ng,null)};_.x(_.og,_.B);var qg=function(a){_.C(this,a,0,-1,pg,null)};_.x(qg,_.B);var rg=function(a){_.C(this,a,0,-1,null,null)};_.x(rg,_.B);var sg=function(a){_.C(this,a,0,-1,null,null)};_.x(sg,_.B);var ug=function(a){_.C(this,a,0,17,tg,null)};_.x(ug,_.B);var wg=function(a){_.C(this,a,0,6,vg,null)};_.x(wg,_.B);ng=[3,20,27];_.xg=function(a){var c=(0,_.v)().toString();_.H(a,1,c)};pg=[2];tg=[3,5];yg=function(a){var c=(0,_.v)().toString();_.H(a,4,c)}; vg=[5];
var zg=function(a){_.C(this,a,0,-1,null,null)};_.x(zg,_.B);var Ag=new function(){this.b=zg};var Bg=function(a,c,d,e,f,g,h,l,q){_.P.call(this);this.Z=a;this.X=c||_.xa;this.B=new ug;this.$=e;this.b=[];this.T="";this.ba=_.Ia(Dd,0,1);this.H=f||null;this.F=d||null;this.N=h||!1;this.O=q||null;this.U=this.C=!1;this.V=this.S=-1;this.P=!1;this.w=null;this.ga=!l;this.L=0;this.ca=1;this.Y=g||!1;a=new sg;_.H(a,1,1);g||(g=new rg,c=document.documentElement.getAttribute("lang"),_.H(g,5,c),_.vc(a,11,g));_.vc(this.B,1,a);_.H(this.B,2,this.Z);this.A=new ke(1E4);this.o=new _.Jf(this.A.pa());_.Uc(this,this.o);
_.O(this.o,"tick",Qc(this.flush),!1,this);this.G=new _.Jf(6E5);_.Uc(this,this.G);_.O(this.G,"tick",Qc(this.flush),!1,this);this.N||this.G.start();this.Y||(_.O(_.Md(),"beforeunload",this.D,!1,this),_.O(_.Md(),"unload",this.D,!1,this),_.O(document,"pagehide",this.D,!1,this))};_.x(Bg,_.P);Bg.prototype.R=function(){this.D();Bg.J.R.call(this)};var Cg=function(a){a.H||(a.H=.01>a.ba()?"https://www.google.com/log?format=json&hasfast=true":"https://play.google.com/log?format=json&hasfast=true");return a.H};
Bg.prototype.Qa=function(a){if(a instanceof _.og)this.log(a);else{var c=new _.og;a=a.o();_.H(c,8,a);this.log(c)}};var Dg=function(a,c){a.A=new ke(1>c?1:c);_.Kf(a.o,a.A.pa())};Bg.prototype.log=function(a){a=zc(a);var c=this.ca++;_.H(a,21,c);_.E(a,1)||_.xg(a);this.w&&(c=zc(this.w),_.vc(a,16,c));for(;1E3<=this.b.length;)this.b.shift(),++this.L;this.b.push(a);this.dispatchEvent(new Eg(a));this.N||this.o.o||this.o.start()};
Bg.prototype.flush=function(a,c){if(0==this.b.length)a&&a();else{var d=(0,_.v)();if(this.V>d&&this.S<d)c&&c("throttled");else{var e=zc(this.B);yg(e);_.wc(e,3,this.b);_.H(e,14,this.L);d={};var f=this.X();f&&(d.Authorization=f);var g=Cg(this);this.F&&(d["X-Goog-AuthUser"]=this.F,g=_.Wf(g,"authuser",this.F));this.O&&(d["X-Goog-PageId"]=this.O,g=_.Wf(g,"pageId",this.O));if(f&&this.T==f)c&&c("stale-auth-token");else if(this.b=[],this.o.o&&this.o.stop(),this.L=0,this.C)a&&a();else{var h=e.o();d={url:g,
body:h,A:1,b:d,o:"POST",withCredentials:this.ga,w:0};g=(0,_.u)(function(c){this.A.reset();_.Kf(this.o,this.A.pa());if(c){try{var d=JSON.parse(c.replace(")]}'\n",""));var e=new wg(d)}catch(z){}e&&(c=_.G(e,1,"-1"),c=Number(c),0<c&&(this.S=(0,_.v)(),this.V=this.S+c),e.A?(e.b||(e.b={}),Ag.b?(!e.b[175237375]&&e.A[175237375]&&(e.b[175237375]=new Ag.b(e.A[175237375])),e=e.b[175237375]):e=e.A[175237375]):e=void 0,e&&(e=_.G(e,1,-1),-1!=e&&(this.P||Dg(this,e))))}a&&a()},this);h=(0,_.u)(function(a){var d=_.uc(e,
_.og,3),g=this.A;g.b=Math.min(3E5,2*g.b);g.o=Math.min(3E5,g.b+Math.round(.2*(Math.random()-.5)*g.b));_.Kf(this.o,this.A.pa());401==a&&f&&(this.T=f);if(500<=a&&600>a||401==a||0==a)this.b=d.concat(this.b),this.N||this.o.o||this.o.start();c&&c("net-send-failed",a)},this);this.$(d,g,h)}}}};Bg.prototype.D=function(){this.C||(this.U&&Fg(this),this.flush())};
var Fg=function(a){Gg(a,function(a,d){a=_.Wf(a,"format","json");return _.Md().navigator.sendBeacon(a,d.o())})},Gg=function(a,c){if(0!=a.b.length){var d=_.$f(Cg(a),"format");d=_.Vf(d,"auth",a.X(),"authuser",a.F||"0");for(var e=0;10>e&&a.b.length;++e){var f=a.b.slice(0,32),g=zc(a.B);yg(g);_.wc(g,3,f);if(!c(d,g))break;a.b=a.b.slice(f.length)}}},Eg=function(){this.type="event-logged"};_.x(Eg,_.hf);
_.Hg=function(a,c,d,e,f,g){Bg.call(this,a,ee,c,mg,d,e,f,void 0,g)};_.x(_.Hg,Bg);_.Ig=function(a){_.C(this,a,0,-1,null,null)};_.x(_.Ig,_.B);var Jg=function(a,c,d){_.M.call(this);this.F=c;this.T=d;this.C=_.L(_.sc(a,2,1E-4),.001);this.B=_.L(_.sc(a,10,0),0);this.Z=_.L(_.E(a,4),0);this.U=_.L(_.E(a,5),-1);this.V=_.K(_.E(a,7),"");this.S=_.K(_.E(a,6),"");this.O=_.K(_.E(a,8),"");this.o=_.E(a,9);this.Y=!!_.F(a,11);this.P=!!_.F(a,12);this.N=!!_.F(a,15);this.H=!!_.F(a,16);this.X=!!_.F(a,18);this.G=!!_.F(a,19);this.w=null!=_.E(a,17)?_.E(a,17).split(","):[];d=Math.random();this.D=_.J(_.F(a,1))&&d<this.C;this.A=_.J(_.F(a,1))&&d<this.B;this.L="og-"+
lg();if(this.D||this.A){a=_.F(a,3)?"https://play.googleapis.com/staging/log":void 0;c=this.b=new _.Hg(373,_.K(_.E(c,5)),a);c.P=!0;Dg(c,1E3);this.b.U=!!_.Md().navigator.sendBeacon&&(_.jc||_.fc&&_.ac(45));if(0!=this.w.length){c=new Xd;for(a=0;a<this.w.length;a++)d=Number(this.w[a]),isNaN(d)||0==d||_.E(c,3).push(d);a=this.b;c?(a.w||(a.w=new qg),c=c.o(),_.H(a.w,4,c)):a.w&&_.H(a.w,4,void 0)}_.Uc(this,this.b)}};_.x(Jg,_.M);var Kg=[1,36];
Jg.prototype.log=function(a,c){var d=!(0<=(0,_.La)(Kg,a)),e=d?this.D:this.A;if(e){var f=c||new _.Ig;_.H(f,1,a);_.H(f,2,this.Z);_.H(f,4,d?this.C:this.B);_.H(f,3,this.U);_.H(f,11,this.S);_.H(f,10,this.V);_.H(f,5,this.O);window.performance&&window.performance.timing&&_.H(f,14,(new Date).getTime()-window.performance.timing.navigationStart);_.H(f,13,this.o);_.H(f,16,this.Y);_.H(f,17,this.P);_.H(f,19,this.L);d=0;_.F(this.F,1)&&(d|=1);_.F(this.F,3)&&(d|=4);_.H(f,12,d);_.H(f,25,this.N);_.H(f,26,this.H);if(7==
this.o||8==this.o||10==this.o)_.H(f,32,this.X),_.H(f,33,this.G);d=new _.og;f=f.o();_.H(d,8,f);this.b.log(d)}this.T&&(console.log("Clearcut log called with event = ",a,"("+(e?"":"NOT ")+"sent to server)"),c&&null!=_.E(c,27)&&console.log("Widget state logged = ",_.E(c,27)))};
_.Lg=function(a,c,d,e,f){_.Gc.call(this,a,c);_.tb(this.data,{jexpid:_.K(_.E(a,9)),srcpg:"prop="+_.K(_.E(a,6)),jsr:Math.round(1/e),emsg:d.name+":"+d.message});if(f){f._sn&&(f._sn="og."+f._sn);for(var g in f)this.data[encodeURIComponent(g)]=f[g]}};_.x(_.Lg,_.Gc);
var Mg,Pg,Og;_.Ng=function(a){var c=window.google&&window.google.logUrl?"":"https://www.google.com";c+="/gen_204?";c+=a.o(2040-c.length);Mg(c)};Mg=function(a){var c=new Image,d=Og;c.onerror=c.onload=c.onabort=function(){d in Pg&&delete Pg[d]};Pg[Og++]=c;c.src=a};Pg=[];Og=0;
_.Qg=function(a){this.b=a};_.Qg.prototype.log=function(a,c){try{if(this.C(a)){var d=this.w(a,c);this.o(d)}}catch(e){}};_.Qg.prototype.o=function(a){this.b?a.b():_.Ng(a)};_.Rg=function(a){_.C(this,a,0,-1,null,null)};_.x(_.Rg,_.B);var Sg=function(a){_.C(this,a,0,-1,null,null)};_.x(Sg,_.B);var Tg=function(a,c,d,e){this.b=e;this.fa=c;this.H=d;this.B=_.L(_.sc(a,2,.001),.001);this.G=_.J(_.F(a,1))&&Math.random()<this.B;this.D=_.L(_.G(a,3,1),1);this.A=0;this.F=_.J(_.rc(a,4,!0),!0)};_.x(Tg,_.Qg);Tg.prototype.log=function(a,c){Tg.J.log.call(this,a,c);if(this.b&&this.F)throw a;};Tg.prototype.C=function(){return this.b||this.G&&this.A<this.D};Tg.prototype.w=function(a,c){"string"==typeof a&&(a=Error(a));try{return _.Ic(_.Hc.W(),"lm").b(a,c)}catch(d){return new _.Lg(this.fa,this.H,a,this.B,c)}}; Tg.prototype.o=function(a){Tg.J.o.call(this,a);this.A++};
_.Ug=function(a){_.C(this,a,"og.botreq",-1,null,null)};_.x(_.Ug,_.B);_.Wg=function(a){_.C(this,a,"og.botresp",-1,Vg,null)};_.x(_.Wg,_.B);_.Cc("og.botreq",_.Ug);var Vg=[1];_.Cc("og.botresp",_.Wg);_.Xg=function(a){_.C(this,a,0,-1,null,null)};_.x(_.Xg,_.B);_.Zg=function(){var a=_.Yg()||new _.Xg;return _.E(a,9)};var $g=function(a){_.C(this,a,0,-1,null,null)};_.x($g,_.B);var ah=function(a){_.C(this,a,0,-1,null,null)};_.x(ah,_.B);_.Yg=function(){return _.I(_.Q(),_.Xg,4)};var bh=new ah(window.gbar&&window.gbar._CONFIG?window.gbar._CONFIG[0]:[[,,,,,,,[]],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[],[]]),ch;ch=_.F(bh,3);_.dh=_.J(ch);_.eh=function(){};_.w("gbar_._DumpException",function(a){if(_.dh)throw a;_.eh(a)});var fh=function(){_.M.call(this);this.b=bh};_.x(fh,_.M);_.Jc(fh,"cs");_.Q=function(){return fh.W().b};_.gh=function(){return _.I(_.Q(),Ec,1)||new Ec};_.hh=function(){return _.I(_.Q(),$g,11)||new $g};_.Mc("cs",new fh);var ih;ih=null;_.jh=function(){if(!ih){var a=_.I(_.Q(),_.Rg,13)||new _.Rg,c=_.gh(),d=_.Zg();ih=new Tg(a,c,d,_.dh)}return ih};_.eh=function(a,c){_.jh().log(a,c)};var kh;kh=null;_.lh=function(){var a=_.I(_.Q(),Sg,29)||new Sg,c=_.hh();return kh?kh:kh=new Jg(a,c,_.dh)};var mh;mh=function(){this.o=!1;this.b=[]};_.oh=function(a){var c=_.nh;c.o?a():c.b.push(a)};mh.prototype.w=function(a){if(!this.o){this.o=!0;_.lh().log(1);for(var c=0;c<this.b.length;c++)try{this.b[c]()}catch(d){a(d)}this.b=null;try{_.Kc("api").Qa()}catch(d){}}};_.nh=new mh;
var ph;_.qh=function(a){ph();return _.id(a)};ph=_.xa;_.rh=function(a,c,d,e,f){_.M.call(this);this.A=c;this.V=e;this.D=f;this.N=!1;this.w={};this.o={};this.T=[];this.B=[];this.H=_.F(a,1)?"http":"https";this.S=[this.H+"://"+_.K(_.E(a,2)),"og/_/js","k="+_.K(_.E(a,3)),"rt=j"];this.G=""==_.K(_.E(a,14))?null:_.E(a,14);this.L=[this.H+"://"+_.K(_.E(a,2)),"og/_/ss","k="+_.K(_.E(a,13))];this.F=""==_.K(_.E(a,15))?null:_.E(a,15);this.P=_.J(_.F(a,1))?"?host=www.gstatic.com&bust="+_.K(_.E(a,16)):"";this.O=_.J(_.F(a,1))?"?host=www.gstatic.com&bust="+1E11*Math.random():
"";this.b=_.L(_.G(a,17,1),1);a=0;for(c=d[a];a<d.length;a++,c=d[a])this.w[c]=!0,this.o[c]=!0};_.x(_.rh,_.M);_.Jc(_.rh,"m");_.th=function(a,c,d){c=(0,_.Na)(c,Sc(Rc(_.Xa,_.Ia(rb,a.w))));if(0<c.length){var e=a.S.join("/")+"/"+("m="+c.join(","))+"/exm="+qb(a.w).join(",")+"/d=1/ed=1";a.G&&(e+="/rs="+a.G);e+=a.P;sh(a,e,(0,_.u)(a.X,a,d));a.T.push(e);for(d=0;d<c.length;d++)a.w[c[d]]=!0}};_.rh.prototype.X=function(a){for(var c=0;c<this.B.length;c++)this.B[c].call(null);a&&a.call(null)};
var sh=function(a,c,d,e){var f=_.Qd("SCRIPT");f.async=!0;f.type="text/javascript";f.charset="UTF-8";_.Cd(f,_.qh(c));var g=!0,h=e||1;e=(0,_.u)(function(){g=!1;this.D.log(47,{att:h,max:this.b,url:c});h<this.b?sh(this,c,d,h+1):this.V.log(Error("E`"+h+"`"+this.b),{url:c})},a);var l=(0,_.u)(function(){g&&(this.D.log(46,{att:h,max:this.b,url:c}),g=!1,d&&d.call(null))},a),q=function(a){"loaded"==a.readyState||"complete"==a.readyState?l():g&&window.setTimeout(function(){q(a)},100)};"undefined"!==typeof f.addEventListener?
f.onload=function(){l()}:f.onreadystatechange=function(){f.onreadystatechange=null;q(f)};f.onerror=e;a.D.log(45,{att:h,max:a.b,url:c});_.Hd("HEAD")[0].appendChild(f)};_.rh.prototype.Fd=function(a,c){a=(0,_.Na)(a,Sc(Rc(_.Xa,_.Ia(rb,this.o))));if(0<a.length){var d=this.L.join("/")+"/"+("m="+a.join(","))+"/excm="+qb(this.o).join(",")+"/d=1/ed=1";this.F&&(d+="/rs="+this.F);uh(d+this.O,c);for(c=0;c<a.length;c++)this.o[a[c]]=!0}};
var uh=function(a,c){var d=_.Qd("LINK");d.setAttribute("rel","stylesheet");d.setAttribute("type","text/css");d.setAttribute("href",a);d.onload=d.onreadystatechange=function(){d.readyState&&"loaded"!=d.readyState&&"complete"!=d.readyState||c&&c.call(null)};_.Hd("HEAD")[0].appendChild(d)};
_.rh.prototype.C=function(a,c){if(!this.N)if(void 0!=c)window.setTimeout((0,_.u)(this.C,this,a,void 0),c);else{_.th(this,_.E(this.A,1),a);a=_.E(this.A,2);if(_.F(this.A,3)){var d=(0,_.u)(this.Fd,this,a);a=function(){d()};"undefined"!==typeof window.addEventListener?window.addEventListener("load",a):window.attachEvent("onload",a)}else this.Fd(a);this.N=!0}};

}catch(e){_._DumpException(e)}
try{
_.w("gbar.ldb",_.u(_.nh.w,_.nh,_.eh));
}catch(e){_._DumpException(e)}
try{
/*
 Portions of this code are from MochiKit, received by
 The Closure Authors under the MIT license. All other code is Copyright
 2005-2009 The Closure Authors. All Rights Reserved.
*/
_.Ph=function(a,c){this.B=[];this.N=a;this.H=c||null;this.A=this.b=!1;this.w=void 0;this.G=this.L=this.D=!1;this.C=0;this.o=null;this.F=0};_.Ph.prototype.cancel=function(a){if(this.b)this.w instanceof _.Ph&&this.w.cancel();else{if(this.o){var c=this.o;delete this.o;a?c.cancel(a):(c.F--,0>=c.F&&c.cancel())}this.N?this.N.call(this.H,this):this.G=!0;this.b||(a=new Qh(this),_.Rh(this),_.Sh(this,!1,a))}};_.Ph.prototype.fa=function(a,c){this.D=!1;_.Sh(this,a,c)};
_.Sh=function(a,c,d){a.b=!0;a.w=d;a.A=!c;Th(a)};_.Rh=function(a){if(a.b){if(!a.G)throw new Uh(a);a.G=!1}};_.Ph.prototype.Ib=function(a){_.Rh(this);_.Sh(this,!0,a)};_.Ph.prototype.addCallback=function(a,c){return Vh(this,a,null,c)};var Vh=function(a,c,d,e){a.B.push([c,d,e]);a.b&&Th(a);return a};_.Ph.prototype.then=function(a,c,d){var e,f,g=new _.Oe(function(a,c){e=a;f=c});Vh(this,e,function(a){a instanceof Qh?g.cancel():f(a)});return g.then(a,c,d)};_.xe(_.Ph);
var Wh=function(a){return(0,_.Qa)(a.B,function(a){return _.Ca(a[1])})},Th=function(a){if(a.C&&a.b&&Wh(a)){var c=a.C,d=Xh[c];d&&(_.m.clearTimeout(d.ea),delete Xh[c]);a.C=0}a.o&&(a.o.F--,delete a.o);c=a.w;for(var e=d=!1;a.B.length&&!a.D;){var f=a.B.shift(),g=f[0],h=f[1];f=f[2];if(g=a.A?h:g)try{var l=g.call(f||a.H,c);_.n(l)&&(a.A=a.A&&(l==c||l instanceof Error),a.w=c=l);if(_.ye(c)||"function"===typeof _.m.Promise&&c instanceof _.m.Promise)e=!0,a.D=!0}catch(q){c=q,a.A=!0,Wh(a)||(d=!0)}}a.w=c;e&&(l=(0,_.u)(a.fa,
a,!0),e=(0,_.u)(a.fa,a,!1),c instanceof _.Ph?(Vh(c,l,e),c.L=!0):c.then(l,e));d&&(c=new Yh(c),Xh[c.ea]=c,a.C=c.ea)},Uh=function(){_.Ja.call(this)};_.x(Uh,_.Ja);Uh.prototype.message="Deferred has already fired";Uh.prototype.name="AlreadyCalledError";var Qh=function(){_.Ja.call(this)};_.x(Qh,_.Ja);Qh.prototype.message="Deferred was canceled";Qh.prototype.name="CanceledError";var Yh=function(a){this.ea=_.m.setTimeout((0,_.u)(this.o,this),0);this.b=a}; Yh.prototype.o=function(){delete Xh[this.ea];throw this.b;};var Xh={};

}catch(e){_._DumpException(e)}
try{
_.Zh=function(a){_.C(this,a,0,-1,null,null)};_.x(_.Zh,_.B);_.$h=function(a){_.C(this,a,0,-1,null,null)};_.x(_.$h,_.B);_.$h.prototype.Ta=function(){return _.E(this,6)};
}catch(e){_._DumpException(e)}
try{
var ai=function(){_.M.call(this);this.o=[];this.b=[]};_.x(ai,_.M);ai.prototype.w=function(a,c){this.o.push({gd:a,options:c})};ai.prototype.init=function(a,c,d){window.gapi={};var e=window.___jsl={};e.h=_.K(_.E(a,1));null!=_.E(a,12)&&(e.dpo=_.J(_.F(a,12)));e.ms=_.K(_.E(a,2));e.m=_.K(_.E(a,3));e.l=[];_.E(c,1)&&(a=_.E(c,3))&&this.b.push(a);_.E(d,1)&&(d=_.E(d,2))&&this.b.push(d);_.w("gapi.load",(0,_.u)(this.w,this));return this}; _.Mc("gs",(new ai).init(_.Yg()||new _.Xg,_.I(_.Q(),_.Zh,5)||new _.Zh,_.I(_.Q(),_.$h,6)||new _.$h));

}catch(e){_._DumpException(e)}
try{
var vh=function(a){_.C(this,a,0,-1,null,null)},yh,zh,Ah,Bh,Dh;_.x(vh,_.B);_.wh=function(a){_.C(this,a,0,-1,null,null)};_.x(_.wh,_.B);_.xh=function(a){return _.p(a)?document.getElementById(a):a};yh=[1,2,3,4,5,6,9,10,11,13,14,28,29,30,34,35,37,38,39,40,42,43,48,49,50,51,52,53,62,500];zh=null;Ah=function(a){if(!zh){zh={};for(var c=0;c<yh.length;c++)zh[yh[c]]=!0}return!!zh[a]};
Bh=function(a,c,d,e,f,g){_.Gc.call(this,a,c);_.tb(this.data,{oge:e,ogex:_.K(_.E(a,9)),ogp:_.K(_.E(a,6)),ogsr:Math.round(1/(Ah(e)?_.L(_.sc(d,3,1)):_.L(_.sc(d,2,1E-4)))),ogus:f});if(g){"ogw"in g&&(this.data.ogw=g.ogw,delete g.ogw);"ved"in g&&(this.data.ved=g.ved,delete g.ved);a=[];for(var h in g)0!=a.length&&a.push(","),a.push(h.replace(".","%2E").replace(",","%2C")),a.push("."),a.push(g[h].replace(".","%2E").replace(",","%2C"));g=a.join("");""!=g&&(this.data.ogad=g)}};_.x(Bh,_.Gc);
var Ch=function(a,c,d,e,f){this.b=f;this.fa=a;this.G=c;this.H=e;this.F=_.L(_.sc(a,2,1E-4),1E-4);this.B=_.L(_.sc(a,3,1),1);c=Math.random();this.D=_.J(_.F(a,1))&&c<this.F;this.A=_.J(_.F(a,1))&&c<this.B;a=0;_.J(_.F(d,1))&&(a|=1);_.J(_.F(d,2))&&(a|=2);_.J(_.F(d,3))&&(a|=4);this.N=a};_.x(Ch,_.Qg);Ch.prototype.C=function(a){return this.b||(Ah(a)?this.A:this.D)};Ch.prototype.w=function(a,c){return new Bh(this.G,this.H,this.fa,a,this.N,c)};Dh=null; _.Eh=function(){if(!Dh){var a=_.I(_.Q(),vh,12)||new vh,c=_.gh(),d=_.hh(),e=_.Zg();Dh=new Ch(a,c,d,e,_.dh)}return Dh};_.Fh=function(a,c){_.Eh().log(a,c)};_.Fh(8,{m:"BackCompat"==document.compatMode?"q":"s"});

}catch(e){_._DumpException(e)}
try{
var bi,fi,hi,ii;bi=[1,4,2];_.ci=function(a){return(_.df?0==a.Sa.button:"click"==a.type?!0:!!(a.Sa.button&bi[0]))&&!(_.Jb&&_.Nb&&a.ctrlKey)};_.di=function(a){var c=Number(a);return 0==c&&_.Xa(a)?NaN:c};_.ei=function(a){return _.Ea(a)&&1==a.nodeType};fi={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"};_.gi=function(){};_.gi.prototype.o=function(a){var c=[];hi(this,a,c);return c.join("")};
hi=function(a,c,d){if(null==c)d.push("null");else{if("object"==typeof c){if(_.Aa(c)){var e=c;c=e.length;d.push("[");for(var f="",g=0;g<c;g++)d.push(f),hi(a,e[g],d),f=",";d.push("]");return}if(c instanceof String||c instanceof Number||c instanceof Boolean)c=c.valueOf();else{d.push("{");f="";for(e in c)Object.prototype.hasOwnProperty.call(c,e)&&(g=c[e],"function"!=typeof g&&(d.push(f),ii(e,d),d.push(":"),hi(a,g,d),f=","));d.push("}");return}}switch(typeof c){case "string":ii(c,d);break;case "number":d.push(isFinite(c)&&
!isNaN(c)?String(c):"null");break;case "boolean":d.push(String(c));break;case "function":d.push("null");break;default:throw Error("u`"+typeof c);}}};ii=function(a,c){c.push('"',a.replace(_.je,function(a){var c=fi[a];c||(c="\\u"+(a.charCodeAt(0)|65536).toString(16).substr(1),fi[a]=c);return c}),'"')};_.ji=function(a){_.M.call(this);this.X=a;this.S={}};_.x(_.ji,_.M);var ki=[];_.ji.prototype.K=function(a,c,d,e){return li(this,a,c,d,e)};_.ji.prototype.w=function(a,c,d,e,f){return li(this,a,c,d,e,f)};
var li=function(a,c,d,e,f,g){_.Aa(d)||(d&&(ki[0]=d.toString()),d=ki);for(var h=0;h<d.length;h++){var l=_.O(c,d[h],e||a.handleEvent,f||!1,g||a.X||a);if(!l)break;a.S[l.key]=l}return a};_.ji.prototype.ab=function(a,c,d,e){return mi(this,a,c,d,e)};var mi=function(a,c,d,e,f,g){if(_.Aa(d))for(var h=0;h<d.length;h++)mi(a,c,d[h],e,f,g);else{c=_.xf(c,d,e||a.handleEvent,f,g||a.X||a);if(!c)return a;a.S[c.key]=c}return a};
_.ji.prototype.ra=function(a,c,d,e,f){if(_.Aa(c))for(var g=0;g<c.length;g++)this.ra(a,c[g],d,e,f);else d=d||this.handleEvent,e=_.Ea(e)?!!e.capture:!!e,f=f||this.X||this,d=_.yf(d),e=!!e,c=_.nf(a)?a.Vb(c,d,e,f):a?(a=_.Af(a))?a.Vb(c,d,e,f):null:null,c&&(_.Ff(c),delete this.S[c.key]);return this};_.ni=function(a){_.nb(a.S,function(a,d){this.S.hasOwnProperty(d)&&_.Ff(a)},a);a.S={}};_.ji.prototype.R=function(){_.ji.J.R.call(this);_.ni(this)};_.ji.prototype.handleEvent=function(){throw Error("G");};

}catch(e){_._DumpException(e)}
try{
var oi=function(){_.M.call(this);this.b=new _.ji},qi;_.x(oi,_.M);_.pi=new oi;qi=["click","keydown","mousedown","touchstart"];oi.prototype.K=function(a,c,d,e,f){(f||this.b).w(a,qi,c,d,e)};oi.prototype.ra=function(a,c,d,e,f){(f||this.b).ra(a,qi,c,d,e)};oi.prototype.R=function(){this.b.ia();oi.J.R.call(this)};
_.ri=function(){_.M.call(this);this.o=new _.P};_.x(_.ri,_.M);_.ri.prototype[_.mf]=!0;_.k=_.ri.prototype;_.k.K=function(a,c,d,e){return this.o.K(a,c,d,e)};_.k.ab=function(a,c,d,e){return this.o.ab(a,c,d,e)};_.k.ra=function(a,c,d,e){return this.o.ra(a,c,d,e)};_.k.Wc=function(a){return this.o.Wc(a)};_.k.dispatchEvent=function(a){return this.o.dispatchEvent(a)};_.k.Kd=function(a){return this.o.Kd(a)};_.k.pd=function(){return this.o.pd()};_.k.qc=function(a,c,d){return this.o.qc(a,c,d)}; _.k.tc=function(a,c){return this.o.tc(a,c)};_.k.Vb=function(a,c,d,e){return this.o.Vb(a,c,d,e)};_.k.hasListener=function(a,c){return this.o.hasListener(a,c)};

}catch(e){_._DumpException(e)}
try{
_.si=function(a,c,d){return function(){try{return c.apply(d,arguments)}catch(e){a.log(e)}}};_.ui=function(a,c,d,e,f,g){e=_.si(a,e,g);a=_.O(c,d,e,f,g);_.ti(c,d);return a};_.ti=function(a,c){if(a instanceof Element&&(c=_.Kc("eq").A(a,c||[])))if(_.A&&c instanceof MouseEvent&&a.dispatchEvent){var d=document.createEvent("MouseEvent");d.initMouseEvent(c.type,!0,!0,c.view,c.detail,c.screenX,c.screenY,c.clientX,c.clientY,c.ctrlKey,c.altKey,c.shiftKey,c.metaKey,c.button,c.relatedTarget);a.dispatchEvent(d)}else a.dispatchEvent&&a.dispatchEvent(c)};

}catch(e){_._DumpException(e)}
try{
var xi;_.vi=function(a){return String(a).replace(/([-()\[\]{}+?*.$\^|,:#<!\\])/g,"\\$1").replace(/\x08/g,"\\x08")};_.wi=function(a){return String(a).replace(/\-([a-z])/g,function(a,d){return d.toUpperCase()})};xi=function(a){var c=_.p(void 0)?_.vi(void 0):"\\s";return a.replace(new RegExp("(^"+(c?"|["+c+"]+":"")+")([a-z])","g"),function(a,c,f){return c+f.toUpperCase()})};
var Ai,yi;_.zi=function(a,c,d){if(_.p(c))(c=yi(a,c))&&(a.style[c]=d);else for(var e in c){d=a;var f=c[e],g=yi(d,e);g&&(d.style[g]=f)}};Ai={};yi=function(a,c){var d=Ai[c];if(!d){var e=_.wi(c);d=e;void 0===a.style[e]&&(e=(_.Jb?"Webkit":_.Ib?"Moz":_.A?"ms":_.Fb?"O":null)+xi(e),void 0!==a.style[e]&&(d=e));Ai[c]=d}return d};_.Bi=function(a,c){"number"==typeof a&&(a=(c?Math.round(a):a)+"px");return a};_.Ci=_.Ib?"MozUserSelect":_.Jb||_.Gb?"WebkitUserSelect":null;

}catch(e){_._DumpException(e)}
try{
var Mi,Yi;_.Di=function(a,c){this.x=_.n(a)?a:0;this.b=_.n(c)?c:0};_.Di.prototype.clone=function(){return new _.Di(this.x,this.b)};_.Di.prototype.ceil=function(){this.x=Math.ceil(this.x);this.b=Math.ceil(this.b);return this};_.Di.prototype.floor=function(){this.x=Math.floor(this.x);this.b=Math.floor(this.b);return this};_.Di.prototype.round=function(){this.x=Math.round(this.x);this.b=Math.round(this.b);return this};_.Ei=function(a,c){this.width=a;this.height=c};_.k=_.Ei.prototype;
_.k.clone=function(){return new _.Ei(this.width,this.height)};_.k.aspectRatio=function(){return this.width/this.height};_.k.Sc=function(){return!(this.width*this.height)};_.k.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};_.k.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};_.k.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};
_.Fi=function(a){return"CSS1Compat"==a.compatMode};_.Gi=function(a){a=(a||window).document;a=_.Fi(a)?a.documentElement:a.body;return new _.Ei(a.clientWidth,a.clientHeight)};_.Hi=function(a){return a.scrollingElement?a.scrollingElement:!_.Jb&&_.Fi(a)?a.documentElement:a.body||a.documentElement};_.Ii=function(a){var c=_.Hi(a);a=a.parentWindow||a.defaultView;return _.A&&_.ac("10")&&a.pageYOffset!=c.scrollTop?new _.Di(c.scrollLeft,c.scrollTop):new _.Di(a.pageXOffset||c.scrollLeft,a.pageYOffset||c.scrollTop)};
_.Ji=function(a,c){var d=_.Fd(a);return d.defaultView&&d.defaultView.getComputedStyle&&(a=d.defaultView.getComputedStyle(a,null))?a[c]||a.getPropertyValue(c)||"":""};_.Ki=function(a,c){return _.Ji(a,c)||(a.currentStyle?a.currentStyle[c]:null)||a.style&&a.style[c]};_.Li=function(a){return"rtl"==_.Ki(a,"direction")};Mi=0;_.Ni=function(a){return a[_.Fa]||(a[_.Fa]=++Mi)};_.Oi=function(a){for(var c in a)return!1;return!0};_.Pi=function(a,c){return a==c?!0:a&&c?a.width==c.width&&a.height==c.height:!1};
_.Qi=function(a,c){for(;a&&1!=a.nodeType;)a=c?a.nextSibling:a.previousSibling;return a};_.Ri=function(a){try{var c=a&&a.activeElement;return c&&c.nodeName?c:null}catch(d){return null}};_.Si=function(a,c,d,e){this.top=a;this.right=c;this.bottom=d;this.left=e};_.k=_.Si.prototype;_.k.getHeight=function(){return this.bottom-this.top};_.k.clone=function(){return new _.Si(this.top,this.right,this.bottom,this.left)};
_.k.expand=function(a,c,d,e){_.Ea(a)?(this.top-=a.top,this.right+=a.right,this.bottom+=a.bottom,this.left-=a.left):(this.top-=a,this.right+=Number(c),this.bottom+=Number(d),this.left-=Number(e));return this};_.k.ceil=function(){this.top=Math.ceil(this.top);this.right=Math.ceil(this.right);this.bottom=Math.ceil(this.bottom);this.left=Math.ceil(this.left);return this};
_.k.floor=function(){this.top=Math.floor(this.top);this.right=Math.floor(this.right);this.bottom=Math.floor(this.bottom);this.left=Math.floor(this.left);return this};_.k.round=function(){this.top=Math.round(this.top);this.right=Math.round(this.right);this.bottom=Math.round(this.bottom);this.left=Math.round(this.left);return this};_.Ti=function(a,c,d,e){this.left=a;this.top=c;this.width=d;this.height=e};_.Ti.prototype.clone=function(){return new _.Ti(this.left,this.top,this.width,this.height)};
_.Ti.prototype.ceil=function(){this.left=Math.ceil(this.left);this.top=Math.ceil(this.top);this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};_.Ti.prototype.floor=function(){this.left=Math.floor(this.left);this.top=Math.floor(this.top);this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
_.Ti.prototype.round=function(){this.left=Math.round(this.left);this.top=Math.round(this.top);this.width=Math.round(this.width);this.height=Math.round(this.height);return this};_.Ui=function(a){try{var c=a.getBoundingClientRect()}catch(d){return{left:0,top:0,right:0,bottom:0}}_.A&&a.ownerDocument.body&&(a=a.ownerDocument,c.left-=a.documentElement.clientLeft+a.body.clientLeft,c.top-=a.documentElement.clientTop+a.body.clientTop);return c};
_.Vi=function(a){var c=a.offsetWidth,d=a.offsetHeight,e=_.Jb&&!c&&!d;return _.n(c)&&!e||!a.getBoundingClientRect?new _.Ei(c,d):(a=_.Ui(a),new _.Ei(a.right-a.left,a.bottom-a.top))};_.Wi=function(a){if("none"!=_.Ki(a,"display"))return _.Vi(a);var c=a.style,d=c.display,e=c.visibility,f=c.position;c.visibility="hidden";c.position="absolute";c.display="inline";a=_.Vi(a);c.display=d;c.position=f;c.visibility=e;return a};
_.Xi=function(a,c){if(/^\d+px?$/.test(c))return parseInt(c,10);var d=a.style.left,e=a.runtimeStyle.left;a.runtimeStyle.left=a.currentStyle.left;a.style.left=c;c=a.style.pixelLeft;a.style.left=d;a.runtimeStyle.left=e;return+c};Yi=function(a,c){return(c=a.currentStyle?a.currentStyle[c]:null)?_.Xi(a,c):0};
_.Zi=function(a,c){if(_.A){var d=Yi(a,c+"Left"),e=Yi(a,c+"Right"),f=Yi(a,c+"Top");a=Yi(a,c+"Bottom");return new _.Si(f,e,a,d)}d=_.Ji(a,c+"Left");e=_.Ji(a,c+"Right");f=_.Ji(a,c+"Top");a=_.Ji(a,c+"Bottom");return new _.Si(parseFloat(f),parseFloat(e),parseFloat(a),parseFloat(d))};
_.$i=function(a){_.P.call(this);this.b=a;a=_.A?"focusout":"blur";this.o=_.O(this.b,_.A?"focusin":"focus",this,!_.A);this.w=_.O(this.b,a,this,!_.A)};_.x(_.$i,_.P);_.$i.prototype.handleEvent=function(a){var c=new _.kf(a.Sa);c.type="focusin"==a.type||"focus"==a.type?"focusin":"focusout";this.dispatchEvent(c)};_.$i.prototype.R=function(){_.$i.J.R.call(this);_.Ff(this.o);_.Ff(this.w);delete this.b};
_.aj=function(){if(_.Ob){var a=/Windows NT ([0-9.]+)/;return(a=a.exec(_.kb))?a[1]:"0"}return _.Nb?(a=/10[_.][0-9_.]+/,(a=a.exec(_.kb))?a[0].replace(/_/g,"."):"10"):_.Qb?(a=/Android\s+([^\);]+)(\)|;)/,(a=a.exec(_.kb))?a[1]:""):_.Rb||_.Sb||_.Tb?(a=/(?:iPhone|CPU)\s+OS\s+(\S+)/,(a=a.exec(_.kb))?a[1].replace(/_/g,"."):""):""}();
var bj;bj=function(a){return(a=a.exec(_.kb))?a[1]:""};_.cj=function(){if(_.fc)return bj(/Firefox\/([0-9.]+)/);if(_.A||_.Gb||_.Fb)return _.$b;if(_.jc)return _.Ab()?bj(/CriOS\/([0-9.]+)/):bj(/Chrome\/([0-9.]+)/);if(_.kc&&!_.Ab())return bj(/Version\/([0-9.]+)/);if(_.gc||_.hc){var a=/Version\/(\S+).*Mobile\/(\S+)/.exec(_.kb);if(a)return a[1]+"."+a[2]}else if(_.ic)return(a=bj(/Android\s+([0-9.]+)/))?a:bj(/Version\/([0-9.]+)/);return""}();

}catch(e){_._DumpException(e)}
try{
var gj;
_.fj=function(a,c,d,e,f,g){if(_.Jb&&!_.ac("525"))return!0;if(_.Nb&&f)return _.dj(a);if(f&&!e)return!1;if(!_.Ib){_.ta(c)&&(c=_.ej(c));var h=17==c||18==c||_.Nb&&91==c;if((!d||_.Nb)&&h||_.Nb&&16==c&&(e||g))return!1}if((_.Jb||_.Gb)&&e&&d)switch(a){case 220:case 219:case 221:case 192:case 186:case 189:case 187:case 188:case 190:case 191:case 192:case 222:return!1}if(_.A&&e&&c==a)return!1;switch(a){case 13:return _.Ib?g||f?!1:!(d&&e):!0;case 27:return!(_.Jb||_.Gb||_.Ib)}return _.Ib&&(e||f||g)?!1:_.dj(a)};
_.dj=function(a){if(48<=a&&57>=a||96<=a&&106>=a||65<=a&&90>=a||(_.Jb||_.Gb)&&0==a)return!0;switch(a){case 32:case 43:case 63:case 64:case 107:case 109:case 110:case 111:case 186:case 59:case 189:case 187:case 61:case 188:case 190:case 191:case 192:case 222:case 219:case 220:case 221:case 163:return!0;default:return!1}};_.ej=function(a){if(_.Ib)a=gj(a);else if(_.Nb&&_.Jb)switch(a){case 93:a=91}return a}; gj=function(a){switch(a){case 61:return 187;case 59:return 186;case 173:return 189;case 224:return 91;case 0:return 224;default:return a}};

}catch(e){_._DumpException(e)}
try{
var hj=function(a){var c=arguments.length;if(1==c&&_.Aa(arguments[0]))return hj.apply(null,arguments[0]);for(var d={},e=0;e<c;e++)d[arguments[e]]=!0;return d},ij;hj("A AREA BUTTON HEAD INPUT LINK MENU META OPTGROUP OPTION PROGRESS STYLE SELECT SOURCE TEXTAREA TITLE TRACK".split(" "));_.jj=function(a,c){c?a.setAttribute("role",c):a.removeAttribute("role")};
_.R=function(a,c,d){_.Aa(d)&&(d=d.join(" "));var e="aria-"+c;""===d||void 0==d?(ij||(ij={atomic:!1,autocomplete:"none",dropeffect:"none",haspopup:!1,live:"off",multiline:!1,multiselectable:!1,orientation:"vertical",readonly:!1,relevant:"additions text",required:!1,sort:"none",busy:!1,disabled:!1,hidden:!1,invalid:"false"}),d=ij,c in d?a.setAttribute(e,d[c]):a.removeAttribute(e)):a.setAttribute(e,d)};

}catch(e){_._DumpException(e)}
try{
var lj;_.S=function(a,c){var d=c||document;if(d.getElementsByClassName)a=d.getElementsByClassName(a)[0];else{d=document;var e=c||d;a=e.querySelectorAll&&e.querySelector&&a?e.querySelector(a?"."+a:""):_.Id(d,"*",a,c)[0]||null}return a||null};_.kj=function(a,c){var d=a.length-c.length;return 0<=d&&a.indexOf(c,d)==d};lj=function(a){if(a.classList)return a.classList;a=a.className;return _.p(a)&&a.match(/\S+/g)||[]};_.mj=function(a,c){return a.classList?a.classList.contains(c):0<=(0,_.La)(lj(a),c)};
_.T=function(a,c){a.classList?a.classList.add(c):_.mj(a,c)||(a.className+=0<a.className.length?" "+c:c)};_.nj=function(a,c){if(a.classList)(0,_.Ma)(c,function(c){_.T(a,c)});else{var d={};(0,_.Ma)(lj(a),function(a){d[a]=!0});(0,_.Ma)(c,function(a){d[a]=!0});a.className="";for(var e in d)a.className+=0<a.className.length?" "+e:e}};_.U=function(a,c){a.classList?a.classList.remove(c):_.mj(a,c)&&(a.className=(0,_.Na)(lj(a),function(a){return a!=c}).join(" "))}; _.oj=function(a,c){a.classList?(0,_.Ma)(c,function(c){_.U(a,c)}):a.className=(0,_.Na)(lj(a),function(a){return!(0<=(0,_.La)(c,a))}).join(" ")};

}catch(e){_._DumpException(e)}
try{
_.pj=function(){};_.ya(_.pj);_.pj.prototype.b=0;_.qj=function(a){return":"+(a.b++).toString(36)};
}catch(e){_._DumpException(e)}
try{
var sj,uj;_.rj=function(a,c,d,e){d.K(c,e,void 0,a.X||a,a);return a};sj=function(){};_.tj=new sj;uj=["click","keydown","keyup"];sj.prototype.K=function(a,c,d,e,f){var g=function(a){var d=_.yf(c),f=_.ei(a.target)?a.target.getAttribute("role")||null:null;"click"==a.type&&_.ci(a)?d.call(e,a):13!=a.keyCode&&3!=a.keyCode||"keyup"==a.type?32!=a.keyCode||"keyup"!=a.type||"button"!=f&&"tab"!=f||(d.call(e,a),a.preventDefault()):(a.type="keypress",d.call(e,a))};g.tb=c;g.sj=e;f?f.K(a,uj,g,d):_.O(a,uj,g,d)};
sj.prototype.ra=function(a,c,d,e,f){for(var g,h=0;g=uj[h];h++){var l=a;var q=g;var r=!!d;q=_.nf(l)?l.tc(q,r):l?(l=_.Af(l))?l.tc(q,r):[]:[];for(l=0;r=q[l];l++){var z=r.listener;if(z.tb==c&&z.sj==e){f?f.ra(a,g,r.listener,d,e):_.Ef(a,g,r.listener,d,e);break}}}};

}catch(e){_._DumpException(e)}
try{
var vj;vj=function(a){return _.Aa(a)?(0,_.Oa)(a,vj):_.p(a)?a:a?a.toString():a};_.wj=function(a,c){_.ji.call(this,c);this.A=a;this.Ha=c||this};_.x(_.wj,_.ji);_.wj.prototype.K=function(a,c,d,e){if(d){if("function"!=typeof d)throw new TypeError("H");d=_.si(this.A,d,this.Ha);d=_.wj.J.K.call(this,a,c,d,e);_.ti(a,vj(c));return d}return _.wj.J.K.call(this,a,c,d,e)};
_.wj.prototype.w=function(a,c,d,e,f){if(d){if("function"!=typeof d)throw new TypeError("H");d=_.si(this.A,d,f||this.Ha);d=_.wj.J.w.call(this,a,c,d,e,f);_.ti(a,vj(c));return d}return _.wj.J.w.call(this,a,c,d,e,f)};_.wj.prototype.ab=function(a,c,d,e){if(d){if("function"!=typeof d)throw new TypeError("H");d=_.si(this.A,d,this.Ha);d=_.wj.J.ab.call(this,a,c,d,e);_.ti(a,vj(c));return d}return _.wj.J.ab.call(this,a,c,d,e)};_.xj=function(a,c){_.wj.call(this,c);this.b=a};_.x(_.xj,_.wj);_.xj.prototype.M=function(){return this.b}; _.xj.prototype.R=function(){this.b=null;_.xj.J.R.call(this)};

}catch(e){_._DumpException(e)}
try{
_.yj=function(a){return new _.ad(_.Zc,a)};_.zj=function(a){return _.id(_.bd(a))};_.Aj=function(a,c){c=c instanceof _.kd?c:_.pd(c);a.href=_.md(c)};_.Bj=function(a,c){var d=c||document;return d.querySelectorAll&&d.querySelector?d.querySelectorAll("."+a):_.Id(document,"*",a,c)};

}catch(e){_._DumpException(e)}
try{
var Fj,Gj,Hj;_.Cj=function(a,c,d,e,f,g){d.K(c,e,f,g||a.X||a,a)};_.Dj=function(a,c,d){_.M.call(this);this.tb=a;this.o=c||0;this.b=d;this.Wa=(0,_.u)(this.jh,this)};_.x(_.Dj,_.M);_.k=_.Dj.prototype;_.k.ea=0;_.k.R=function(){_.Dj.J.R.call(this);this.stop();delete this.tb;delete this.b};_.k.start=function(a){this.stop();this.ea=_.Lf(this.Wa,_.n(a)?a:this.o)};_.k.stop=function(){0!=this.ea&&_.m.clearTimeout(this.ea);this.ea=0};_.k.jh=function(){this.ea=0;this.tb&&this.tb.call(this.b)};
_.Ej=function(a,c,d,e){if(null!=a)for(a=a.firstChild;a;){if(c(a)&&(d.push(a),e)||_.Ej(a,c,d,e))return!0;a=a.nextSibling}return!1};Fj=function(a,c){var d=[];_.Ej(a,c,d,!1);return d};Gj=function(a){return _.A&&!_.ac("9")?(a=a.getAttributeNode("tabindex"),null!=a&&a.specified):a.hasAttribute("tabindex")};Hj=function(a){a=a.tabIndex;return _.ta(a)&&0<=a&&32768>a};
_.Ij=function(a){var c;if((c="A"==a.tagName&&a.hasAttribute("href")||"INPUT"==a.tagName||"TEXTAREA"==a.tagName||"SELECT"==a.tagName||"BUTTON"==a.tagName?!a.disabled&&(!Gj(a)||Hj(a)):Gj(a)&&Hj(a))&&_.A){var d;!_.Ca(a.getBoundingClientRect)||_.A&&null==a.parentElement?d={height:a.offsetHeight,width:a.offsetWidth}:d=a.getBoundingClientRect();a=null!=d&&0<d.height&&0<d.width}else a=c;return a};_.Jj=function(a,c,d){for(var e=0;a&&(null==d||e<=d);){if(c(a))return a;a=a.parentNode;e++}return null};
_.Kj=function(a,c,d){if(c instanceof _.Ei)d=c.height,c=c.width;else if(void 0==d)throw Error("K");a.style.width=_.Bi(c,!0);a.style.height=_.Bi(d,!0)};_.Lj=function(a){a=a.getAttribute("aria-hidden");return null==a||void 0==a?"":String(a)};_.Mj=function(a,c,d){d?_.T(a,c):_.U(a,c)};
var Pj;_.Nj=_.A?_.zj(_.yj('javascript:""')):_.zj(_.yj("about:blank"));_.Oj=_.hd(_.Nj);Pj=_.A?_.zj(_.yj('javascript:""')):_.zj(_.yj("javascript:undefined"));_.hd(Pj);_.Rj=function(a,c){_.P.call(this);this.b=a;this.w=Qj(this.b);this.D=c||100;this.A=_.O(a,"resize",this.B,!1,this)};_.x(_.Rj,_.P);_.Rj.prototype.R=function(){_.Ff(this.A);_.Rj.J.R.call(this)};_.Rj.prototype.B=function(){this.o||(this.o=new _.Dj(this.C,this.D,this),_.Uc(this,this.o));this.o.start()};
_.Rj.prototype.C=function(){if(!this.b.fa){var a=this.w,c=Qj(this.b);this.w=c;if(a){var d=!1;a.width!=c.width&&(this.dispatchEvent("b"),d=!0);a.height!=c.height&&(this.dispatchEvent("a"),d=!0);d&&this.dispatchEvent("resize")}else this.dispatchEvent("a"),this.dispatchEvent("b"),this.dispatchEvent("resize")}};
var Sj=function(a){_.P.call(this);this.o=a||window;this.w=_.O(this.o,"resize",this.A,!1,this);this.b=_.Gi(this.o)},Tj,Qj;_.x(Sj,_.P);_.Uj=function(){var a=window,c=_.Ni(a);return Tj[c]=Tj[c]||new Sj(a)};Tj={};Qj=function(a){return a.b?a.b.clone():null};Sj.prototype.R=function(){Sj.J.R.call(this);this.w&&(_.Ff(this.w),this.w=null);this.b=this.o=null};Sj.prototype.A=function(){var a=_.Gi(this.o);_.Pi(a,this.b)||(this.b=a,this.dispatchEvent("resize"))};
var Vj=function(a){return null!=_.Jj(a,function(a){return 1==a.nodeType&&"true"==_.Lj(a)})},Wj=function(a){return a?Fj(a,function(a){return 1==a.nodeType&&_.Ij(a)&&!Vj(a)}):[]};_.Xj=function(a,c,d,e,f,g,h){_.xj.call(this,a,d);this.N=g||null;this.G=e;this.ca=this.H=null;this.ea=c;(this.B=h||_.S("gb_x",this.b))&&this.B.setAttribute("aria-expanded","false");this.D=_.Kc("dd");this.D.ze(this);(a=_.S("gb_z",this.b))&&!this.o&&(this.o=a,this.o.setAttribute("aria-hidden","true"),this.B&&_.Cj(this,this.B,_.tj,this.xd,!1,this),this.pe());f||this.lb()};_.x(_.Xj,_.xj);_.k=_.Xj.prototype;
_.k.lb=function(){_.Cj(this,document,_.pi,this.Ef,!0,this);this.w(document,_.fj(27)?"keypress":"keyup",this.Pb,!1,this);this.w(this.b,"mouseover",this.Kf,!1,this);this.w(this.b,"mouseout",this.Jf,!1,this);this.w(this.b,["keyup","keydown"],this.fi,!1,this);this.w(document.body,"focusin",this.Kh,!1,this)};_.k.fi=function(a){var c=a.target;c instanceof Element&&this.Tb(c)&&32==a.keyCode&&(a.preventDefault(),a.stopPropagation())};_.k.Kh=function(){this.Bb()&&(this.Tb(document.activeElement)||this.hd())};
_.k.pe=function(){_.Cj(this,this.o,_.tj,this.Fh,!1,this);_.Ud(this.b,this.o)||(this.w(this.o,"mouseover",this.Kf,!1,this),this.w(this.o,"mouseout",this.Jf,!1,this));this.K(this.o,"keydown",this.Nh,!0)};_.k.getId=function(){return this.ea};_.k.Pf=function(){return!1};_.k.xd=function(a){if(null==this.b.getAttribute("data-ogsr-fb")){var c="click"!=a.type;this.Bb()?this.close(void 0,!0):this.open(c);a.preventDefault();a.stopPropagation()}};
_.k.Fh=function(a){for(a=a.target;a&&a!=this.o;){if("A"==a.tagName&&!_.mj(a,"gb_Xf")){this.close(!0,!0);break}a=a.parentNode}};_.k.Tb=function(a){if(!a)return!1;var c=!!this.o&&_.Ud(this.o,a);return _.Ud(this.b,a)||c};_.k.Ef=function(a){this.Tb(a.target)||27==a.keyCode||this.close(void 0,!0)};_.k.Nh=function(a){if(9===a.keyCode&&this.Bb()){var c=a.target,d=Wj(this.o);0<d.length&&(c==d[0]&&a.shiftKey?(d[d.length-1].focus(),a.preventDefault()):c!=d[d.length-1]||a.shiftKey||(d[0].focus(),a.preventDefault()))}};
_.k.Kf=function(a){Yj(this,(0,_.u)(this.Nc,this),a)};_.k.Jf=function(a){Yj(this,(0,_.u)(this.ke,this),a)};var Yj=function(a,c,d){var e=d.relatedTarget&&(_.Ud(a.b,d.relatedTarget)||_.Ud(a.o,d.relatedTarget)),f=d.relatedTarget&&Zj(a,d.relatedTarget);a=Zj(a,d.target);e||c(0,d);e&&!f||a||c(1,d);!f&&a&&c(2,d)};_.Xj.prototype.Pb=function(a){if(27==a.keyCode){a=_.Ri(document);var c=this.Tb(a),d=this.Bb();this.close(void 0,!1);d&&c?this.B.focus():a&&a.focus()}};_.Xj.prototype.Nc=_.xa;_.Xj.prototype.ke=_.xa;
var Zj=function(a,c){return c&&a.o?_.mj(c,"gb_Ra")||_.mj(c,"gb_Sa")||!!a.o&&_.Ud(a.o,c):!1};_.Xj.prototype.R=function(){_.Xj.J.R.call(this);this.o=null};_.ak=function(a){if(a.B&&(a=a.B.getAttribute("data-ved")))return{ved:a}};_.k=_.Xj.prototype;_.k.Gd=function(a){a?this.open():this.close()};_.k.Of=function(){return!1};
_.k.open=function(a){if(!this.Bb()){this.D.ae(0,this);this.D.Me(this);_.T(this.b,"gb_Ob");_.T(this.o,"gb_Ob");this.o.setAttribute("aria-hidden","false");this.B&&this.B.setAttribute("aria-expanded","true");if(_.A&&this.o){var c=_.S("gb_yf");if(!c){c=_.N("IFRAME",{"class":"gb_yf",src:'javascript:""',frameBorder:0});var d=_.S("gb_mc");d&&d.appendChild(c)}_.U(c,"gb_wa");this.ye()}this.H&&this.G.log(this.H,_.ak(this));this.N&&this.ga&&this.N.log(this.ga);this.D.ae(1,this);a&&this.hd()}};
_.k.hd=function(){var a=Wj(this.o);a[0]?a[0].focus():this.o.focus()};_.k.ye=function(){if(_.A&&this.o){var a=_.S("gb_yf");a&&_.Kj(a,_.Wi(this.o))}};
_.k.close=function(a,c){return this.Bb()&&this.D.Og(this)?(this.D.Vf(this)&&this.D.Me(null),_.U(this.b,"gb_Ob"),_.U(this.o,"gb_Ob"),this.o.setAttribute("aria-hidden","true"),this.B&&(this.B.setAttribute("aria-expanded","false"),!c&&this.Tb(document.activeElement)&&setTimeout((0,_.u)(this.B.focus,this.B),0)),_.A&&(c=_.S("gb_yf"))&&_.T(c,"gb_wa"),!a&&this.ca&&this.G.log(this.ca,_.ak(this)),!a&&this.N&&this.Ja&&this.N.log(this.Ja),this.D.ae(2,this),!0):!1};_.k.Bb=function(){return _.mj(this.b,"gb_Ob")};

}catch(e){_._DumpException(e)}
try{
var bk=function(a){_.M.call(this);this.C=a;this.w=this.b=null;this.D=0;this.B={};this.o=!1;a=window.navigator.userAgent;0<=a.indexOf("MSIE")&&0<=a.indexOf("Trident")&&(a=/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a))&&a[1]&&9>parseFloat(a[1])&&(this.o=!0)};_.x(bk,_.M);
bk.prototype.He=function(a,c){if(!this.o)if(c instanceof Array)for(var d in c)this.He(a,c[d]);else{d=(0,_.u)(this.F,this,a);var e=this.D+c;this.D++;a.setAttribute("data-eqid",e);this.B[e]=d;a&&a.addEventListener?a.addEventListener(c,d,!1):a&&a.attachEvent?a.attachEvent("on"+c,d):this.C.log(Error("I`"+a))}};
bk.prototype.A=function(a,c){if(this.o)return null;if(c instanceof Array){var d=null,e;for(e in c){var f=this.A(a,c[e]);f&&(d=f)}return d}d=null;this.b&&this.b.type==c&&this.w==a&&(d=this.b,this.b=null);if(e=a.getAttribute("data-eqid"))a.removeAttribute("data-eqid"),(e=this.B[e])?a.removeEventListener?a.removeEventListener(c,e,!1):a.detachEvent&&a.detachEvent("on"+c,e):this.C.log(Error("J`"+a));return d}; bk.prototype.F=function(a,c){this.b=c;this.w=a;c.preventDefault?c.preventDefault():c.returnValue=!1};_.Mc("eq",new bk(_.jh()));

}catch(e){_._DumpException(e)}
try{
var ck=function(){_.nh.w(_.eh)},dk=function(a,c){var d=_.jh();d=_.si(d,ck);a.addEventListener?a.addEventListener(c,d):a.attachEvent&&a.attachEvent("on"+c,d)},ek=[1,2],fk=function(a){_.C(this,a,0,-1,ek,null)};_.x(fk,_.B);var gk=function(a,c){a.__PVT=c};
(function(){var a;window.gbar&&window.gbar._LDD?a=window.gbar._LDD:a=[];var c=_.hh();gk(window,_.K(_.E(c,8)));c=_.gh();var d=_.jh();a=new _.rh(c,_.I(_.Q(),fk,17)||new fk,a,d,_.Eh());_.Mc("m",a);var e=function(){_.w("gbar.qm",(0,_.u)(function(a){try{a()}catch(g){d.log(g)}},this));_.Kc("api").Qa()};_.J(_.F(c,18),!0)?a.C(e):(c=_.L(_.E(c,19),200),c=(0,_.u)(a.C,a,e,c),_.oh(c))})();dk(document,"DOMContentLoaded");dk(window,"load");
_.w("gbar.mls",function(){});var hk=new function(){this.b=_.I(_.gh(),_.Dc,8)||new _.Dc};_.w("gbar.bv",{n:_.L(_.E(hk.b,2)),r:_.K(_.E(hk.b,4)),f:_.K(_.E(hk.b,3)),e:_.K(_.E(hk.b,5)),m:_.L(_.G(hk.b,1,1),1)});_.w("gbar.kn",function(){return!0});_.w("gbar.sb",function(){return!1});
}catch(e){_._DumpException(e)}
try{
var Gh=function(a,c){a.B.push(c)},Hh=function(a,c,d){this.A=a;this.o=!1;this.b=c;this.w=d};Hh.prototype.Qa=function(a){if(this.o)throw Error("F`"+this.b);try{a.apply(this.A,this.w),this.o=!0}catch(c){}};var Ih=function(a){_.M.call(this);this.w=a;this.b=[];this.o={}};_.x(Ih,_.M);Ih.prototype.A=function(a){var c=(0,_.u)(function(){this.b.push(new Hh(this.w,a,Array.prototype.slice.call(arguments)))},this);return this.o[a]=c};
Ih.prototype.Qa=function(){for(var a=this.b.length,c=this.b,d=[],e=0;e<a;++e){var f=c[e].b;a:{var g=this.w;for(var h=f.split("."),l=h.length,q=0;q<l;++q)if(g[h[q]])g=g[h[q]];else{g=null;break a}g=g instanceof Function?g:null}if(g&&g!=this.o[f])try{c[e].Qa(g)}catch(r){}else d.push(c[e])}this.b=d.concat(c.slice(a))};
var Jh="bbh bbr bbs has prm sngw so".split(" "),Kh=new Ih(_.m);_.Mc("api",Kh);
for(var Lh="addExtraLink addLink aomc asmc close cp.c cp.l cp.me cp.ml cp.rc cp.rel ela elc elh gpca gpcr lGC lPWF ldb mls noam paa pc pca pcm pw.clk pw.hvr qfaae qfaas qfaau qfae qfas qfau qfhi qm qs qsi rtl sa setContinueCb snaw sncw som sp spd spn spp sps tsl tst up.aeh up.aop up.dpc up.iic up.nap up.r up.sl up.spd up.tp upel upes upet".split(" ").concat(Jh),Mh=(0,_.u)(Kh.A,Kh),Nh=0;Nh<Lh.length;Nh++){var Oh="gbar."+Lh[Nh];null==_.t(Oh,window)&&_.w(Oh,Mh(Oh))}_.w("gbar.up.gpd",function(){return""});
(function(){for(var a=function(a){return function(){_.Fh(44,{n:a})}},c=0;c<Jh.length;c++){var d="gbar."+Jh[c];_.w(d,a(d))}var e=_.Hc.W();_.Ic(e,"api").Qa();Gh(_.Ic(e,"m"),function(){_.Ic(e,"api").Qa()})})();
}catch(e){_._DumpException(e)}
try{
var kk,lk,nk,vk,xk,Jk,yk,Ak,zk,Ek,Bk,wk,Kk;_.ik=function(a){return Array.prototype.concat.apply([],arguments)};_.jk=function(){return Math.floor(2147483648*Math.random()).toString(36)+Math.abs(Math.floor(2147483648*Math.random())^(0,_.v)()).toString(36)};kk={SCRIPT:1,STYLE:1,HEAD:1,IFRAME:1,OBJECT:1};lk={IMG:" ",BR:"\n"};
_.mk=function(a,c,d){if(!(a.nodeName in kk))if(3==a.nodeType)d?c.push(String(a.nodeValue).replace(/(\r\n|\r|\n)/g,"")):c.push(a.nodeValue);else if(a.nodeName in lk)c.push(lk[a.nodeName]);else for(a=a.firstChild;a;)_.mk(a,c,d),a=a.nextSibling};nk=function(a,c){if(a){a=a.split("&");for(var d=0;d<a.length;d++){var e=a[d].indexOf("="),f=null;if(0<=e){var g=a[d].substring(0,e);f=a[d].substring(e+1)}else g=a[d];c(g,f?decodeURIComponent(f.replace(/\+/g," ")):"")}}};
_.ok=function(a,c){this.nb=this.B=this.o="";this.A=null;this.C=this.D="";this.w=!1;var d;a instanceof _.ok?(this.w=_.n(c)?c:a.w,_.pk(this,a.o),this.B=a.B,_.qk(this,a.nb),_.rk(this,a.A),_.sk(this,a.Ta()),_.tk(this,a.b.clone()),_.uk(this,a.C)):a&&(d=String(a).match(_.Nf))?(this.w=!!c,_.pk(this,d[1]||"",!0),this.B=vk(d[2]||""),_.qk(this,d[3]||"",!0),_.rk(this,d[4]),_.sk(this,d[5]||"",!0),_.tk(this,d[6]||"",!0),_.uk(this,d[7]||"",!0)):(this.w=!!c,this.b=new wk(null,this.w))};
_.ok.prototype.toString=function(){var a=[],c=this.o;c&&a.push(xk(c,yk,!0),":");var d=this.nb;if(d||"file"==c)a.push("//"),(c=this.B)&&a.push(xk(c,yk,!0),"@"),a.push(_.ib(d).replace(/%25([0-9a-fA-F]{2})/g,"%$1")),d=this.A,null!=d&&a.push(":",String(d));if(d=this.Ta())this.nb&&"/"!=d.charAt(0)&&a.push("/"),a.push(xk(d,"/"==d.charAt(0)?zk:Ak,!0));(d=this.b.toString())&&a.push("?",d);(d=this.C)&&a.push("#",xk(d,Bk));return a.join("")};_.ok.prototype.clone=function(){return new _.ok(this)};
_.pk=function(a,c,d){a.o=d?vk(c,!0):c;a.o&&(a.o=a.o.replace(/:$/,""));return a};_.qk=function(a,c,d){a.nb=d?vk(c,!0):c;return a};_.rk=function(a,c){if(c){c=Number(c);if(isNaN(c)||0>c)throw Error("M`"+c);a.A=c}else a.A=null;return a};_.ok.prototype.Ta=function(){return this.D};_.sk=function(a,c,d){a.D=d?vk(c,!0):c;return a};_.tk=function(a,c,d){c instanceof wk?(a.b=c,Dk(a.b,a.w)):(d||(c=xk(c,Ek)),a.b=new wk(c,a.w));return a};_.Fk=function(a,c,d){a.b.set(c,d);return a};_.Gk=function(a,c){return a.b.get(c)};
_.uk=function(a,c,d){a.C=d?vk(c):c;return a};_.Hk=function(a){return a instanceof _.ok?a.clone():new _.ok(a,void 0)};_.Ik=function(a){if(".."==a||"."==a)return"";if(-1!=a.indexOf("./")||-1!=a.indexOf("/.")){var c=_.Wa(a,"/");a=a.split("/");for(var d=[],e=0;e<a.length;){var f=a[e++];"."==f?c&&e==a.length&&d.push(""):".."==f?((1<d.length||1==d.length&&""!=d[0])&&d.pop(),c&&e==a.length&&d.push("")):(d.push(f),c=!0)}return d.join("/")}return a};
vk=function(a,c){return a?c?decodeURI(a.replace(/%25/g,"%2525")):decodeURIComponent(a):""};xk=function(a,c,d){return _.p(a)?(a=encodeURI(a).replace(c,Jk),d&&(a=a.replace(/%25([0-9a-fA-F]{2})/g,"%$1")),a):null};Jk=function(a){a=a.charCodeAt(0);return"%"+(a>>4&15).toString(16)+(a&15).toString(16)};yk=/[#\/\?@]/g;Ak=/[#\?:]/g;zk=/[#\?]/g;Ek=/[#\?@]/g;Bk=/#/g;wk=function(a,c){this.o=this.b=null;this.w=a||null;this.A=!!c};
Kk=function(a){a.b||(a.b=new _.re,a.o=0,a.w&&nk(a.w,function(c,d){a.add(decodeURIComponent(c.replace(/\+/g," ")),d)}))};wk.prototype.add=function(a,c){Kk(this);this.w=null;a=Lk(this,a);var d=this.b.get(a);d||this.b.set(a,d=[]);d.push(c);this.o+=1;return this};wk.prototype.remove=function(a){Kk(this);a=Lk(this,a);return _.te(this.b.o,a)?(this.w=null,this.o-=this.b.get(a).length,this.b.remove(a)):!1};wk.prototype.clear=function(){this.b=this.w=null;this.o=0};
wk.prototype.Sc=function(){Kk(this);return 0==this.o};var Mk=function(a,c){Kk(a);c=Lk(a,c);return _.te(a.b.o,c)};_.k=wk.prototype;_.k.forEach=function(a,c){Kk(this);this.b.forEach(function(d,e){(0,_.Ma)(d,function(d){a.call(c,d,e,this)},this)},this)};_.k.jb=function(){Kk(this);for(var a=this.b.kb(),c=this.b.jb(),d=[],e=0;e<c.length;e++)for(var f=a[e],g=0;g<f.length;g++)d.push(c[e]);return d};
_.k.kb=function(a){Kk(this);var c=[];if(_.p(a))Mk(this,a)&&(c=_.ik(c,this.b.get(Lk(this,a))));else{a=this.b.kb();for(var d=0;d<a.length;d++)c=_.ik(c,a[d])}return c};_.k.set=function(a,c){Kk(this);this.w=null;a=Lk(this,a);Mk(this,a)&&(this.o-=this.b.get(a).length);this.b.set(a,[c]);this.o+=1;return this};_.k.get=function(a,c){if(!a)return c;a=this.kb(a);return 0<a.length?String(a[0]):c};
_.k.toString=function(){if(this.w)return this.w;if(!this.b)return"";for(var a=[],c=this.b.jb(),d=0;d<c.length;d++){var e=c[d],f=_.ib(e);e=this.kb(e);for(var g=0;g<e.length;g++){var h=f;""!==e[g]&&(h+="="+_.ib(e[g]));a.push(h)}}return this.w=a.join("&")};_.k.clone=function(){var a=new wk;a.w=this.w;this.b&&(a.b=this.b.clone(),a.o=this.o);return a};
var Lk=function(a,c){c=String(c);a.A&&(c=c.toLowerCase());return c},Dk=function(a,c){c&&!a.A&&(Kk(a),a.w=null,a.b.forEach(function(a,c){var d=c.toLowerCase();c!=d&&(this.remove(c),this.remove(d),0<a.length&&(this.w=null,this.b.set(Lk(this,d),_.Ua(a)),this.o+=a.length))},a));a.A=c};

}catch(e){_._DumpException(e)}
try{
var Qk,Wk,Xk;_.Nk=function(a){if(a instanceof _.vd)return a;var c="object"==typeof a,d=null;c&&a.oe&&(d=a.b());a=_.fb(c&&a.zb?a.fb():String(a));return _.xd(a,d)};_.Ok=function(a){a=a.b;return a.parentWindow||a.defaultView};_.Pk=function(a,c,d,e){Array.prototype.splice.apply(a,_.Va(arguments,1))};Qk=function(a,c){return null!==a&&c in a?a[c]:void 0};_.Rk=function(a){if(a instanceof _.kd)return a;a="object"==typeof a&&a.zb?a.fb():String(a);_.nd.test(a)||(a="about:invalid#zClosurez");return _.od(a)};
_.Sk=function(a,c){c=c instanceof _.kd?c:_.pd(c);a.href=_.md(c)};_.Tk=function(a,c,d){if("undefined"!=typeof _.Di&&c instanceof _.Di){var e=c.x;c=c.b}else e=c,c=d;a.style.left=_.Bi(e,!1);a.style.top=_.Bi(c,!1)};_.V=function(a,c){a.style.display=c?"":"none"};_.W=function(a){_.P.call(this);this.b=a||_.Gd();this.ga=Uk;this.ea=null;this.qa=!1;this.o=null;this.N=void 0;this.G=this.B=this.w=this.C=null;this.Ja=!1};_.x(_.W,_.P);_.W.prototype.Za=_.pj.W();var Uk=null;
_.W.prototype.getId=function(){return this.ea||(this.ea=_.qj(this.Za))};_.W.prototype.M=function(){return this.o};_.Vk=function(a){a.N||(a.N=new _.ji(a));return a.N};Wk=function(a,c){if(a==c)throw Error("O");var d;if(d=c&&a.w&&a.ea){d=a.w;var e=a.ea;d=d.G&&e?Qk(d.G,e)||null:null}if(d&&a.w!=c)throw Error("O");a.w=c;_.W.J.Ne.call(a,c)};_.W.prototype.Ne=function(a){if(this.w&&this.w!=a)throw Error("P");_.W.J.Ne.call(this,a)};_.W.prototype.ob=function(){this.o=this.b.createElement("DIV")};
_.W.prototype.ua=function(a){Xk(this,a)};Xk=function(a,c,d){if(a.qa)throw Error("Q");a.o||a.ob();c?c.insertBefore(a.o,d||null):a.b.b.body.appendChild(a.o);a.w&&!a.w.qa||a.la()};_.Yk=function(a,c){if(a.qa)throw Error("Q");if(c&&a.bf(c)){a.Ja=!0;var d=_.Fd(c);a.b&&a.b.b==d||(a.b=_.Gd(c));a.ib(c);a.la()}else throw Error("R");};_.k=_.W.prototype;_.k.bf=function(){return!0};_.k.ib=function(a){this.o=a};_.k.la=function(){this.qa=!0;_.Zk(this,function(a){!a.qa&&a.M()&&a.la()})};
_.k.xa=function(){_.Zk(this,function(a){a.qa&&a.xa()});this.N&&_.ni(this.N);this.qa=!1};_.k.R=function(){this.qa&&this.xa();this.N&&(this.N.ia(),delete this.N);_.Zk(this,function(a){a.ia()});!this.Ja&&this.o&&_.Sd(this.o);this.w=this.C=this.o=this.G=this.B=null;_.W.J.R.call(this)};
_.k.Rb=function(a,c,d){if(a.qa&&(d||!this.qa))throw Error("Q");if(0>c||c>_.$k(this))throw Error("S");this.G&&this.B||(this.G={},this.B=[]);if(a.w==this){var e=a.getId();this.G[e]=a;_.Ta(this.B,a)}else{e=this.G;var f=a.getId();if(null!==e&&f in e)throw Error("f`"+f);e[f]=a}Wk(a,this);_.Pk(this.B,c,0,a);a.qa&&this.qa&&a.w==this?(d=this.vc(),c=d.childNodes[c]||null,c!=a.M()&&d.insertBefore(a.M(),c)):d?(this.o||this.ob(),c=_.al(this,c+1),Xk(a,this.vc(),c?c.o:null)):this.qa&&!a.qa&&a.o&&a.o.parentNode&&
1==a.o.parentNode.nodeType&&a.la()};_.k.vc=function(){return this.o};_.$k=function(a){return a.B?a.B.length:0};_.al=function(a,c){return a.B?a.B[c]||null:null};_.Zk=function(a,c,d){a.B&&(0,_.Ma)(a.B,c,d)};_.W.prototype.removeChild=function(a,c){if(a){var d=_.p(a)?a:a.getId();a=this.G&&d?Qk(this.G,d)||null:null;if(d&&a){var e=this.G;d in e&&delete e[d];_.Ta(this.B,a);c&&(a.xa(),a.o&&_.Sd(a.o));Wk(a,null)}}if(!a)throw Error("T");return a};

}catch(e){_._DumpException(e)}
try{
_.Yl=function(a){return _.n(a.nextElementSibling)?a.nextElementSibling:_.Qi(a.nextSibling,!0)};_.Zl=function(a,c,d){return _.Wf(_.$f(a,c),c,d)};_.$l=function(a,c){_.P.call(this);this.b=a;a=_.ei(this.b)?this.b:this.b?this.b.body:null;this.B=!!a&&_.Li(a);this.o=_.O(this.b,_.Ib?"DOMMouseScroll":"mousewheel",this,c)};_.x(_.$l,_.P);
_.$l.prototype.handleEvent=function(a){var c=0,d=0,e=a.Sa;"mousewheel"==e.type?(a=am(-e.wheelDelta),_.n(e.wheelDeltaX)?(c=am(-e.wheelDeltaX),d=am(-e.wheelDeltaY)):d=a):(a=e.detail,100<a?a=3:-100>a&&(a=-3),_.n(e.axis)&&e.axis===e.HORIZONTAL_AXIS?c=a:d=a);_.ta(this.w)&&(c=Math.min(Math.max(c,-this.w),this.w));_.ta(this.A)&&(d=Math.min(Math.max(d,-this.A),this.A));this.B&&(c=-c);c=new bm(a,e,c,d);this.dispatchEvent(c)};var am=function(a){return _.Jb&&(_.Nb||_.Pb)&&0!=a%40?a:a/40}; _.$l.prototype.R=function(){_.$l.J.R.call(this);_.Ff(this.o);this.o=null};var bm=function(a,c,d,e){_.kf.call(this,c);this.type="mousewheel";this.detail=a;this.deltaX=d;this.deltaY=e};_.x(bm,_.kf);
_.dm=function(a,c,d){_.P.call(this);this.target=a;this.D=c||a;this.B=d||new _.Ti(NaN,NaN,NaN,NaN);this.w=_.Fd(a);this.b=new _.ji(this);_.Uc(this,this.b);this.deltaY=this.deltaX=this.O=this.L=this.screenY=this.screenX=this.clientY=this.clientX=0;this.o=!1;_.O(this.D,["touchstart","mousedown"],this.F,!1,this);this.C=cm};_.x(_.dm,_.P);var cm=_.m.document&&_.m.document.documentElement&&!!_.m.document.documentElement.setCapture&&!!_.m.document.releaseCapture;
_.dm.prototype.R=function(){_.dm.J.R.call(this);_.Ef(this.D,["touchstart","mousedown"],this.F,!1,this);_.ni(this.b);this.C&&this.w.releaseCapture();this.D=this.target=null};
_.dm.prototype.F=function(a){var c="mousedown"==a.type;if(this.o||c&&!_.ci(a))this.dispatchEvent("earlycancel");else if(this.dispatchEvent(new em("start",this,a.clientX,a.clientY,a))){this.o=!0;c&&a.preventDefault();c=this.w;var d=c.documentElement,e=!this.C;this.b.K(c,["touchmove","mousemove"],this.S,{capture:e,passive:!1});this.b.K(c,["touchend","mouseup"],this.A,e);this.C?(d.setCapture(!1),this.b.K(d,"losecapture",this.A)):this.b.K(_.Md(c),"blur",this.A);this.H&&this.b.K(this.H,"scroll",this.N,
e);this.clientX=this.L=a.clientX;this.clientY=this.O=a.clientY;this.screenX=a.screenX;this.screenY=a.screenY;this.deltaX=this.target.offsetLeft;this.deltaY=this.target.offsetTop;this.G=_.Ii(_.Gd(this.w).b)}};_.dm.prototype.A=function(a,c){_.ni(this.b);this.C&&this.w.releaseCapture();this.o?(this.o=!1,this.dispatchEvent(new em("end",this,a.clientX,a.clientY,a,fm(this,this.deltaX),gm(this,this.deltaY),c||"touchcancel"==a.type))):this.dispatchEvent("earlycancel")};
_.dm.prototype.S=function(a){var c=a.clientX-this.clientX,d=a.clientY-this.clientY;this.clientX=a.clientX;this.clientY=a.clientY;this.screenX=a.screenX;this.screenY=a.screenY;if(!this.o){var e=this.L-this.clientX,f=this.O-this.clientY;if(0<e*e+f*f)if(this.dispatchEvent(new em("start",this,a.clientX,a.clientY,a)))this.o=!0;else{this.fa||this.A(a);return}}d=hm(this,c,d);c=d.x;d=d.b;this.o&&this.dispatchEvent(new em("beforedrag",this,a.clientX,a.clientY,a,c,d))&&(im(this,a,c,d),a.preventDefault())};
var hm=function(a,c,d){var e=_.Ii(_.Gd(a.w).b);c+=e.x-a.G.x;d+=e.b-a.G.b;a.G=e;a.deltaX+=c;a.deltaY+=d;return new _.Di(fm(a,a.deltaX),gm(a,a.deltaY))};_.dm.prototype.N=function(a){var c=hm(this,0,0);a.clientX=this.clientX;a.clientY=this.clientY;im(this,a,c.x,c.b)};
var im=function(a,c,d,e){a.target.style.left=d+"px";a.target.style.top=e+"px";a.dispatchEvent(new em("drag",a,c.clientX,c.clientY,c,d,e))},fm=function(a,c){var d=a.B;a=isNaN(d.left)?null:d.left;d=isNaN(d.width)?0:d.width;return Math.min(null!=a?a+d:Infinity,Math.max(null!=a?a:-Infinity,c))},gm=function(a,c){var d=a.B;a=isNaN(d.top)?null:d.top;d=isNaN(d.height)?0:d.height;return Math.min(null!=a?a+d:Infinity,Math.max(null!=a?a:-Infinity,c))},em=function(a,c,d,e,f,g,h,l){_.hf.call(this,a);this.clientX= d;this.clientY=e;this.A=f;this.left=_.n(g)?g:c.deltaX;this.top=_.n(h)?h:c.deltaY;this.w=!!l};_.x(em,_.hf);

}catch(e){_._DumpException(e)}
try{
_.jm=function(a){var c=_.Fd(a),d=new _.Di(0,0);var e=c?_.Fd(c):document;e=!_.A||_.cc(9)||_.Fi(_.Gd(e).b)?e.documentElement:e.body;if(a==e)return d;a=_.Ui(a);c=_.Ii(_.Gd(c).b);d.x=a.left+c.x;d.b=a.top+c.b;return d};_.km=function(a){a=_.Ui(a);return new _.Di(a.left,a.top)};

}catch(e){_._DumpException(e)}
try{
var lm,nm,om;lm=function(a,c){return a&&c?c instanceof _.Si?c.left>=a.left&&c.right<=a.right&&c.top>=a.top&&c.bottom<=a.bottom:c.x>=a.left&&c.x<=a.right&&c.b>=a.top&&c.b<=a.bottom:!1};_.mm=function(a){var c;if(_.Yc&&!(_.A&&_.ac("9")&&!_.ac("10")&&_.m.SVGElement&&a instanceof _.m.SVGElement)&&(c=a.parentElement))return c;c=a.parentNode;return _.ei(c)?c:null};nm=function(a,c){var d=[];return _.Ej(a,c,d,!0)?d[0]:void 0};om=function(a){_.M.call(this);this.b=a||_.Gd();this.o={}};_.x(om,_.M);
om.prototype.R=function(){_.nb(this.o,this.b.Mc,this.b);this.b=this.o=null;om.J.R.call(this)};var qm=function(a,c){var d=pm(a);_.Vd(d,"");_.Lf(function(){_.Vd(d,c)},1)},pm=function(a){var c=a.o.polite;if(c)return c.removeAttribute("aria-hidden"),c;c=a.b.createElement("DIV");c.style.position="absolute";c.style.top="-1000px";c.style.height="1px";c.style.overflow="hidden";_.R(c,"live","polite");_.R(c,"atomic","true");a.b.b.body.appendChild(c);return a.o.polite=c};
_.rm=function(){_.P.call(this);this.B=[];this.Ha=[];this.O=[];this.X=this.U=this.V=!1};_.x(_.rm,_.P);_.k=_.rm.prototype;_.k.Yd=function(a){this.Ha.push(a);this.V=a.U=!0};_.k.init=function(){if(!this.X){for(var a,c=0;a=this.B[c];c++)this.Ad(a);this.X=!0}};_.k.Ad=function(a){this.V&&(_.O(a.b,"mousedown",a.Zf,!1,a),this.$&&_.T(a.b,this.$));this.U&&this.ga&&_.T(a.b,this.ga)};_.k.de=function(a){this.V&&(_.Ef(a.b,"mousedown",a.Zf,!1,a),this.$&&_.U(a.b,this.$));this.U&&this.ga&&_.U(a.b,this.ga);a.ia()};
_.k.xf=function(a){var c=a.w?null:this.F;if(c&&c.o){var d=a.clientX,e=a.clientY,f=_.Ii(_.Gd(this.N).b),g=d+f.x;f=e+f.b;var h;this.D&&(h=this.D(c.w,c.b,g,f));this.dispatchEvent(new _.sm("drag",this,this.b,c.o,c.w,c.A,d,e,g,f));c.o.dispatchEvent(new _.sm("drop",this,this.b,c.o,c.w,c.A,d,e,g,f,h,a.A))}this.dispatchEvent(new _.sm("dragend",this,this.b,c?c.o:void 0,c?c.w:void 0,c?c.A:void 0));_.Ef(this.A,"drag",this.ag,!1,this);_.Ef(this.A,"end",this.xf,!1,this);_.Ef(_.Fd(this.b.o).body,"selectstart",
this.tg);for(a=0;c=this.O[a];a++)_.Ef(c.b,"scroll",this.df,!1,this),c.o=[];this.A.ia();_.Sd(this.N);delete this.b;delete this.N;delete this.A;delete this.S;delete this.F};
_.k.ag=function(a){var c=_.Ii(_.Gd(this.N).b);var d=new _.Di(a.clientX+c.x,a.clientY+c.b);c=d.x;var e=d.b,f=this.F;this.dispatchEvent(new _.sm("drag",this,this.b,f?f.o:void 0,f?f.w:void 0,f?f.A:void 0,a.clientX,a.clientY,c,e));var g;if(f){this.D&&f.o&&(g=this.D(f.w,f.b,c,e));if(lm(f.b,d)&&g==this.ca)return;f.o&&(this.dispatchEvent(new _.sm("dragout",this,this.b,f.o,f.w,f.A)),f.o.dispatchEvent(new _.sm("dragout",this,this.b,f.o,f.w,f.A,void 0,void 0,void 0,void 0,this.ca)));this.ca=g;this.F=null}if(lm(this.C,
d)){a:{for(var h=0;f=this.S[h];h++)if(lm(f.b,d))if(f.B){if(lm(f.B.w,d)){d=f;break a}}else{d=f;break a}d=null}if((f=this.F=d)&&f.o)this.D&&(g=this.D(f.w,f.b,c,e)),c=new _.sm("dragover",this,this.b,f.o,f.w,f.A),c.w=g,this.dispatchEvent(c),f.o.dispatchEvent(new _.sm("dragover",this,this.b,f.o,f.w,f.A,a.clientX,a.clientY,void 0,void 0,g));else if(!f){this.o||(this.o=new _.tm(this.C.clone()));a=this.o.b;a.top=this.C.top;a.right=this.C.right;a.bottom=this.C.bottom;a.left=this.C.left;for(g=0;f=this.S[g];g++)d=
f.b,f.B&&(f=f.B.w,d=new _.Si(Math.max(d.top,f.top),Math.min(d.right,f.right),Math.min(d.bottom,f.bottom),Math.max(d.left,f.left))),f=null,c>=d.right?f=d.right>a.left?d.right:a.left:c<d.left&&(f=d.left<a.right?d.left:a.right),h=null,e>=d.bottom?h=d.bottom>a.top?d.bottom:a.top:e<d.top&&(h=d.top<a.bottom?d.top:a.bottom),null===f||null===h||(Math.abs(f-c)>Math.abs(h-e)?h=null:f=null),null!==f?f<=c?a.left=f:a.right=f:null!==h&&(h<=e?a.top=h:a.bottom=h);this.F=10<=(a.right-a.left)*(a.bottom-a.top)?this.o:
null}}};_.k.tg=function(){return!1};_.k.df=function(a){for(var c=0,d;d=this.O[c];c++)if(a.target==d.b){var e=d.B-d.b.scrollTop,f=d.A-d.b.scrollLeft;d.B=d.b.scrollTop;d.A=d.b.scrollLeft;this.o&&this.F==this.o&&(0<e?this.o.b.top+=e:this.o.b.bottom+=e,0<f?this.o.b.left+=f:this.o.b.right+=f);for(var g=0,h;h=d.o[g];g++)h=h.b,h.top+=e,h.left+=f,h.bottom+=e,h.right+=f,_.um(this,h)}this.A.N(a)};
_.um=function(a,c){1==a.S.length?a.C=new _.Si(c.top,c.right,c.bottom,c.left):(a=a.C,a.left=Math.min(c.left,a.left),a.right=Math.max(c.right,a.right),a.top=Math.min(c.top,a.top),a.bottom=Math.max(c.bottom,a.bottom))};_.rm.prototype.R=function(){_.rm.J.R.call(this);for(var a,c=0;a=this.B[c];c++)this.de(a);this.B.length=0};_.sm=function(a,c,d,e,f,g,h,l,q,r,z){_.hf.call(this,a);this.A=d;this.B=f;this.clientX=h;this.clientY=l;this.w=z};_.x(_.sm,_.hf); _.tm=function(a,c,d,e){this.b=a;this.o=c;this.w=d;this.A=e||null;this.B=null};
var vm=function(){_.rm.call(this)};_.x(vm,_.rm);var wm=function(a){return nm(a,function(a){return _.ei(a)&&_.Ij(a)})},xm=function(a){(a=wm(a))&&a.focus()};_.ym=function(a,c){_.rm.call(this);this.T=!1;this.w=[];this.Y=_.rc(c,1,!1);this.ba=_.E(c,2)||"";this.oa=_.E(c,3)||"";this.da=this.Y&&this.ba?new om:null;this.H=null;this.G=a;this.L={};this.Z=null};_.x(_.ym,vm);_.k=_.ym.prototype;_.k.Ni=_.pj.W();_.k.Yd=function(a){_.ym.J.Yd.call(this,a);this.w.push(a);this.T=!0};_.k.init=function(){_.ym.J.init.call(this);this.Y&&this.T&&_.O(this.G,"keydown",this.cg,!1,this)};_.k.R=function(){this.Y&&this.T&&_.Ef(this.G,"keydown",this.cg,!1,this);_.ym.J.R.call(this)};
_.k.Ad=function(a){_.ym.J.Ad.call(this,a);var c=a.b;c=c.id||(c.id="ogbkddg"+_.qj(this.Ni));this.L[c]=a};_.k.de=function(a){delete this.L[a.b.id];_.ym.J.de.call(this,a)};
_.k.cg=function(a){a:{var c=a.target;if(this.L)for(var d=this.G;c&&c!==d;){var e=c.id;if(e in this.L){c=this.L[e];break a}c=c.parentNode}c=null}c&&(32==a.keyCode?(this.H?this.P(a,c):(this.H=c,_.T(this.G,"gb_6f"),_.T(c.b,"gb_p"),this.Z=_.O(document,"mousedown",(0,_.u)(this.P,this,a,c,!1)),_.O(this.G,"focusin",this.Gf,!1,this),this.dispatchEvent(new zm(c)),xm(c.b)),a.preventDefault(),a.stopPropagation()):this.H&&Am(this,a,c))};_.k.Gf=function(a){var c=wm(this.H.b);a.target!=c&&this.P(a,this.H)};
var Am=function(a,c,d){var e=null;_.Td(_.mm(d.b));switch(c.keyCode){case 37:e=Bm(a,d,-1);break;case 38:e=Bm(a,d,-3);break;case 39:e=Bm(a,d,1);break;case 40:e=Bm(a,d,3);break;case 9:a.P(c,d);break;case 27:a.P(c,d,!0)}if(e){a.dispatchEvent(new _.sm("dragout",null,d));var f=e.target.B[0],g=new _.sm("dragover",null,null);g.B=f;g.w=e.b;a.dispatchEvent(g);xm(d.b);if(a.da){d=1==a.w.indexOf(e.target)?a.oa:a.ba;var h=[e.b+1,f?f.b.children.length:0];d=d.replace(/%([0-9]+)\$s/g,function(a,c){c=parseInt(c,10)-
1;return c<h.length?h[c]:""});qm(a.da,d)}c.preventDefault()}};_.ym.prototype.P=function(a,c,d){_.U(this.G,"gb_6f");d?this.dispatchEvent(new _.sm("dragout",null,c)):(a=Cm(this,_.mm(c.b)),(a=-1!=a?this.w[a]:null)&&a.dispatchEvent(new _.sm("drop",null,null)));this.dispatchEvent(new _.sm("dragend",null,c));_.Ff(this.Z);delete this.Z;_.Ef(this.G,"focusin",this.Gf,!1,this);this.H=null;_.U(c.b,"gb_p")};
var Bm=function(a,c,d){var e=c.b;c=_.mm(c.b);var f=Cm(a,c);_.Td(_.mm(c));for(var g=_.Td(c),h=(0,_.La)(g,e),l=0<d?1:-1;e&&0!=d;){do e=0<l?_.Yl(e):_.n(e.previousElementSibling)?e.previousElementSibling:_.Qi(e.previousSibling,!1);while(e&&!(e.id in a.L));d-=l;h+=l;if(!e&&f<a.w.length&&(f+=l,a.w[f]))if(c=a.w[f].B[0].b,g=_.Td(c),0<l)e=(3-h%3)%3,d=d<e?0:d-e,h=0,e=c.children[0];else{h=g.length;e=3-h%3-1;if(d=e>-d?0:d+e)h--,d++;e=c.children[h]}}return 0==d&&a.w[f]?new Dm(a.w[f],h):null},Cm=function(a,c){for(var d= -1,e=0;e<a.w.length;e++)if(a.w[e].B[0].b==c){d=e;break}return d},Dm=function(a,c){this.target=a;this.b=c},zm=function(a){_.sm.call(this,"dragstart",null,a)};_.x(zm,_.sm);
_.Em=new _.Ei(88,100);
}catch(e){_._DumpException(e)}
try{
var Ut,eu,fu;_.St=function(a,c){a=a.style;"opacity"in a?a.opacity=c:"MozOpacity"in a?a.MozOpacity=c:"filter"in a&&(a.filter=""===c?"":"alpha(opacity="+100*Number(c)+")")};
_.Tt=function(a,c,d){if(c){c=Math.max(320,Math.min(1051,c));d||(d=_.Gi(a),d=.85*d.height);var e=Math.max(320,Math.min(650,d))}else d=_.Gi(a),c=.618*d.width,e=c<d.height?Math.round(Math.max(320,Math.min(650,.85*c))):Math.round(Math.max(320,Math.min(650,.85*d.height))),c=Math.round(e/.618);d=_.Gi(a);c=Math.min(c,Math.max(d.width,320));e=Math.min(e,Math.max(d.height,320));return new _.Ei(c,e)};Ut=function(a,c){this.b=a||new _.Ed;this.w=(0,_.u)(this.A,this);this.o=(0,_.u)(this.C,this);this.B=!!c};
_.x(Ut,_.M);_.k=Ut.prototype;_.k.Qd=!1;_.k.Ga=null;_.k.Fa=null;_.k.wb=null;_.k.Pd=null;var Vt=function(a){a.ua();return a.Pd},Wt=function(a,c,d){a.addEventListener?a.addEventListener(c,d,!1):a.attachEvent("on"+c,d)},Xt=function(a,c,d){a.removeEventListener?a.removeEventListener(c,d,!1):a.detachEvent("on"+c,d)},Zt=function(a){a.Fa&&(Xt(a.Fa,"scroll",a.o),Xt(a.Fa,Yt(a),a.o))},Yt=function(a){return"undefined"!=typeof _.Ok(a.b).o?"DOMMouseScroll":"mousewheel"};
Ut.prototype.ua=function(){if(!this.Ga){var a=this.b;this.wb=a.ja("IFRAME",{frameborder:0,style:"border:0;left:0;position:absolute;top:0;vertical-align:bottom;z-index:1101",src:_.Oj});_.V(this.wb,!1);_.St(this.wb,0);this.Fa=a.ja("DIV",{style:"background:#fff;display:none;left:0;position:absolute;top:0;z-index:1101"});_.V(this.Fa,!1);_.St(this.Fa,.5);a=this.b;var c=this.Ga=a.ja("DIV",{style:"background:#fff;border:1px solid #bebebe;box-shadow:rgba(0,0,0,.2) 0 4px 16px;height:auto;overflow:hidden;position:absolute;width:auto;z-index:1101;-moz-box-shadow:rgba(0,0,0,.2) 0 4px 16px;-webkit-box-shadow:rgba(0,0,0,.2) 0 4px 16px",
name:"dialog"},this.Pd=a.ja("DIV"));c.setAttribute("role","dialog");c.o="dialog";this.Ga.style.visibility="hidden";_.Tk(this.Ga,-1E4,-1E4);a=a.b.body;a.appendChild(this.wb);a.appendChild(this.Fa);a.appendChild(this.Ga)}};
Ut.prototype.wa=function(a){a!=this.Qd&&(this.Ga||this.ua(),a?($t(this),Wt(_.Ok(this.b),"resize",this.w),this.Fa&&(Wt(this.Fa,"scroll",this.o),Wt(this.Fa,Yt(this),this.o))):(Xt(_.Ok(this.b),"resize",this.w),Zt(this)),_.V(this.wb,a),_.V(this.Fa,a),a?au(this):(this.Ga.style.visibility="hidden",_.Tk(this.Ga,-1E4,-1E4)),(this.Qd=a)&&"hidden"==this.Ga.style.visibility&&(this.Ga.style.visibility="visible"),a?this.focus():this.B&&this.ia())};Ut.prototype.Aa=function(){return this.Qd};
Ut.prototype.focus=function(){try{this.Ga.focus()}catch(a){}};var $t=function(a){_.V(a.wb,!1);_.V(a.Fa,!1);var c=a.b.b,d=_.Gi(_.Md(c)||window),e=Math.max(c.body.scrollWidth,d.width);c=Math.max(c.body.scrollHeight,d.height);_.V(a.wb,!0);_.Kj(a.wb,e,c);_.V(a.Fa,!0);_.Kj(a.Fa,e,c)};Ut.prototype.A=function(){$t(this);au(this)};Ut.prototype.C=function(a){a.preventDefault?a.preventDefault():a.returnValue=!1;a.stopPropagation?a.stopPropagation():a.cancelBubble=!0};
var au=function(a){var c=a.Ga,d=_.Wi(c),e=a.b;a=_.Ii(e.b);e=_.Gi(_.Ok(e));_.Tk(c,Math.max(a.x+(e.width-d.width)/2,0),Math.max(a.b+(e.height-d.height)/2,0))};Ut.prototype.R=function(){this.Qd&&(Xt(_.Ok(this.b),"resize",this.w),Zt(this));this.Ga&&(_.Sd(this.Ga),this.Ga=null);this.Fa&&(_.Sd(this.Fa),this.Fa=null);this.wb&&(_.Sd(this.wb),this.wb=null)};_.bu=function(a){a=a.getOpenParams().onepick_dialog;if(!a)throw Error("L");return a};_.cu=function(a){this.b=a};
_.du=function(a,c){c.onOpen=(0,_.u)(a.A,a);c.onClose=(0,_.u)(a.w,a)};eu=function(a,c){var d=new Ut(a.b,c.disposeOnHide);c.onepick_dialog=d;d.ua();a=_.Tt(_.Ok(a.b),c.width,c.height);c=a.width;var e=a.height;_.p(c)&&_.p(e)?(a=_.Gi(_.Ok(d.b)),c=parseFloat(c)/100,e=parseFloat(e)/100,_.zi(d.Ga,"padding","1px"),_.Kj(d.Ga,a.width*c,a.height*e),_.Kj(d.Pd,"100%","100%")):_.Kj(d.Pd,c,e);au(d);d.wa(!0);return d};fu=function(){return{allow:"camera",style:"border:0;height:100%;overflow:hidden",allowtransparency:"true"}};
_.cu.prototype.A=function(a){var c=a.getOpenParams();c=eu(this,c);a.openInto(Vt(c),fu())};_.cu.prototype.o=function(a){var c=eu(this,a);a.where=Vt(c);a.attributes=fu();a.onClose=(0,_.u)(function(a){a.wa(!1)},this,c)};_.cu.prototype.w=function(a){_.bu(a).wa(!1)};_.gu=function(a,c,d,e){this.D=a;this.url=c;this.B=d;this.G=e||0;this.w=0;this.A=[]};_.gu.prototype.Xa=function(){return this.w};_.hu=function(a,c){a.w=c;if(3==c||5==c){for(c=0;c<a.A.length;c++)try{a.A[c]()}catch(d){a.B.log(d)}a.A=[]}};
_.k=_.gu.prototype;_.k.fe=function(){return{}};_.k.Xd=function(){};_.k.ge=function(){return{}};_.k.he=function(){return{}};_.k.Oc=function(){};_.k.Qe=function(){return!1};_.k.Kb=function(){return null};_.k.Ae=function(){return{}};_.k.ne=function(){};_.iu=function(a,c){_.hf.call(this,a);this.na=c};_.x(_.iu,_.hf);var ju=function(){_.Ja.call(this)};_.x(ju,_.Ja);
_.ku=function(a,c,d){_.ri.call(this);this.b=a;this.A=d;this.C=!1;this.H=_.L(_.G(c,12,3E4));this.w=[];this.b.Xd(this);0<this.b.G&&window.setTimeout((0,_.u)(this.F,this),1E3*this.b.G)};_.x(_.ku,_.ri);_.ku.prototype.F=function(){this.C?lu(this):0==this.b.Xa()&&_.hu(this.b,1)};_.ku.prototype.B=function(a,c){window.clearTimeout(this.G);var d=_.Va(arguments,1);this.dispatchEvent("ifs.onready");a&&a.apply(null,d)};
var lu=function(a){try{if(!a.b.b){_.hu(a.b,2);if(a.b.Qe())a.D();else{var c=a.b.ge();c.open=(0,_.u)(a.B,a,c.open);c.onready=(0,_.u)(a.B,a,c.onready);iframes.setHandler(a.b.D,c);var d=iframes.open(a.b.url,{style:a.b.D},a.b.he(),a.b.fe(a),(0,_.u)(a.b.Oc,a.b));a.b.b=d}0<a.H&&(window.clearTimeout(a.G),a.G=window.setTimeout((0,_.u)(a.dispatchEvent,a,"ifs.ontimeout"),a.H))}}catch(e){a.A.log(new ju(a.b))}};
_.ku.prototype.D=function(){if(_.t("gapi.iframes.getContext")){var a=this.b.he(),c=this.b.fe(this);mu(this,c);c._ready=(0,_.u)(this.B,this,(0,_.u)(this.b.ne,this.b));var d="";for(e in c)d+=","+e;var e=_.t("gapi.iframes.CROSS_ORIGIN_IFRAMES_FILTER");a={where:this.b.Kb(),url:this.b.url,attributes:this.b.Ae(),queryParams:a,fragmentParams:{_methods:d.substr(1)},messageHandlers:c,messageHandlersFilter:e};a=_.t("gapi.iframes.getContext")().openChild(a);a.registerWasClosed((0,_.u)(this.b.Oc,this.b),e);this.b.b=
a}else _.t("gapi.load")("gapi.iframes",(0,_.u)(this.D,this))};var mu=function(a,c){for(var d in c)c.hasOwnProperty(d)&&(c[d]=(0,_.u)(function(a,c){return c&&"object"===typeof c&&c.args?a.apply(null,c.args):a(c)},a,c[d]))};_.ku.prototype.N=function(a,c){this.dispatchEvent(new _.iu(a,_.Va(arguments,1)))};_.nu=function(a,c,d){if(4!=a.b.Xa())if(d||a.F(),a=a.b,3==a.w||5==a.w)try{c()}catch(e){a.B.log(e)}else a.A.push(c)};
_.ku.prototype.L=function(){try{this.C=!0;1==this.b.Xa()&&lu(this);for(var a=0;a<this.w.length;a++)try{this.w[a]()}catch(c){this.A.log(c)}this.w=null}catch(c){this.A.log(c)}};_.ku.prototype.init=function(a){try{a.Lb().addCallback((0,_.u)(this.L,this))}catch(c){this.A.log(c)}return this};
var ou=function(a){_.C(this,a,0,-1,null,null)};_.x(ou,_.B);_.qu=function(a){_.C(this,a,"ireq",-1,pu,null)};_.x(_.qu,_.B);var ru=function(a){_.C(this,a,"ires",-1,null,null)};_.x(ru,_.B);var su=function(a){_.C(this,a,"qreq",-1,null,null)};_.x(su,_.B);var uu=function(a){_.C(this,a,"qres",-1,tu,null)};_.x(uu,_.B);var vu=function(a){_.C(this,a,"ivdres",-1,null,null)};_.x(vu,_.B);var xu=function(a){_.C(this,a,"ppreq",-1,wu,null)};_.x(xu,_.B);var zu=function(a){_.C(this,a,"ppres",-1,yu,null)};_.x(zu,_.B);var pu=[2];_.Cc("ireq",_.qu);_.Cc("ires",ru); ru.prototype.Xa=function(){return _.I(this,ou,3)};_.Cc("qreq",su);var tu=[1];_.Cc("qres",uu);uu.prototype.Xa=function(){return _.I(this,ou,3)};_.Cc("ivdres",vu);var wu=[1,2];_.Cc("ppreq",xu);var yu=[1];_.Cc("ppres",zu);
_.Au=_.zj(_.yj("https://apis.google.com/js/api.js"));_.Bu=new Map([["birthday",14],["children",1],["dinner",2],["featured",3],["holiday",4],["nightlife",5],["other",6],["party",7],["school",8],["seasonal",9],["sport",10],["stationery",11],["travel",12],["wedding",13]]);(function(){for(var a=["ms","moz","webkit","o"],c=0,d;d=a[c]&&!_.m.requestAnimationFrame;++c)_.m.requestAnimationFrame=_.m[d+"RequestAnimationFrame"],_.m.cancelAnimationFrame=_.m[d+"CancelAnimationFrame"]||_.m[d+"CancelRequestAnimationFrame"];if(!_.m.requestAnimationFrame){var e=0;_.m.requestAnimationFrame=function(a){var c=(new Date).getTime(),d=Math.max(0,16-(c-e));e=c+d;return _.m.setTimeout(function(){a(c+d)},d)};_.m.cancelAnimationFrame||(_.m.cancelAnimationFrame=function(a){clearTimeout(a)})}})();
var Gu,Hu,Iu,Ju;_.Cu=function(a){a||_.Gd();_.re.call(this)};_.x(_.Cu,_.re);_.k=_.Cu.prototype;_.k.ed=null;_.k.qb=null;_.k.cd=null;_.k.clear=function(){_.re.prototype.clear.call(this);this.ed=this.cd=null};_.k.set=function(a,c,d,e){_.re.prototype.set.call(this,a,c);d&&(this.ed=a);e&&(this.cd=a);return this};_.Du=function(a,c,d,e){return a.set(c.key,c.caption,d,e)};
_.Cu.prototype.ua=function(){if(this.qb){_.Bd(this.qb,_.yd);var a=_.Gd(this.qb);this.forEach(function(c,d){c=a.ja("BUTTON",{name:d},c);d==this.ed&&(c.className="gb_ra-buttonset-default");this.qb.appendChild(c)},this)}};_.Cu.prototype.M=function(){return this.qb};_.Eu={key:"ok",caption:"OK"};_.Fu={key:"cancel",caption:"Cancel"};Gu={key:"yes",caption:"Yes"};Hu={key:"no",caption:"No"};Iu={key:"save",caption:"Save"};Ju={key:"continue",caption:"Continue"}; "undefined"!=typeof document&&(_.Du(new _.Cu,_.Eu,!0,!0),_.Du(_.Du(new _.Cu,_.Eu,!0),_.Fu,!1,!0),_.Du(_.Du(new _.Cu,Gu,!0),Hu,!1,!0),_.Du(_.Du(_.Du(new _.Cu,Gu),Hu,!0),_.Fu,!1,!0),_.Du(_.Du(_.Du(new _.Cu,Ju),Iu),_.Fu,!0,!0));
_.Ku=_.zj(_.yj("//www-onepick-opensocial.googleusercontent.com/gadgets/js/rpc.js?c=1&container=onepick"));_.Lu=_.zj(_.yj("//apis.google.com/js/rpc.js"));var Mu=!1,Nu="",Ou=function(a){a=a.match(/[\d]+/g);if(!a)return"";a.length=3;return a.join(".")};
(function(){if(navigator.plugins&&navigator.plugins.length){var a=navigator.plugins["Shockwave Flash"];if(a&&(Mu=!0,a.description)){Nu=Ou(a.description);return}if(navigator.plugins["Shockwave Flash 2.0"]){Mu=!0;Nu="2.0.0.11";return}}if(navigator.mimeTypes&&navigator.mimeTypes.length&&(a=navigator.mimeTypes["application/x-shockwave-flash"],Mu=!(!a||!a.enabledPlugin))){Nu=Ou(a.enabledPlugin.description);return}if("undefined"!=typeof ActiveXObject){try{var c=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
Mu=!0;Nu=Ou(c.GetVariable("$version"));return}catch(d){}try{c=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");Mu=!0;Nu="6.0.21";return}catch(d){}try{c=new ActiveXObject("ShockwaveFlash.ShockwaveFlash"),Mu=!0,Nu=Ou(c.GetVariable("$version"))}catch(d){}}})();_.Pu=Nu;

}catch(e){_._DumpException(e)}
try{
_.Qu=function(a,c,d,e,f){_.tc(a,e,c);var g=a.b[c];g||(g=a.b[c]=[]);d=d?d:new e;a=_.E(a,c);void 0!=f?(g.splice(f,0,d),a.splice(f,0,d.Oa())):(g.push(d),a.push(d.Oa()));return d};_.Ru=function(a){_.C(this,a,"gaia.l.a",-1,null,null)};_.x(_.Ru,_.B);_.Cc("gaia.l.a",_.Ru);
_.Tu=function(a){_.C(this,a,"gaia.l.a.r",-1,Su,null)};_.x(_.Tu,_.B);var Su=[1];_.Cc("gaia.l.a.r",_.Tu);_.Tu.prototype.D=function(a,c){return _.Qu(this,1,a,_.Ru,c)};
}catch(e){_._DumpException(e)}
try{
var Uu=function(a){_.C(this,a,0,-1,null,null)};_.x(Uu,_.B);var Vu=function(){},Wu=function(a,c,d){this.o=a;this.w=c;this.b=d||_.m},Xu=function(){this.b=[]};Xu.prototype.o=function(a,c,d){this.B(a,c,d);this.b.push(new Wu(a,c,d))};Xu.prototype.B=function(a,c,d){d=d||_.m;for(var e=0,f=this.b.length;e<f;e++){var g=this.b[e];if(g.o==a&&g.w==c&&g.b==d){this.b.splice(e,1);break}}};Xu.prototype.w=function(a){for(var c=0,d=this.b.length;c<d;c++){var e=this.b[c];"catc"==e.o&&e.w.call(e.b,a)}};
var Yu=function(a,c){var d={};d._sn=["v.gas",c].join(".");_.eh(a,d)},Zu=["gbq1","gbq2","gbqfbwa"],av=function(a){this.A=new Xu;this.F=a;this.D=[{id:"t",max:900},{id:"f"}];this.b=$u(a.offsetWidth,this.D);this.G=new _.Rj(_.Uj(),10);_.O(this.G,"b",function(){window.requestAnimationFrame?window.requestAnimationFrame((0,_.u)(this.C,this)):this.C()},!1,this)},$u=function(a,c){for(var d=0,e=c.length-1,f=c[0];d<e;){if(a<=f.max)return f.id;f=c[++d]}return c[e].id}; av.prototype.C=function(){var a=$u(this.F.offsetWidth,this.D);a!=this.b&&(this.b=a,this.w(new Vu))};av.prototype.o=function(a,c,d){this.A.o(a,c,d)};av.prototype.B=function(a,c){this.A.B(a,c)};av.prototype.w=function(a){this.A.w(a)};
var bv,dv,ev,fv,gv;bv=null;_.cv=function(){if(null!=bv)return bv;var a=document.body.style;if(!(a="flexGrow"in a||"webkitFlexGrow"in a))a:{if(a=window.navigator.userAgent){var c=/Trident\/(\d+)/.exec(a);if(c&&7<=Number(c[1])){a=/\bMSIE (\d+)/.exec(a);a=!a||"10"==a[1];break a}}a=!1}return bv=a};
dv=function(a,c,d){var e=NaN;window.getComputedStyle&&(a=window.getComputedStyle(a,null).getPropertyValue(c))&&"px"==a.substr(a.length-2)&&(e=d?parseFloat(a.substr(0,a.length-2)):parseInt(a.substr(0,a.length-2),10));return e};
ev=function(a){var c=a.offsetWidth,d=dv(a,"width");if(!isNaN(d))return c-d;var e=a.style.padding,f=a.style.paddingLeft,g=a.style.paddingRight;a.style.padding=a.style.paddingLeft=a.style.paddingRight=0;d=a.clientWidth;a.style.padding=e;a.style.paddingLeft=f;a.style.paddingRight=g;return c-d};
fv=function(a){var c=dv(a,"min-width");if(!isNaN(c))return c;var d=a.style.width,e=a.style.padding,f=a.style.paddingLeft,g=a.style.paddingRight;a.style.width=a.style.padding=a.style.paddingLeft=a.style.paddingRight=0;c=a.clientWidth;a.style.width=d;a.style.padding=e;a.style.paddingLeft=f;a.style.paddingRight=g;return c};gv=function(a,c){c||-.5!=a-Math.round(a)||(a-=.5);return Math.round(a)};_.hv=function(a){if(a){var c=a.style.opacity;a.style.opacity=".99";_.Bb(a.offsetWidth);a.style.opacity=c}};
var iv=function(a){_.M.call(this);this.b=a;this.o=[];this.w=[]};_.x(iv,_.M);iv.prototype.R=function(){iv.J.R.call(this);this.b=null;for(var a=0;a<this.o.length;a++)this.o[a].ia();for(a=0;a<this.w.length;a++)this.w[a].ia();this.o=this.w=null};
iv.prototype.ub=function(a){void 0==a&&(a=this.b.offsetWidth);for(var c=ev(this.b),d=[],e=0,f=0,g=0,h=0,l=0;l<this.o.length;l++){var q=this.o[l],r=jv(q),z=ev(q.b);d.push({item:q,Ub:r,lj:z,fd:0});e+=r.wd;f+=r.Md;g+=r.Gc;h+=z}a=a-h-c-g;e=0<a?e:f;f=a;c=d;do{g=!0;h=[];for(l=q=0;l<c.length;l++){r=c[l];z=0<f?r.Ub.wd:r.Ub.Md;var D=0==e?0:z/e*f+r.fd;D=gv(D,g);g=!g;r.fd=kv(r.item,D,r.lj,r.Ub.Gc);0<z&&D==r.fd&&(h.push(r),q+=z)}c=h;f=a-(0,_.Pa)(d,function(a,c){return a+c.fd},0);e=q}while(0!=f&&0!=c.length);
for(l=0;l<this.w.length;l++)this.w[l].ub()};var mv=function(a){var c={};c.items=(0,_.Oa)(a.o,function(a){return lv(a)});c.children=(0,_.Oa)(a.w,function(a){return mv(a)});return c},nv=function(a,c){for(var d=0;d<a.o.length;d++)a.o[d].b.style.width=c.items[d];for(d=0;d<a.w.length;d++)nv(a.w[d],c.children[d])};iv.prototype.M=function(){return this.b};
var ov=function(a,c,d,e){iv.call(this,a);this.B=c;this.C=d;this.A=e};_.x(ov,iv);
var jv=function(a,c){var d=a.B,e=a.C;if(-1==a.A){var f=c;void 0==f&&(f=ev(a.b));c=lv(a);var g=mv(a),h=dv(a.b,"width",!0);isNaN(h)&&(h=a.b.offsetWidth-f);f=Math.ceil(h);a.b.style.width=c;nv(a,g);a=f}else a=a.A;return{wd:d,Md:e,Gc:a}},kv=function(a,c,d,e){void 0==d&&(d=ev(a.b));void 0==e&&(e=jv(a,d).Gc);c=e+c;0>c&&(c=0);a.b.style.width=c+"px";d=a.b.offsetWidth-d;a.b.style.width=d+"px";return d-e},lv=function(a){var c=a.b.style.width;a.b.style.width="";return c};
var pv=function(a,c,d){var e;void 0==e&&(e=-1);return{className:a,Ub:{wd:c||0,Md:d||0,Gc:e}}},qv={className:"gb_If",items:[pv("gb_Rb"),pv("gb_4f"),pv("gb_Df",0,2),pv("gb_5f"),pv("gb_Ja",1,1)],Sb:[{className:"gb_Ja",items:[pv("gb_ce",0,1),pv("gb_mc",0,1)],Sb:[function(a){a=a.gb_ce;if(a)var c=a.M();else{c=document.querySelector(".gb_ce");if(!c)return null;a=new iv(c)}c=c.querySelectorAll(".gb_e");for(var d=0;d<c.length;d++){var e=new ov(c[d],0,0,-1);a.o.push(e)}return a},{className:"gb_mc",items:[pv("gb_w"),
pv("gb_uc"),pv("shareboxWidget"),pv("gb_Ea",0,1),pv("gb_8f"),pv("gb_Ba",0,1),pv("gb_9f")],Sb:[{className:"gb_Ea",items:[pv("gb_Ia",0,1)],Sb:[{className:"gb_Ia",items:[pv("gb_Da",0,1)],Sb:[]}]}]}]},{className:"gb_2f",items:[pv("gbqff",1,1),pv("gb_1f")],Sb:[]}]},rv=function(a,c){if(!c){c=document.querySelector("."+a.className);if(!c)return null;c=new iv(c)}for(var d={},e=0;e<a.items.length;e++){var f=a.items[e],g;if(g=(g=document.querySelector("."+f.className))?new ov(g,f.Ub.wd,f.Ub.Md,f.Ub.Gc):null)c.o.push(g), d[f.className]=g}for(e=0;e<a.Sb.length;e++){f=a.Sb[e];var h;"function"==typeof f?h=f(d):h=rv(f,d[f.className]);h&&c.w.push(h)}return c};
_.tv=function(a,c){_.M.call(this);this.N=c;this.o=document.getElementById("gb");this.C=(this.b=document.querySelector(".gb_Ja"))?this.b.querySelector(".gb_mc"):null;this.B=[];this.D=_.L(_.E(a,5),60);this.F=_.E(a,4);this.L=_.L(_.E(a,2),152);this.G=_.L(_.E(a,1),30);this.A=null;this.Tf=_.J(_.F(a,3),!0);this.o&&this.F&&(this.o.style.minWidth=this.F+"px");this.w=null;this.o&&(this.w=new av(this.o));this.Tf&&(this.o&&(sv(this),_.T(this.o,"gb_Ef"),this.b&&_.T(this.b,"gb_Ef"),_.cv()||(this.A=rv(qv))),this.ub(),
window.setTimeout((0,_.u)(this.ub,this),0));_.w("gbar.elc",(0,_.u)(this.oj,this));_.w("gbar.ela",_.xa);_.w("gbar.elh",(0,_.u)(this.Kg,this))};_.x(_.tv,_.M);_.Jc(_.tv,"el");var uv=function(){var a=_.tv.Fj();return{es:a?{f:a.L,h:a.D,m:a.G}:{f:152,h:60,m:30},mo:"md",vh:window.innerHeight||0,vw:window.innerWidth||0}};_.k=_.tv.prototype;_.k.R=function(){_.tv.J.R.call(this)};_.k.ub=function(a){a&&sv(this);this.A&&this.A.ub(Math.max(document.documentElement.clientWidth,fv(this.o)));_.hv(this.b)};
_.k.oi=function(){try{var a=document.getElementById("gb"),c=a.querySelector(".gb_Ja");_.U(a,"gb_qg");c&&_.U(c,"gb_qg");a=0;for(var d;d=Zu[a];a++){var e=document.getElementById(d);e&&_.U(e,"gbqfh")}}catch(f){Yu(f,"rhcc")}this.H&&this.H();this.ub(!0)};_.k.tj=function(){try{var a=document.getElementById("gb"),c=a.querySelector(".gb_Ja");_.T(a,"gb_qg");c&&_.T(c,"gb_qg");a=0;for(var d;d=Zu[a];a++){var e=document.getElementById(d);e&&_.T(e,"gbqfh")}}catch(f){Yu(f,"ahcc")}this.ub(!0)};
_.k.Hj=function(){this.w&&this.w.C()};_.k.oj=function(a){this.B.push(a)};_.k.Kg=function(a){this.D=uv().es.h+a;for(a=0;a<this.B.length;a++)try{this.B[a](uv())}catch(c){this.N.log(c)}};var sv=function(a){if(a.b){var c;a.A&&(c=mv(a.A));_.T(a.b,"gb_Ka");a.b.style.minWidth=a.b.offsetWidth-ev(a.b)+"px";a.C.style.minWidth=a.C.offsetWidth-ev(a.C)+"px";_.U(a.b,"gb_Ka");c&&nv(a.A,c)}};
_.oh(function(){var a=_.I(_.Q(),Uu,21)||new Uu,c=_.jh();a=new _.tv(a,c);_.Mc("el",a);_.w("gbar.gpca",(0,_.u)(a.tj,a));_.w("gbar.gpcr",(0,_.u)(a.oi,a))});_.w("gbar.elr",uv);
}catch(e){_._DumpException(e)}
try{
_.oh(function(){var a=document.querySelector(".gb_Tb");a&&_.Kc("eq").He(a,"click")});
}catch(e){_._DumpException(e)}
try{
var il;_.hl=function(a,c,d){return _.fl("POST",a,c,d).then(function(a){return _.gl(a.responseText,d)})};
_.fl=function(a,c,d,e){var f=e||{},g=f.Jj?f.Jj.b():_.oe.b();return _.Te(new _.Oe(function(e,l){var h;try{g.open(a,c,!0)}catch(D){l(new il("Error opening XHR: "+D.message,c,g))}g.onreadystatechange=function(){if(4==g.readyState){_.m.clearTimeout(h);var a;!(a=_.le(g.status))&&(a=0===g.status)&&(a=_.Of(c),a=!("http"==a||"https"==a||""==a));a?e(g):l(new _.jl(g.status,c,g))}};g.onerror=function(){l(new il("Network error",c,g))};if(f.headers){for(var r in f.headers){var z=f.headers[r];null!=z&&g.setRequestHeader(r,
z)}z=f.headers["Content-Type"]}r=_.m.FormData&&d instanceof _.m.FormData;"POST"!=a||void 0!==z||r||g.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=utf-8");f.withCredentials&&(g.withCredentials=f.withCredentials);f.responseType&&(g.responseType=f.responseType);f.mimeType&&g.overrideMimeType(f.mimeType);0<f.Se&&(h=_.m.setTimeout(function(){g.onreadystatechange=_.xa;g.abort();l(new kl(c,g))},f.Se));try{g.send(d)}catch(D){g.onreadystatechange=_.xa,_.m.clearTimeout(h),l(new il("Error sending XHR: "+
D.message,c,g))}}),function(a){a instanceof _.Ue&&g.abort();throw a;})};_.gl=function(a,c){c&&c.Ue&&(c=c.Ue,_.Wa(a,c)&&(a=a.substring(c.length)));return JSON.parse(a)};il=function(a,c){_.Ja.call(this,a+", url="+c);this.url=c};_.x(il,_.Ja);il.prototype.name="XhrError";_.jl=function(a,c,d){il.call(this,"Request Failed, status="+a,c,d);this.status=a};_.x(_.jl,il);_.jl.prototype.name="XhrHttpError";var kl=function(a,c){il.call(this,"Request timed out",a,c)};_.x(kl,il);kl.prototype.name="XhrTimeoutError";
var ll=function(){};_.x(ll,Error);_.ml=function(){this.b="pending";this.B=[];this.w=this.C=void 0};_.xe(_.ml);var nl=function(){_.Ja.call(this,"Multiple attempts to set the state of this Result")};_.x(nl,_.Ja);_.ml.prototype.pa=function(){return this.C};_.ml.prototype.wait=function(a,c){"pending"==this.b?this.B.push({Ib:a,scope:c||null}):a.call(c,this)};_.ml.prototype.A=function(a){if("pending"==this.b)this.C=a,this.b="success",ol(this);else if(!pl(this))throw new nl;};
_.ml.prototype.o=function(a){if("pending"==this.b)this.w=a,this.b="error",ol(this);else if(!pl(this))throw new nl;};var ol=function(a){var c=a.B;a.B=[];for(var d=0;d<c.length;d++){var e=c[d];e.Ib.call(e.scope,a)}};_.ml.prototype.cancel=function(){return"pending"==this.b?(this.o(new ll),!0):!1};var pl=function(a){return"error"==a.b&&a.w instanceof ll}; _.ml.prototype.then=function(a,c,d){var e,f,g=new _.Oe(function(a,c){e=a;f=c});this.wait(function(a){pl(a)?g.cancel():"success"==a.b?e(a.pa()):"error"==a.b&&f(a.w)});return g.then(a,c,d)};_.ql=function(a){var c=new _.ml;a.then(c.A,c.o,c);return c};
_.rl=function(a){var c=new _.ml;c.A(a);return c};_.sl=function(a){var c=new _.ml;c.o(a);return c};_.tl=function(a,c,d){a.wait(c,d)};_.ul=function(a,c,d){_.tl(a,function(a){"error"==a.b&&c.call(this,a.w,a)},d)};_.wl=function(a,c){var d=new _.vl([a]);_.tl(a,function(a){"success"==a.b?(a=c.call(void 0,a),d.D.push(a),_.tl(a,function(a){"success"==a.b?d.A(a.pa()):d.o(a.w)})):d.o(a.w)});return d};_.vl=function(a){_.ml.call(this);this.D=a};_.x(_.vl,_.ml);

}catch(e){_._DumpException(e)}
try{
_.In=function(a){_.oh(function(){var c=document.querySelector("."+a);c&&(c=c.querySelector(".gb_x"))&&_.Kc("eq").He(c,"click")})};
}catch(e){_._DumpException(e)}
try{
var Zq,$q;Zq=function(a,c){return _.fl("GET",a,null,c).then(function(a){return _.gl(a.responseText,c)})};$q=function(a,c,d){_.tl(a,function(a){"success"==a.b&&c.call(this,a.pa(),a)},d)};_.ar=function(a){this.b={Se:a,withCredentials:!0,Ue:")]}'\n"}};
_.br=function(a,c,d,e,f){try{if("GET"==c)return _.ql(Zq(d,a.b));c=e||[];if(!f){if(window.__PVT)var g=window.__PVT;else throw Error("Y");c.ntok=g;if(!c.ntok){var h=new _.ml;h.o(Error("W"));return h}}var l=_.Uf(c);return _.ql(_.hl(d,l,a.b))}catch(q){return a=new _.ml,a.o(q),a}};_.cr=function(a,c,d,e){$q(a,c,e);_.ul(a,d,e)};

}catch(e){_._DumpException(e)}
try{
_.CA=_.Jb?"webkitAnimationEnd":_.Fb?"oAnimationEnd":"animationend";
}catch(e){_._DumpException(e)}
try{
_.In("gb_uc");
}catch(e){_._DumpException(e)}
try{
_.w("gbar.qfgw",(0,_.u)(document.getElementById,document,"gbqfqw"));_.w("gbar.qfgq",(0,_.u)(document.getElementById,document,"gbqfq"));_.w("gbar.qfgf",(0,_.u)(document.getElementById,document,"gbqf"));_.w("gbar.qfsb",(0,_.u)(document.getElementById,document,"gbqfb"));

}catch(e){_._DumpException(e)}
try{
var hE=[3,5],iE=function(a){_.C(this,a,0,-1,hE,null)};_.x(iE,_.B);var jE=function(a){return a.w?a.w.b:"f"},kE=function(a){this.w=_.tv.W();this.o=a};kE.prototype.b=function(a,c){"t"==jE(this.w)?(_.T(a,"gb_Ff"),c?(_.U(a,"gb_Fa"),_.T(a,"gb_ag")):(_.U(a,"gb_ag"),_.T(a,"gb_Fa"))):_.oj(a,["gb_Ff","gb_Fa","gb_ag"])};var lE=function(){var a=document.getElementsByClassName("gb_hg");return 0<a.length?a[0]:null};_.w("gbar.sos",function(){return document.querySelectorAll(".gb_3f")});_.w("gbar.si",function(){return document.querySelector(".gb_ie")}); _.w("gbar.cph",lE);_.w("gbar.tcph",function(a){var c=lE();c&&_.Mj(c,"gb_xa",!a)});
_.oh(function(){if(_.I(_.Q(),iE,16)){var a=document.querySelector(".gb_Ja"),c=_.I(_.Q(),iE,16)||new iE;c=_.J(_.F(c,1),!1);c=new kE(c);a&&c.o&&c.b(a,!1)}});var nE=function(a,c,d,e){_.xj.call(this,a,d);this.T=e;this.B=new kE(_.J(_.F(c,1),!1));this.N=_.tv.W();this.C=_.S("gb_mc",this.b);this.B.o&&(this.o=!1,_.cv()&&(_.U(this.b,"gb_Fa"),_.nj(this.b,["gb_gg","gb_Ff","gb_ag"]),this.O=_.Ji(this.b,"width"),this.U=_.Ji(this.C,"width"),d=this.b,_.U(d,"gb_ag"),_.T(d,"gb_Fa"),this.L=_.Ji(this.b,"width"),this.V=_.Ji(this.C,"width"),_.oj(this.b,["gb_gg","gb_Ff","gb_Fa"])),mE(this),d=this.N,d.w&&d.w.o("catc",this.Lh,this),this.K(_.S("gb_cg",this.b),"click",this.Ch),
this.K(_.S("gb_dg",this.b),"click",this.Wh));this.F=_.J(_.F(c,2),!1);this.G=_.J(_.F(c,4),!1);this.H=null;this.F&&(this.H=_.E(c,3));if(this.F||this.G)this.ab(a,["mouseover","touchstart"],this.If),a=new _.$i(a),this.ab(a,"focusin",this.If);(a=_.S("gb_ie",this.b))&&_.Cj(this,a,_.tj,this.ci,!1,this)};_.x(nE,_.xj);_.k=nE.prototype;_.k.ci=function(){this.T.log(9,{l:"i"})};_.k.Lh=function(){mE(this)};_.k.Ch=function(){0!=this.o&&(this.o=!1,mE(this,!0))};_.k.Wh=function(){1!=this.o&&(this.o=!0,mE(this,!0))};
_.k.If=function(){if(this.F){var a=this.H;_.rh.W().Fd(a,void 0)}this.G&&this.b.setAttribute("activated","1")};var mE=function(a,c){c=c&&_.cv();"t"==jE(a.B.w)?c?(_.nj(a.b,["gb_fg","gb_Ha"]),_.hv(a.b),a.ab(a.b,_.jf,a.P),a.D(!0),setTimeout((0,_.u)(a.B.b,a.B,a.b,a.o),0),setTimeout((0,_.u)(a.D,a,!1),0)):(a.B.b(a.b,a.o),_.cv()&&a.D(!1)):(_.U(a.b,"gb_fg"),a.B.b(a.b,a.o),c=a.b,c.style.minWidth=c.style.maxWidth="",c=a.C,c.style.minWidth=c.style.maxWidth="",a.N.ub(!0))}; nE.prototype.D=function(a){a=this.o?!a:a;var c=this.b;c.style.minWidth=c.style.maxWidth=a?this.O:this.L;c=this.C;c.style.minWidth=c.style.maxWidth=a?this.U:this.V};nE.prototype.P=function(){_.U(this.b,"gb_Ha")};
_.oh(function(){var a=_.I(_.Q(),iE,16)||new iE,c=_.S("gb_Ja");if(a&&c){var d=_.jh(),e=_.Eh();new nE(c,a,d,e);_.F(a,4)&&(d=function(){var c=_.E(a,5);_.th(_.rh.W(),c,void 0)},"1"==c.getAttribute("activated")?d():(_.xf(c,["mouseover","touchstart"],d),c=new _.$i(c),_.xf(c,"focusin",d)))}});

}catch(e){_._DumpException(e)}
try{
var Pt=function(a){_.M.call(this);this.C=a;this.A=this.w=null;this.b={};this.B={};this.o={}};_.x(Pt,_.M);var Qt=function(a){if(a.w)return a.w;for(var c in a.o)if(a.o[c].Of()&&a.o[c].Bb())return a.o[c];return null};_.k=Pt.prototype;_.k.Me=function(a){a&&Qt(this)&&a!=Qt(this)&&Qt(this).Gd(!1);this.w=a};_.k.Vf=function(a){a=this.o[a]||a;return Qt(this)==a};_.k.yj=function(a){this.A=a};_.k.Uf=function(a){return this.A==a};_.k.ce=function(){Qt(this)&&Qt(this).Gd(!1);this.Me(null)};
_.k.Qg=function(a){Qt(this)&&Qt(this).getId()==a&&this.ce()};_.k.Ec=function(a,c,d){this.b[a]=this.b[a]||{};this.b[a][c]=this.b[a][c]||[];this.b[a][c].push(d)};_.k.ae=function(a,c){c=c.getId();if(this.b[a]&&this.b[a][c])for(var d=0;d<this.b[a][c].length;d++)try{this.b[a][c][d]()}catch(e){this.C.log(e)}};_.k.Aj=function(a,c){this.B[a]=c};_.k.Og=function(a){return!this.B[a.getId()]};_.k.xi=function(){return!!Qt(this)&&Qt(this).Pf()};_.k.Ng=function(){return!!Qt(this)};_.k.dg=function(){Qt(this)&&Qt(this).ye()};
_.k.Cj=function(a){this.o[a]&&(Qt(this)&&Qt(this).getId()==a||this.o[a].Gd(!0))};_.k.ze=function(a){this.o[a.getId()]=a};var Rt=new Pt(_.jh());_.Mc("dd",Rt);_.w("gbar.close",(0,_.u)(Rt.ce,Rt));_.w("gbar.cls",(0,_.u)(Rt.Qg,Rt));_.w("gbar.abh",(0,_.u)(Rt.Ec,Rt,0));_.w("gbar.adh",(0,_.u)(Rt.Ec,Rt,1));_.w("gbar.ach",(0,_.u)(Rt.Ec,Rt,2));_.w("gbar.aeh",(0,_.u)(Rt.Aj,Rt));_.w("gbar.bsy",(0,_.u)(Rt.xi,Rt));_.w("gbar.op",(0,_.u)(Rt.Ng,Rt));

}catch(e){_._DumpException(e)}
try{
var Jn=document.querySelector(".gb_w"),Kn=/(\s+|^)gb_Zf(\s+|$)/;Jn&&!Kn.test(Jn.className)&&_.In("gb_w");
}catch(e){_._DumpException(e)}
try{
_.In("gb_Ea");
}catch(e){_._DumpException(e)}
try{
_.Cw=function(a){_.C(this,a,0,-1,null,null)};_.x(_.Cw,_.B);_.Cw.prototype.Ta=function(){return _.E(this,5)};_.Dw=function(){return _.I(_.Q(),_.Cw,2)};
}catch(e){_._DumpException(e)}
})(this.gbar_);
// Google Inc.
</script><link rel="stylesheet"
      
      href="//fonts.googleapis.com/css?family=Google+Sans:400,500|Roboto:400,400italic,500,500italic,700,700italic|Roboto+Mono:400,500,700|Material+Icons"
      ><link rel="stylesheet"
        href="https://developers.google.com/_static/16eb031c2e/css/devsite-google-blue.css"><link rel="search"
        type="application/opensearchdescription+xml"
        title="Google Developers"
        href="https://developers.google.com/s/opensearch.xml"><script src="https://developers.google.com/_static/16eb031c2e/js/jquery-bundle.js"></script><meta property="og:site_name" content="Google Developers"><meta property="og:type" content="website"><meta property="og:url" content="https://developers.google.com/recaptcha/docs/v3"><meta property="og:locale" content="en"><script>
    var ___gcfg = ___gcfg || {};
    ___gcfg.lang = 'en';
  </script><title>reCAPTCHA v3 &nbsp;|&nbsp; reCAPTCHA
      &nbsp;|&nbsp; Google Developers</title><meta property="og:title" content="reCAPTCHA v3 &nbsp;|&nbsp; reCAPTCHA
      &nbsp;|&nbsp; Google Developers"><meta property="og:image"
          content="https://developers.google.com/_static/16eb031c2e/images/share/devsite-google-blue.png"><meta property="og:image:secure_url"
          content="https://developers.google.com/_static/16eb031c2e/images/share/devsite-google-blue.png"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"></head><body class="
               devsite-doc-page
               
               
               
               devsite-header-no-upper-tabs
               "
        data-family="endorsed"
        
        
        
        id="top_of_page"><div class="devsite-wrapper"><div class="devsite-top-section-wrapper
            "><header class="devsite-top-section nocontent"><div class="devsite-top-logo-row-wrapper-wrapper"><div class="devsite-top-logo-row-wrapper"><div class="devsite-top-logo-row devsite-full-site-width"><button type="button" class="devsite-expand-section-nav devsite-header-icon-button
                                       button-flat material-icons gc-analytics-event"
                  data-category="Site-Wide Custom Events" data-label="Hamburger menu"></button><div class="devsite-product-name-wrapper"><a class="devsite-product-name-link gc-analytics-event"
       href="https://developers.google.com/recaptcha/"
       data-category="Site-Wide Custom Events"
       data-label="Project logo (header)"><img src="https://www.gstatic.com/images/icons/material/product/2x/recaptcha_48dp.png" class="devsite-product-logo"
               alt="reCAPTCHA"></a><span class="devsite-product-name"><ul class="devsite-breadcrumb-list"><li class="devsite-breadcrumb-item"><a href="https://developers.google.com/recaptcha/" class="devsite-breadcrumb-link gc-analytics-event"
       data-category="Site-Wide Custom Events" data-label="Upper Header"
       data-value="1">
    
    
      
        reCAPTCHA
      
    
    
    </a></li></ul></span></div><div class="devsite-header-upper-tabs"></div><form class="devsite-search-form"
                action="https://developers.google.com/s/results/"
                method="GET"
                id="top-search"
                search-placeholder='Search'><div id="searchbox" class="devsite-searchbox"><input placeholder='Search'
         
         type="text"
         class="devsite-search-field devsite-search-query"
         name="q"
         value=""
         autocomplete="off"
         
         aria-label="Search box"
         ><div class="devsite-search-image material-icons"></div></div><input type="hidden"
       name="p"
       id="search_project"
       value="/recaptcha/"
       data-project-name="reCAPTCHA"
       data-project-path="/recaptcha/"
       data-query-match=""><input type="hidden" class="suggest-project" value="reCAPTCHA" /><div class="suggest-project-metadata" data-home_url="/recaptcha/" data-path="/recaptcha/" data-name="reCAPTCHA" ></div></form><a class="devsite-header-link devsite-top-button button gc-analytics-event"
               
               href="https://developers.google.com/products/"
               
               data-category="Site-Wide Custom Events"
               data-label="Site header link"
               track-type="globalNav"
               track-name="all products"
               track-metadata-position="nav"
               track-metadata-eventDetail='nav'><div class="devsite-header-link-label">All Products</div></a><button type="button" class="devsite-search-button devsite-header-icon-button button-flat
                                       material-icons"></button><div class="devsite-settings-menu-wrapper"><button class="devsite-settings-kabob devsite-header-icon-button button-flat material-icons"
      
      title="User settings">more_vert</button><div class="devsite-settings-menu devsite-hidden"><ul><li><a target="_blank" rel="noopener" class="devsite-settings-menu-link"
           
           aria-label="Change high contrast setting"
           href="https://myaccount.google.com/accessibility/highcontrast?continue=https://developers.google.com/recaptcha/docs/v3?update_high_contrast=true">
           
           Change high contrast setting</a></li></ul></div></div><img src="https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s48-c-mo/photo.jpg"
     class="devsite-user-avatar gc-analytics-event" data-category="Site-Wide Custom Events"
     data-label="User avatar" tabindex="0" alt="Account profile picture"><div class="devsite-user-dropdown"><div class="gb_ig gb_Aa" ng-non-bindable="" id="gb"><div class="gb_If gb_ng"><div class="gb_Ja gb_ng gb_f gb_mg" data-ogsr-up=""><div class="gb_mc gb_ng gb_f"><div class="gb_z" id="gbsfw" style="background-color:#eee;min-width:376px"></div><div class="gb_Ea gb_Tc gb_ng gb_f"><div class="gb_xc gb_Ia gb_ng gb_f"><a class="gb_x gb_Da gb_f gb_za" href="https://accounts.google.com/SignOutOptions?hl=en&amp;continue=https://developers.google.com/recaptcha/docs/v3" role="button" tabindex="0" title="Google Account: 16mscit006@gmail.com">16mscit006@gmail.com<span class="gb_Ca" aria-hidden="true"></span></a><div class="gb_Sa"></div><div class="gb_Ra"></div></div><div class="gb_Ta gb_z" aria-label="Account Information" aria-hidden="true"><div class="gb_1a"><a class="gb_2a gb_Xf" aria-label="Change profile picture." href="https://myaccount.google.com/?utm_source=OGB&amp;authuser=0" target="_blank"><div class="gb_4a" style="position:relative"><div class="gb_5a gbip" title="Profile"></div><span class="gb_La">Change</span></div></a><div class="gb_3a"><div class="gb_9a gb_ab">Sagar kumar chauhan</div><div class="gb_bb">16mscit006@gmail.com</div><div class="gb_Tf gb_Za"><a href="https://plus.google.com/u/0/me?authuser=0" target="_blank">Google+ Profile</a><span aria-hidden="true">&ndash;</span><a href="https://myaccount.google.com/privacypolicy" target="_blank">Privacy</a></div><a class="gb_0 gb_Uf gbp1 gb_Be gb_gb" href="https://myaccount.google.com/?utm_source=OGB&amp;authuser=0&amp;utm_medium=act" target="_blank">Google Account</a></div></div><div class="gb_ob"><div class="gb_sb gb_qb" aria-hidden="false"><a class="gb_ub gb_Bb" href="https://developers.google.com/recaptcha/docs/v3?authuser=0" rel="noreferrer" target="_blank"><img class="gb_Db gb_4a" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Profile" data-src="https://lh3.googleusercontent.com/-ingP7KdbmeM/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3re9HSbpq05fI5-h238KU8eR_Pw-aQ/s48-c-mo/photo.jpg"><div class="gb_wb"><div class="gb_Eb">Sagar kumar chauhan</div><div class="gb_Fb">16mscit006@gmail.com (default)</div></div></a><a class="gb_ub" href="https://developers.google.com/recaptcha/docs/v3?authuser=1" rel="noreferrer" target="_blank"><img class="gb_Db gb_4a" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Profile" data-src="https://lh3.googleusercontent.com/-XM4p7_hlP58/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rczaOGEmcpowrXOVpngw9mTIqklfg/s48-c-mo/photo.jpg"><div class="gb_wb"><div class="gb_Eb">Khushbu Solanki</div><div class="gb_Fb">khushbusolanki49257@gmail.com</div></div></a></div><a class="gb_Ib gb_wa" href="https://myaccount.google.com/brandaccounts?authuser=0&amp;continue=https://developers.google.com/recaptcha/docs/v3&amp;service=https://developers.google.com/recaptcha/docs/v3%3Fauthuser%3D%24authuser" aria-hidden="true"><span class="gb_Jb gb_Vb"></span><div class="gb_Kb">All your Brand Accounts &raquo;</div></a></div><div class="gb_0f gb_Ma gb_wa"><div class="gb_Na"></div></div><div class="gb_Sf gb_fb"><div><a class="gb_0 gb_Rf gb_Be gb_gb" href="https://accounts.google.com/AddSession?service=ahsid&amp;continue=https://developers.google.com/recaptcha/docs/v3" target="_blank">Add account</a></div><div><a class="gb_0 gb_Vf gb_3f gb_Be gb_gb" id="gb_71" href="https://accounts.google.com/Logout?continue=https://developers.google.com/recaptcha/docs/v3&amp;service=ahsid" target="_top">Sign out</a></div></div></div></div></div></div></div><div id="gbw"></div></div><div class="gb_wd gb_Aa" id="gba"></div></div></div></div></div><div class="devsite-collapsible-section"><div class="devsite-header-background devsite-full-site-width"><div class="devsite-doc-set-nav-row devsite-full-site-width"><nav class="devsite-doc-set-nav devsite-nav devsite-overflow-tabs-scroll-wrapper"><ul class="devsite-doc-set-nav-tab-list devsite-overflow-tabs-scroll"><li class="devsite-doc-set-nav-tab-container devsite-nav-tab
                 "><a href="https://developers.google.com/recaptcha/"
           class=" devsite-nav-tab
                  devsite-doc-set-nav-tab devsite-doc-set-nav-tab-link gc-analytics-event"
           
         
           data-category="Site-Wide Custom Events"
         
           data-label="Tab: Home"
         >
          Home
        </a></li><li class="devsite-doc-set-nav-tab-container devsite-nav-tab
                 "><a href="https://developers.google.com/recaptcha/intro"
           class="devsite-doc-set-nav-active devsite-nav-tab
                  devsite-doc-set-nav-tab devsite-doc-set-nav-tab-link gc-analytics-event"
           aria-label="Guides, selected"
         
           data-category="Site-Wide Custom Events"
         
           data-label="Tab: Guides"
         >
          Guides
        </a></li><li class="devsite-doc-set-nav-tab-container devsite-nav-tab
                 "><a href="https://developers.google.com/recaptcha/docs/faq"
           class=" devsite-nav-tab
                  devsite-doc-set-nav-tab devsite-doc-set-nav-tab-link gc-analytics-event"
           
         
           data-category="Site-Wide Custom Events"
         
           data-label="Tab: Support"
         >
          Support
        </a></li></ul></nav></div></div></div></header><script>
    if (window.jQuery) {
      $(document).ready(function() {
        if (window.devsite && window.devsite.search) {
          
          window.devsite.search.init('en')
        }
      });
    }
  </script></div><div id="gc-wrapper"itemscope itemtype="http://schema.org/Article"><input class="google-analytics-id-json" type="hidden" value="{&quot;dimensions&quot;: {&quot;dimension6&quot;: &quot;en&quot;, &quot;dimension4&quot;: &quot;reCAPTCHA&quot;, &quot;dimension5&quot;: &quot;en&quot;, &quot;dimension3&quot;: false, &quot;dimension1&quot;: &quot;Signed In&quot;, &quot;dimension8&quot;: null}, &quot;gaid&quot;: &quot;UA-24532603-1&quot;}"><input class="google-analytics-id-json" type="hidden" value="{&quot;dimensions&quot;: {}, &quot;gaid&quot;: &quot;UA-18267335-2&quot;}"><script>
      var dataLayer = [{"freeTrialEligibleUser": "False", "userCountry": "IN", "language": {"requested": "en", "served": "en"}, "projectName": "reCAPTCHA", "scriptsafe": null, "signedIn": "True", "internalUser": "False"}];
    </script>

      
        <div class="devsite-site-mask"></div>
        
  


<nav class="devsite-nav-responsive devsite-nav nocontent" tabindex="0">
  
  <div class="devsite-nav-responsive-tabs-panel">
    
      



<nav class="devsite-nav-responsive-tabs devsite-nav">
  <ul class="devsite-nav-list">
  

  
    <li class="devsite-nav-item devsite-nav-item-heading">
      
        <a 
             href="https://developers.google.com/recaptcha/"
           
           class="devsite-nav-responsive-tab devsite-nav-title gc-analytics-event
                  "
           
           data-category="Site-Wide Custom Events" data-label="Responsive Tab: Home">
          Home
        </a>
      

      

      

      
    </li>
  
    <li class="devsite-nav-item devsite-nav-item-heading">
      
        <span class="devsite-nav-responsive-forward devsite-nav-responsive-tab devsite-nav-title
                     devsite-nav-active gc-analytics-event"
              data-category="Site-Wide Custom Events" data-label="Responsive Tab: Guides"
              tabindex="0">
          Guides
        </span>
      

      

      

      
    </li>
  
    <li class="devsite-nav-item devsite-nav-item-heading">
      
        <a 
             href="https://developers.google.com/recaptcha/docs/faq?nav=true"
           
           class="devsite-nav-responsive-tab devsite-nav-title gc-analytics-event
                  "
           
           data-category="Site-Wide Custom Events" data-label="Responsive Tab: Support">
          Support
        </a>
      

      

      

      
    </li>
  

  
    <li class="devsite-nav-item devsite-nav-item-heading">
      <a href="https://developers.google.com/products/"
         class="devsite-nav-responsive-tab devsite-nav-title gc-analytics-event"
         data-category="Site-Wide Custom Events"
         data-label="Responsive Tab: all_products"
         >
        All Products
      </a>
    </li>
  
  </ul>
</nav>


    
  </div>
  
  
  <div class="devsite-nav-responsive-sidebar-panel">
    
    <div class="devsite-nav-responsive-back" tabindex="0"></div>
    
    <nav class="devsite-nav-responsive-sidebar">
      
      
    </nav>
  </div>
  
  
</nav>


        <div class="devsite-main-content clearfix">

        
        

        
  
  
    
    
      
  <nav class="devsite-section-nav devsite-nav nocontent">
    <ul class="devsite-nav-list"><li class="devsite-nav-item devsite-nav-item-heading"><span class="devsite-nav-title devsite-nav-title-no-path" aria-label="Get Started, click to expand/collapse" role="link">Get Started</span><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/intro" class="devsite-nav-title">Introduction</a></li><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/docs/versions" class="devsite-nav-title">Choose a Type</a></li></li><li class="devsite-nav-item devsite-nav-item-heading"><span class="devsite-nav-title devsite-nav-title-no-path" aria-label="reCAPTCHA v3, click to expand/collapse" role="link">reCAPTCHA v3</span><li class="devsite-nav-item devsite-nav-new devsite-nav-has-status devsite-nav-active"><a href="https://developers.google.com/recaptcha/docs/v3" class="devsite-nav-title"><span class="devsite-nav-text">reCAPTCHA v3</span><span class="devsite-nav-icon-wrapper"><span class="devsite-nav-icon material-icons" title="New!"></span></span></a></li></li><li class="devsite-nav-item devsite-nav-item-heading"><span class="devsite-nav-title devsite-nav-title-no-path" aria-label="reCAPTCHA v2, click to expand/collapse" role="link">reCAPTCHA v2</span><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/docs/display" class="devsite-nav-title">Checkbox</a></li><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/docs/invisible" class="devsite-nav-title">Invisible</a></li><li class="devsite-nav-item"><a href="https://developer.android.com/training/safetynet/recaptcha.html" class="devsite-nav-title">Android</a></li></li><li class="devsite-nav-item devsite-nav-item-heading"><span class="devsite-nav-title devsite-nav-title-no-path" aria-label="Server Side Validation, click to expand/collapse" role="link">Server Side Validation</span><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/docs/verify" class="devsite-nav-title">Verify the User’s Response</a></li><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/docs/domain_validation" class="devsite-nav-title">Domain/Package Name Validation</a></li></li><li class="devsite-nav-item devsite-nav-item-heading"><span class="devsite-nav-title devsite-nav-title-no-path" aria-label="Admin Console, click to expand/collapse" role="link">Admin Console</span><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/docs/settings" class="devsite-nav-title">Settings</a></li><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/docs/analytics" class="devsite-nav-title">Analytics</a></li></li><li class="devsite-nav-item devsite-nav-item-heading"><span class="devsite-nav-title devsite-nav-title-no-path" aria-label="Additional Settings, click to expand/collapse" role="link">Additional Settings</span><li class="devsite-nav-item"><a href="https://developers.google.com/recaptcha/docs/language" class="devsite-nav-title">Language Codes</a></li></li></ul>
  </nav>

    

    
  <nav class="devsite-page-nav devsite-nav"></nav>


      <article class="devsite-article">
        <article class="devsite-article-inner">
  
          
  


<div class="devsite-rating-container
            "><div class="devsite-rating-stars"><div class="devsite-rating-star devsite-rating-star-outline gc-analytics-event material-icons"
         data-rating-val="1" data-category="Site-Wide Custom Events" data-label="Star Rating 1"
         track-metadata-score="1" track-type="feedback" track-name="rating"
         track-metadata-position="header"
         role="button"
         
         aria-label="Site content star ratings, rating 1 out of 5"></div><div class="devsite-rating-star devsite-rating-star-outline gc-analytics-event material-icons"
         data-rating-val="2" data-category="Site-Wide Custom Events" data-label="Star Rating 2"
         track-metadata-score="2" track-type="feedback" track-name="rating"
         track-metadata-position="header"
         role="button"
         
         aria-label="Site content star ratings, rating 2 out of 5"></div><div class="devsite-rating-star devsite-rating-star-outline gc-analytics-event material-icons"
         data-rating-val="3" data-category="Site-Wide Custom Events" data-label="Star Rating 3"
         track-metadata-score="3" track-type="feedback" track-name="rating"
         track-metadata-position="header"
         role="button"
         
         aria-label="Site content star ratings, rating 3 out of 5"></div><div class="devsite-rating-star devsite-rating-star-outline gc-analytics-event material-icons"
         data-rating-val="4" data-category="Site-Wide Custom Events" data-label="Star Rating 4"
         track-metadata-score="4" track-type="feedback" track-name="rating"
         track-metadata-position="header"
         role="button"
         
         aria-label="Site content star ratings, rating 4 out of 5"></div><div class="devsite-rating-star devsite-rating-star-outline gc-analytics-event material-icons"
         data-rating-val="5" data-category="Site-Wide Custom Events" data-label="Star Rating 5"
         track-metadata-score="5" track-type="feedback" track-name="rating"
         track-metadata-position="header"
         role="button"
         
         aria-label="Site content star ratings, rating 5 out of 5"></div></div><div class="devsite-rating-description"></div><div class="devsite-rating-internal"><span class="devsite-rating-stats"></span></div></div><script>
  $(document).ready(function() {
    devsite.ratings.init(
      document.querySelectorAll('#devsite-feedback-project'), false
      
    );
  });
</script>


  
  <nav class="devsite-breadcrumb-nav devsite-nav">
    


<ul class="devsite-breadcrumb-list">
  
  <li class="devsite-breadcrumb-item">
    
    
    <a href="https://developers.google.com/products/" class="devsite-breadcrumb-link gc-analytics-event"
       data-category="Site-Wide Custom Events" data-label="Breadcrumbs"
       data-value="1">
    
    
      Products
    
    
    </a>
    
  </li>
  
  <li class="devsite-breadcrumb-item">
    
    
    <div class="devsite-breadcrumb-guillemet material-icons"></div>
    
    
    <a href="https://developers.google.com/recaptcha/" class="devsite-breadcrumb-link gc-analytics-event"
       data-category="Site-Wide Custom Events" data-label="Breadcrumbs"
       data-value="2">
    
    
      reCAPTCHA
    
    
    </a>
    
  </li>
  
  <li class="devsite-breadcrumb-item">
    
    
    <div class="devsite-breadcrumb-guillemet material-icons"></div>
    
    
    <a href="https://developers.google.com/recaptcha/intro" class="devsite-breadcrumb-link gc-analytics-event"
       data-category="Site-Wide Custom Events" data-label="Breadcrumbs"
       data-value="3">
    
    
      Guides
    
    
    </a>
    
  </li>
  
</ul>

  </nav>
  
  
  <h1 itemprop="name" class="devsite-page-title">
    reCAPTCHA v3
  </h1>
  
  
  <nav class="devsite-page-nav-embedded devsite-nav"></nav>
  
  <div class="devsite-article-body clearfix
            "
       itemprop="articleBody">
    

<p>reCAPTCHA v3 returns a score for each request without user friction. The score is based on
  interactions with your site and enables you to take an appropriate action for your site.
  Register reCAPTCHA v3 keys <a href="https://g.co/recaptcha/v3">here</a>.</p>

<p>This page explains how to enable and customize reCAPTCHA v3 on your webpage.</p>

<h2 id="integration">Frontend integration</h2>

<pre class="prettyprint">
  &lt;script src="https://www.google.com/recaptcha/api.js?render=<i>reCAPTCHA_site_key</i>"&gt;&lt;/script&gt;
  &lt;script&gt;
  grecaptcha.ready(function() {
      grecaptcha.execute('<i>reCAPTCHA_site_key</i>', {action: '<i>homepage</i>'}).then(function(token) {
         <i>...</i>
      });
  });
  &lt;/script&gt;
</pre>

<ol>
  <li>Load the JavaScript api with your sitekey</li>
  <li>Call grecaptcha.execute on an action or when the page loads</li>
  <li>Send the token to your backend with the request to <a href="https://developers.google.com/recaptcha/docs/verify">verify</a></li>
</ol>

<h3>Tips</h3>
<p>grecaptcha.ready() will run your function as soon as the reCAPTCHA library has loaded.
To avoid race conditions with the api.js, either include the api.js before your scripts that call grecaptcha,
or you can continue to use the <a href="https://developers.google.com/recaptcha/docs/display#explicit_render">onload callback</a> defined with the v2 API.</p>

<h2 id="placement">Placement on your website</h2>

<p>reCAPTCHA v3 will never interrupt your users, so you can run it whenever you like
   without affecting conversion. reCAPTCHA works best when it has the most context about interactions
   with your site, which comes from seeing both legitimate and abusive behavior. For this reason,
   we recommend including reCAPTCHA verification on forms or actions as well as in the background of pages for analytics.</p>

<p><b>Note:</b> You can execute reCAPTCHA as many times as you'd like with different actions on the same page.</p>

<h2 id="score">Interpreting the score</h2>

<p>reCAPTCHA v3 returns a score (1.0 is very likely a good interaction, 0.0 is very likely a bot). Based on the score,
   you can take variable action in the context of your site. Every site is different, but below are some examples of how sites use the score.
   As in the examples below, take action behind the scenes instead of blocking traffic to better protect your site.</p>

<table>
  <tr align="left">
    <th>Use case</th>
    <th>Recommendation</th>
  </tr>
  <tr>
    <td>homepage</td>
    <td>See a cohesive view of your traffic on the admin console while filtering scrapers.</td>
  </tr>
  <tr>
    <td>login</td>
    <td>With low scores, require 2-factor-authentication or email verification to prevent credential stuffing attacks.</td>
  </tr>
  <tr>
    <td>social</td>
    <td>Limit unanswered friend requests from abusive users and send risky comments to moderation.</td>
  </tr>
  <tr>
    <td>e-commerce</td>
    <td>Put your real sales ahead of bots and identify risky transactions.</td>
  </tr>
</table>

<p>reCAPTCHA learns by seeing real traffic on your site. For this reason, scores in a staging environment or soon after implementing may
  differ from production. As reCAPTCHA v3 doesn't ever interrupt the user flow, you can first run reCAPTCHA without taking action and then
  decide on thresholds by looking at your traffic in the <a href="https://g.co/recaptcha/admin">admin console</a>. By default, you
  can use a threshold of 0.5.</p>

<h2 id="actions">Actions</h2>

<p>reCAPTCHA v3 introduces a new concept: actions. When you specify an action name in each place you execute reCAPTCHA
  you enable two new features:</p>

  <ul>
    <li>a detailed break-down of data for your top ten actions in the <a href="https://g.co/recaptcha/admin">admin console</a></li>
    <li>adaptive risk analysis based on the context of the action (abusive behavior can vary)</li>
  </ul>

<p>Importantly, when you verify the reCAPTCHA response you should also verify that the action name matches the one you expect.</p>

<pre class="prettyprint">
  &lt;script&gt;
  grecaptcha.ready(function() {
      grecaptcha.execute('<i>reCAPTCHA_site_key</i>', {action: '<b>homepage</b>'});
  });
  &lt;/script&gt;
</pre>

<p>Note: actions may only contain alphanumeric characters and slashes, and must not be user-specific.</p>

<h2>Site Verify Response</h2>

<p>Make the request to <a href="https://developers.google.com/recaptcha/docs/verify">verify the response token</a> as with reCAPTCHA v2 or Invisible reCAPTCHA.</p>
<p>The response is a JSON object:</p>

<pre class="prettyprint">
{
  "success": true|false,      // whether this request was a valid reCAPTCHA token for your site
  "score": number             // the score for this request (0.0 - 1.0)
  "action": string            // the action name for this request (important to verify)
  "challenge_ts": timestamp,  // timestamp of the challenge load (ISO format yyyy-MM-dd'T'HH:mm:ssZZ)
  "hostname": string,         // the hostname of the site where the reCAPTCHA was solved
  "error-codes": [...]        // optional
}
</pre>


    
  </div>
  

  
        
  







        
<div class="devsite-content-footer nocontent">
  
  
    <p>Except as otherwise noted, the content of this page is licensed under the <a href="https://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>, and code samples are licensed under the <a href="https://www.apache.org/licenses/LICENSE-2.0">Apache 2.0 License</a>. For details, see our <a href="https://developers.google.com/terms/site-policies">Site Policies</a>. Java is a registered trademark of Oracle and/or its affiliates.</p>
  

  
    
    <p class="devsite-content-footer-date" itemprop="datePublished"
       content="2018-10-29T17:23:55.786245">
      
      Last updated October 29, 2018.
    </p>
  

</div>

        </article>
      </article>
  

        </div>
      

<footer class="devsite-footer-linkboxes nocontent
               devsite-footer-linkboxes-all-backup
               devsite-footer-linkboxes-with-sites"><nav class="devsite-full-site-width"><ul class="devsite-footer-linkboxes-list"><li class="devsite-footer-linkbox devsite-footer-linkbox-backup"><h3 class="devsite-footer-linkbox-heading">Connect</h3><ul class="devsite-footer-linkbox-list"><li class="devsite-footer-linkbox-item"><a href="//googledevelopers.blogspot.com"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Blog Link"
               >
                Blog
            </a></li><li class="devsite-footer-linkbox-item"><a href="//www.facebook.com/Google-Developers-967415219957038/"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Facebook Link"
               >
                Facebook
            </a></li><li class="devsite-footer-linkbox-item"><a href="//medium.com/google-developers"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Medium Link"
               >
                Medium
            </a></li><li class="devsite-footer-linkbox-item"><a href="//twitter.com/googledevs"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Twitter Link"
               >
                Twitter
            </a></li><li class="devsite-footer-linkbox-item"><a href="//www.youtube.com/user/GoogleDevelopers"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer YouTube Link"
               >
                YouTube
            </a></li></ul></li><li class="devsite-footer-linkbox devsite-footer-linkbox-backup"><h3 class="devsite-footer-linkbox-heading">Programs</h3><ul class="devsite-footer-linkbox-list"><li class="devsite-footer-linkbox-item"><a href="//www.womentechmakers.com"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Women Techmakers"
               >
                Women Techmakers
            </a></li><li class="devsite-footer-linkbox-item"><a href="//developers.google.com/agency/"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Agency"
               >
                Agency Program
            </a></li><li class="devsite-footer-linkbox-item"><a href="//developers.google.com/groups/"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Groups"
               >
                GDG
            </a></li><li class="devsite-footer-linkbox-item"><a href="//developers.google.com/experts/"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Experts"
               >
                Google Developers Experts
            </a></li><li class="devsite-footer-linkbox-item"><a href="//developers.google.com/startups/"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Startups"
               >
                Startup Launchpad
            </a></li><li class="devsite-footer-linkbox-item"><a href="//userresearch.google.com?reserved=0&utm_source=developers.google.com&Q_Language=en&utm_medium=own_srch&utm_campaign=Global-developers&utm_term=0&utm_content=0&productTag=clou&campaignDate=nov18&pType=devel&referral_code=js564523"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer User Studies"
               >
                User Studies
            </a></li></ul></li><li class="devsite-footer-linkbox devsite-footer-linkbox-backup"><h3 class="devsite-footer-linkbox-heading">Developer Consoles</h3><ul class="devsite-footer-linkbox-list"><li class="devsite-footer-linkbox-item"><a href="//console.developers.google.com"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Google Developers Console"
               >
                Google API Console
            </a></li><li class="devsite-footer-linkbox-item"><a href="//console.cloud.google.com"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Google Cloud Platform Console"
               >
                Google Cloud Platform Console
            </a></li><li class="devsite-footer-linkbox-item"><a href="//play.google.com/apps/publish/"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Google Play Console"
               >
                Google Play Console
            </a></li><li class="devsite-footer-linkbox-item"><a href="//console.firebase.google.com"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Firebase Console"
               >
                Firebase Console
            </a></li><li class="devsite-footer-linkbox-item"><a href="//console.actions.google.com"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Actions on Google Console"
               >
                Actions on Google Console
            </a></li><li class="devsite-footer-linkbox-item"><a href="//cast.google.com/publish/"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Cast SDK Developer Console"
               >
                Cast SDK Developer Console
            </a></li><li class="devsite-footer-linkbox-item"><a href="//chrome.google.com/webstore/developer/dashboard"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Chrome Web Store Developer Dashboard"
               >
                Chrome Web Store Dashboard
            </a></li></ul></li><li class="devsite-footer-linkbox devsite-footer-linkbox-sites"><a href="https://developers.google.com/"
           class="gc-analytics-event devsite-footer-linkbox-logo-link"
           data-category="Site-Wide Custom Events" data-label="Footer Google Developers Link"><img class="devsite-footer-linkbox-logo"
               src="https://developers.google.com/_static/16eb031c2e/images/redesign-14/lockup-color-knockout.png"
               alt="Google Developers"></a><ul class="devsite-footer-linkbox-list"><li class="devsite-footer-linkbox-item"><a href="//developer.android.com/index.html"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Android Link"
               >
                Android
            </a></li><li class="devsite-footer-linkbox-item"><a href="//developer.chrome.com/home"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Chrome Link"
               >
                Chrome
            </a></li><li class="devsite-footer-linkbox-item"><a href="//firebase.google.com"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Firebase Link"
               >
                Firebase
            </a></li><li class="devsite-footer-linkbox-item"><a href="//cloud.google.com"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Cloud Link"
               >
                Google Cloud Platform
            </a></li><li class="devsite-footer-linkbox-item"><a href="//developers.google.com/products/"
               class="gc-analytics-event"
               data-category="Site-Wide Custom Events"
               data-label="Footer Products Link"
               >
                All Products
            </a></li></ul></li></ul></nav></footer><footer class="devsite-utility-footer"><nav class="devsite-utility-footer-nav devsite-nav devsite-full-site-width"><div class="devsite-utility-footer-nav-left"><form class="devsite-utility-footer-language" action="https://developers.google.com/i18n/setlang/"
            method="post"><input type="hidden" name="xsrf_token" value="CzU4nfLOt1enN7JuA5w_2mPtbqmUcY3WnPccxqxsvFw6MTU1MjAzMTg3NTY3MjY2OA" /><input type="hidden" name="next" value="/recaptcha/docs/v3"><select class="devsite-utility-footer-language-select kd-select" name="language"
                track-type="languageSelector" track-name="click"><option value="id"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="id"
                track-metadata-original-language="en"
                track-metadata-selected-language="id">
            Bahasa Indonesia
          </option><option value="de"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="de"
                track-metadata-original-language="en"
                track-metadata-selected-language="de">
            Deutsch
          </option><option value="en"
                 selected="selected" 
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="en"
                track-metadata-original-language="en"
                track-metadata-selected-language="en">
            English
          </option><option value="es"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="es"
                track-metadata-original-language="en"
                track-metadata-selected-language="es">
            español
          </option><option value="fr"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="fr"
                track-metadata-original-language="en"
                track-metadata-selected-language="fr">
            français
          </option><option value="pt-br"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="pt-br"
                track-metadata-original-language="en"
                track-metadata-selected-language="pt-br">
            Português Brasileiro
          </option><option value="ru"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="ru"
                track-metadata-original-language="en"
                track-metadata-selected-language="ru">
            Русский
          </option><option value="ja"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="ja"
                track-metadata-original-language="en"
                track-metadata-selected-language="ja">
            日本語
          </option><option value="zh-cn"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="zh-cn"
                track-metadata-original-language="en"
                track-metadata-selected-language="zh-cn">
            简体中文
          </option><option value="ko"
                
                track-type="languageSelector" track-name="changed"
                track-metadata-eventDetail="ko"
                track-metadata-original-language="en"
                track-metadata-selected-language="ko">
            한국어
          </option></select></form><span class="devsite-utility-footer-links"><a class="devsite-utility-footer-link gc-analytics-event"
           href="https://developers.google.com/terms/site-terms"
           data-category="Site-Wide Custom Events"
           data-label="Footer terms link"
           data-footer-link-id="terms"
           >Terms
         </a><a class="devsite-utility-footer-link gc-analytics-event"
           href="//policies.google.com/privacy"
           data-category="Site-Wide Custom Events"
           data-label="Footer privacy link"
           data-footer-link-id="privacy"
           >Privacy
         </a></span></div><div class="devsite-utility-footer-nav-right"><div class="devsite-utility-footer-newsletter-signup-text">
        Sign up for the Google Developers newsletter
      </div><a class="button button-primary devsite-utility-footer-newsletter-signup-button"
         href="//services.google.com/fb/forms/googledevelopersnewsletter/?utm_medium=referral&amp;utm_source=google-products&amp;utm_team=googledevs&amp;utm_campaign=201611-newsletter-launch"
         track-type="navigateTo" track-name="newsletter"
         track-metadata-eventDetail="footer"
         track-metadata-position="footer">
        
        Subscribe
      </a></div></nav></footer></div><script async defer src="//www.gstatic.com/feedback/api.js"></script><script src="https://developers.google.com/_static2/16eb031c2e/jsi18n/"></script><script src="https://developers.google.com/_static/16eb031c2e/js/script_foot_closure.js"></script><script src="https://developers.google.com/_static/16eb031c2e/js/script_foot.js"></script><script>
        (function($) {
          
          devsite.devsite.Init($, {'ENABLE_BLOCKED_VIDEO_PLACEHOLDER': 0, 'SITE_NAME': 'devsite', 'FULL_SITE_SEARCH_ENABLED': 1, 'ENABLE_CLOUDTRACK': 0, 'VTAGS_ENABLED': 0, 'HISTORY_ENABLED': 1, 'SIDEBAR_MINI_ENABLED': 0, 'VERSION_HASH': '16eb031c2e', 'SCRIPTSAFE_DOMAIN': 'google-developers.appspot.com', 'ENABLE_BLOCKED_LINK_TOOLTIP': 0, 'ALLOWED_HOSTS': ['.android.com', '.appspot.com', '.gonglchuangl.net', '.google.cn', '.google.com', '.googleplex.com', '.tensorflow.org'], 'BLOCK_RSS_FEEDS': 0},
                               '[]','en',
                               true, '16mscit006@gmail.com',
                               {"99a6bd77935176c43993ac6fe3e23dfc": true, "8de7a048f21618359bd37f5ce44be073": false, "098dafe57affddc137df300142652cfd": false, "8e03e230de0bd8a6fe173fdf172e8b3f": true, "cb025a64a50094835616312f4774a53d": true, "51470233c56fc1fde50f00b73c52b216": false, "d169d485cf24243a263783dbe42029b1": true, "700def1a83e356c06c0925afb05de4b0": false, "6749dcb526ce9bde6993550c7d928d24": true}, '/recaptcha/',
                               'https://developers.google.com/');
        })(jQuery);

        
        devsite.localInit = function() {
          
        };

      </script><script>
      $('.devsite-utility-footer-language-select').each(function() {
        $(this).change(function(){$('.devsite-utility-footer-language').submit();});
      });
      </script></div><span id="devsite-request-elapsed" data-request-elapsed="266.41702652"></span></body></html>
