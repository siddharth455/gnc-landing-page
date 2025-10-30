window.mUtilElementDataStore = {}, window.mUtilElementDataStoreID = 0, window.mUtilDelegatedEventHandlers = {};
var mUtil = function () {
      var e = {
         sm: 544,
         md: 768,
         lg: 1024,
         xl: 1200
      };
      return {
         isMobileDevice: function () {
            return this.getViewPort().width < this.getBreakpoint("lg")
         },
         isDesktopDevice: function () {
            return !mUtil.isMobileDevice()
         },
         getViewPort: function () {
            var e = window,
               t = "inner";
            return "innerWidth" in window || (t = "client", e = document.documentElement || document.body), {
               width: e[t + "Width"],
               height: e[t + "Height"]
            }
         },
         isInResponsiveRange: function (e) {
            var t = this.getViewPort().width;
            return "general" == e || "desktop" == e && t >= this.getBreakpoint("lg") + 1 || "tablet" == e && t >= this.getBreakpoint("md") + 1 && t < this.getBreakpoint("lg") || "mobile" == e && t <= this.getBreakpoint("md") || "desktop-and-tablet" == e && t >= this.getBreakpoint("md") + 1 || "tablet-and-mobile" == e && t <= this.getBreakpoint("lg") || "minimal-desktop-and-below" == e && t <= this.getBreakpoint("xl")
         },
         getUniqueID: function (e) {
            return e + Math.floor(Math.random() * (new Date).getTime())
         },
         getBreakpoint: function (t) {
            return e[t]
         },
         isset: function (e, t) {
            var n;
            if (-1 !== (t = t || "").indexOf("[")) throw Error("Unsupported object path notation.");
            t = t.split(".");
            do {
               if (void 0 === e || (n = t.shift(), !e.hasOwnProperty(n))) return !1;
               e = e[n]
            } while (t.length);
            return !0
         },
         getHighestZindex: function (e) {
            for (var t, n, i = mUtil.get(e); i && i !== document;) {
               if (("absolute" === (t = mUtil.css(i, "position")) || "relative" === t || "fixed" === t) && (n = parseInt(mUtil.css(i, "z-index")), !isNaN(n) && 0 !== n)) return n;
               i = i.parentNode
            }
            return null
         },
         hasFixedPositionedParent: function (e) {
            for (; e && e !== document;) {
               if ("fixed" === (position = mUtil.css(e, "position"))) return !0;
               e = e.parentNode
            }
            return !1
         },
         sleep: function (e) {
            for (var t = (new Date).getTime(), n = 0; n < 1e7 && !((new Date).getTime() - t > e); n++);
         },
         getRandomInt: function (e, t) {
            return Math.floor(Math.random() * (t - e + 1)) + e
         },
         isAngularVersion: function () {
            return void 0 !== window.Zone
         },
         deepExtend: function (e) {
            e = e || {};
            for (var t = 1; t < arguments.length; t++) {
               var n = arguments[t];
               if (n)
                  for (var i in n) n.hasOwnProperty(i) && ("object" == typeof n[i] ? e[i] = mUtil.deepExtend(e[i], n[i]) : e[i] = n[i])
            }
            return e
         },
         extend: function (e) {
            e = e || {};
            for (var t = 1; t < arguments.length; t++)
               if (arguments[t])
                  for (var n in arguments[t]) arguments[t].hasOwnProperty(n) && (e[n] = arguments[t][n]);
            return e
         },
         get: function (e) {
            var t;
            return e === document ? document : e && 1 === e.nodeType ? e : (t = document.getElementById(e)) ? t : (t = document.getElementsByTagName(e)) ? t[0] : (t = document.getElementsByClassName(e)) ? t[0] : null
         },
         getByClass: function (e) {
            var t;
            return (t = document.getElementsByClassName(e)) ? t[0] : null
         },
         hasClasses: function (e, t) {
            if (e) {
               for (var n = t.split(" "), i = 0; i < n.length; i++)
                  if (0 == mUtil.hasClass(e, mUtil.trim(n[i]))) return !1;
               return !0
            }
         },
         hasClass: function (e, t) {
            if (e) return e.classList ? e.classList.contains(t) : RegExp("\\b" + t + "\\b").test(e.className)
         },
         addClass: function (e, t) {
            if (e && void 0 !== t) {
               var n = t.split(" ");
               if (e.classList)
                  for (var i = 0; i < n.length; i++) n[i] && n[i].length > 0 && e.classList.add(mUtil.trim(n[i]));
               else if (!mUtil.hasClass(e, t))
                  for (i = 0; i < n.length; i++) e.className += " " + mUtil.trim(n[i])
            }
         },
         removeClass: function (e, t) {
            if (e && void 0 !== t) {
               var n = t.split(" ");
               if (e.classList)
                  for (var i = 0; i < n.length; i++) e.classList.remove(mUtil.trim(n[i]));
               else if (mUtil.hasClass(e, t))
                  for (i = 0; i < n.length; i++) e.className = e.className.replace(RegExp("\\b" + mUtil.trim(n[i]) + "\\b", "g"), "")
            }
         },
         triggerCustomEvent: function (e, t, n) {
            if (window.CustomEvent) var i = new CustomEvent(t, {
               detail: n
            });
            else(i = document.createEvent("CustomEvent")).initCustomEvent(t, !0, !0, n);
            e.dispatchEvent(i)
         },
         trim: function (e) {
            return e.trim()
         },
         eventTriggered: function (e) {
            return !!e.currentTarget.dataset.triggered || (e.currentTarget.dataset.triggered = !0, !1)
         },
         remove: function (e) {
            e && e.parentNode && e.parentNode.removeChild(e)
         },
         children: function (e, t, n) {
            if (e && e.childNodes) {
               for (var i = [], o = 0, s = e.childNodes.length; o < s; ++o) 1 == e.childNodes[o].nodeType && mUtil.matches(e.childNodes[o], t, n) && i.push(e.childNodes[o]);
               return i
            }
         },
         child: function (e, t, n) {
            var i = mUtil.children(e, t, n);
            return i ? i[0] : null
         },
         matches: function (e, t, n) {
            var i = Element.prototype,
               o = i.matches || i.webkitMatchesSelector || i.mozMatchesSelector || i.msMatchesSelector || function (e) {
                  return -1 !== [].indexOf.call(document.querySelectorAll(e), this)
               };
            return !(!e || !e.tagName) && o.call(e, t)
         },
         data: function (e) {
            return e = mUtil.get(e), {
               set: function (t, n) {
                  void 0 === e.customDataTag && (mUtilElementDataStoreID++, e.customDataTag = mUtilElementDataStoreID), void 0 === mUtilElementDataStore[e.customDataTag] && (mUtilElementDataStore[e.customDataTag] = {}), mUtilElementDataStore[e.customDataTag][t] = n
               },
               get: function (t) {
                  return this.has(t) ? mUtilElementDataStore[e.customDataTag][t] : null
               },
               has: function (t) {
                  return !(!mUtilElementDataStore[e.customDataTag] || !mUtilElementDataStore[e.customDataTag][t])
               },
               remove: function (t) {
                  this.has(t) && delete mUtilElementDataStore[e.customDataTag][t]
               }
            }
         },
         outerWidth: function (e, t) {
            if (!0 === t) {
               var n = parseFloat(e.offsetWidth);
               return n += parseFloat(mUtil.css(e, "margin-left")) + parseFloat(mUtil.css(e, "margin-right")), parseFloat(n)
            }
            return parseFloat(e.offsetWidth)
         },
         offset: function (e) {
            var t, n;
            if (e = mUtil.get(e)) return e.getClientRects().length ? (t = e.getBoundingClientRect(), n = e.ownerDocument.defaultView, {
               top: t.top + n.pageYOffset,
               left: t.left + n.pageXOffset
            }) : {
               top: 0,
               left: 0
            }
         },
         height: function (e) {
            return mUtil.css(e, "height")
         },
         visible: function (e) {
            return !(0 === e.offsetWidth && 0 === e.offsetHeight)
         },
         attr: function (e, t, n) {
            if (null != (e = mUtil.get(e))) return void 0 === n ? e.getAttribute(t) : void e.setAttribute(t, n)
         },
         hasAttr: function (e, t) {
            if (null != (e = mUtil.get(e))) return !!e.getAttribute(t)
         },
         removeAttr: function (e, t) {
            null != (e = mUtil.get(e)) && e.removeAttribute(t)
         },
         animate: function (e, t, n, i, o, s) {
            var l = {};
            if (l.linear = function (e, t, n, i) {
                  return n * e / i + t
               }, o = l.linear, "number" == typeof e && "number" == typeof t && "number" == typeof n && "function" == typeof i) {
               "function" != typeof s && (s = function () {});
               var r = window.requestAnimationFrame || function (e) {
                     window.setTimeout(e, 20)
                  },
                  a = t - e;
               i(e);
               var m = window.performance && window.performance.now ? window.performance.now() : +new Date;
               r(function l(u) {
                  var d = (u || +new Date) - m;
                  d >= 0 && i(o(d, e, a, n)), d >= 0 && d >= n ? (i(t), s()) : r(l)
               })
            }
         },
         show: function (e, t) {
            e.style.display = t || "block"
         },
         hide: function (e) {
            e.style.display = "none"
         },
         addEvent: function (e, t, n, i) {
            void 0 !== (e = mUtil.get(e)) && e.addEventListener(t, n)
         },
         removeEvent: function (e, t, n) {
            (e = mUtil.get(e)).removeEventListener(t, n)
         },
         on: function (e, t, n, i) {
            if (t) {
               var o = mUtil.getUniqueID("event");
               return mUtilDelegatedEventHandlers[o] = function (n) {
                  for (var o = e.querySelectorAll(t), s = n.target; s && s !== e;) {
                     for (var l = 0, r = o.length; l < r; l++) s === o[l] && i.call(s, n);
                     s = s.parentNode
                  }
               }, mUtil.addEvent(e, n, mUtilDelegatedEventHandlers[o]), o
            }
         },
         off: function (e, t, n) {
            e && mUtilDelegatedEventHandlers[n] && (mUtil.removeEvent(e, t, mUtilDelegatedEventHandlers[n]), delete mUtilDelegatedEventHandlers[n])
         },
         one: function (e, t, n) {
            (e = mUtil.get(e)).addEventListener(t, function (e) {
               return e.target.removeEventListener(e.type, arguments.callee), n(e)
            })
         },
         hash: function (e) {
            var t, n = 0;
            if (0 === e.length) return n;
            for (t = 0; t < e.length; t++) n = (n << 5) - n + e.charCodeAt(t), n |= 0;
            return n
         },
         animateClass: function (e, t, n) {
            mUtil.addClass(e, "animated " + t), mUtil.one(e, "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
               mUtil.removeClass(e, "animated " + t)
            }), n && mUtil.one(e.animationEnd, n)
         },
         animateDelay: function (e, t) {
            for (var n = ["webkit-", "moz-", "ms-", "o-", ""], i = 0; i < n.length; i++) mUtil.css(e, n[i] + "animation-delay", t)
         },
         animateDuration: function (e, t) {
            for (var n = ["webkit-", "moz-", "ms-", "o-", ""], i = 0; i < n.length; i++) mUtil.css(e, n[i] + "animation-duration", t)
         },
         scrollTo: function (e, t, n) {
            n = n || 500;
            var i, o, s = (e = mUtil.get(e)) ? mUtil.offset(e).top : 0,
               l = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
            s > l ? (i = s, o = l) : (i = l, o = s), t && (o += t), mUtil.animate(i, o, n, function (e) {
               document.documentElement.scrollTop = e, document.body.parentNode.scrollTop = e, document.body.scrollTop = e
            })
         },
         scrollTop: function (e, t) {
            mUtil.scrollTo(null, e, t)
         },
         isArray: function (e) {
            return e && Array.isArray(e)
         },
         ready: function (e) {
            (document.attachEvent ? "complete" === document.readyState : "loading" !== document.readyState) ? e(): document.addEventListener("DOMContentLoaded", e)
         },
         isEmpty: function (e) {
            for (var t in e)
               if (e.hasOwnProperty(t)) return !1;
            return !0
         },
         numberString: function (e) {
            for (var t = (e += "").split("."), n = t[0], i = t.length > 1 ? "." + t[1] : "", o = /(\d+)(\d{3})/; o.test(n);) n = n.replace(o, "$1,$2");
            return n + i
         },
         detectIE: function () {
            var e = window.navigator.userAgent,
               t = e.indexOf("MSIE ");
            if (t > 0) return parseInt(e.substring(t + 5, e.indexOf(".", t)), 10);
            if (e.indexOf("Trident/") > 0) {
               var n = e.indexOf("rv:");
               return parseInt(e.substring(n + 3, e.indexOf(".", n)), 10)
            }
            var i = e.indexOf("Edge/");
            return i > 0 && parseInt(e.substring(i + 5, e.indexOf(".", i)), 10)
         },
         isRTL: function () {
            return "rtl" == mUtil.attr(mUtil.get("html"), "direction")
         },
         scrollerInit: function (e, t) {
            function n() {
               var n, i;
               i = t.height instanceof Function ? parseInt(t.height.call()) : parseInt(t.height), t.disableForMobile && mUtil.isInResponsiveRange("tablet-and-mobile") ? (n = mUtil.data(e).get("ps")) ? (t.resetHeightOnDestroy ? mUtil.css(e, "height", "auto") : (mUtil.css(e, "overflow", "auto"), i > 0 && mUtil.css(e, "height", i + "px")), n.destroy(), n = mUtil.data(e).remove("ps")) : i > 0 && (mUtil.css(e, "overflow", "auto"), mUtil.css(e, "height", i + "px")) : (i > 0 && mUtil.css(e, "height", i + "px"), mUtil.css(e, "overflow", "hidden"), (n = mUtil.data(e).get("ps")) ? n.update() : (mUtil.addClass(e, "m-scroller"), n = new PerfectScrollbar(e, {
                  wheelSpeed: .5,
                  swipeEasing: !0,
                  wheelPropagation: !1,
                  minScrollbarLength: 40,
                  suppressScrollX: !mUtil.isRTL()
               }), mUtil.data(e).set("ps", n)))
            }
            n(), t.handleWindowResize && mUtil.addResizeHandler(function () {
               n()
            })
         },
         scrollerUpdate: function (e) {
            var t;
            (t = mUtil.data(e).get("ps")) && t.update()
         },
         scrollersUpdate: function (e) {
            for (var t = mUtil.findAll(e, ".ps"), n = 0, i = t.length; n < i; n++) mUtil.scrollerUpdate(t[n])
         },
         scrollerTop: function (e) {
            mUtil.data(e).get("ps") && (e.scrollTop = 0)
         },
         scrollerDestroy: function (e) {
            var t;
            (t = mUtil.data(e).get("ps")) && (t.destroy(), t = mUtil.data(e).remove("ps"))
         }
      }
   }(),
   mHeader = function (e, t) {
      var n = this,
         i = mUtil.get(e),
         o = mUtil.get("body");
      if (void 0 !== i) {
         var s = {
               classic: !1,
               offset: {
                  mobile: 150,
                  desktop: 200
               },
               minimize: {
                  mobile: !1,
                  desktop: !1
               }
            },
            l = {
               construct: function (e) {
                  return mUtil.data(i).has("header") ? n = mUtil.data(i).get("header") : (l.init(e), l.build(), mUtil.data(i).set("header", n)), n
               },
               init: function (e) {
                  n.events = [], n.options = mUtil.deepExtend({}, s, e)
               },
               build: function () {
                  var e = 0;
                  !1 === n.options.minimize.mobile && !1 === n.options.minimize.desktop || window.addEventListener("scroll", function () {
                     var t, i, s, l = 0;
                     mUtil.isInResponsiveRange("desktop") ? (l = n.options.offset.desktop, t = n.options.minimize.desktop.on, i = n.options.minimize.desktop.off) : mUtil.isInResponsiveRange("tablet-and-mobile") && (l = n.options.offset.mobile, t = n.options.minimize.mobile.on, i = n.options.minimize.mobile.off), s = window.pageYOffset, mUtil.isInResponsiveRange("tablet-and-mobile") && n.options.classic && n.options.classic.mobile || mUtil.isInResponsiveRange("desktop") && n.options.classic && n.options.classic.desktop ? s > l ? (mUtil.addClass(o, t), mUtil.removeClass(o, i)) : (mUtil.addClass(o, i), mUtil.removeClass(o, t)) : (s > l && e < s ? (mUtil.addClass(o, t), mUtil.removeClass(o, i)) : (mUtil.addClass(o, i), mUtil.removeClass(o, t)), e = s)
                  })
               },
               eventTrigger: function (e, t) {
                  for (var i = 0; i < n.events.length; i++) {
                     var o = n.events[i];
                     o.name == e && (1 == o.one ? 0 == o.fired && (n.events[i].fired = !0, o.handler.call(this, n, t)) : o.handler.call(this, n, t))
                  }
               },
               addEvent: function (e, t, i) {
                  n.events.push({
                     name: e,
                     handler: t,
                     one: i,
                     fired: !1
                  })
               }
            };
         return n.setDefaults = function (e) {
            s = e
         }, n.on = function (e, t) {
            return l.addEvent(e, t)
         }, l.construct.apply(n, [t]), n
      }
   },
   mMenu = function (e, t) {
      var n = this,
         i = !1,
         o = mUtil.get(e),
         s = mUtil.get("body");
      if (o) {
         var l = {
               accordion: {
                  slideSpeed: 200,
                  autoScroll: !1,
                  autoScrollSpeed: 1200,
                  expandAll: !0
               },
               dropdown: {
                  timeout: 500
               }
            },
            r = {
               construct: function (e) {
                  return mUtil.data(o).has("menu") ? n = mUtil.data(o).get("menu") : (r.init(e), r.reset(), r.build(), mUtil.data(o).set("menu", n)), n
               },
               init: function (e) {
                  n.events = [], n.eventHandlers = {}, n.options = mUtil.deepExtend({}, l, e), n.pauseDropdownHoverTime = 0, n.uid = mUtil.getUniqueID()
               },
               update: function (e) {
                  n.options = mUtil.deepExtend({}, l, e), n.pauseDropdownHoverTime = 0, r.reset(), n.eventHandlers = {}, r.build(), mUtil.data(o).set("menu", n)
               },
               reload: function () {
                  r.reset(), r.build()
               },
               build: function () {
                  n.eventHandlers.event_1 = mUtil.on(o, ".m-menu__toggle", "click", r.handleSubmenuAccordion), ("dropdown" === r.getSubmenuMode() || r.isConditionalSubmenuDropdown()) && (n.eventHandlers.event_2 = mUtil.on(o, '[m-menu-submenu-toggle="hover"]', "mouseover", r.handleSubmenuDrodownHoverEnter), n.eventHandlers.event_3 = mUtil.on(o, '[m-menu-submenu-toggle="hover"]', "mouseout", r.handleSubmenuDrodownHoverExit), n.eventHandlers.event_4 = mUtil.on(o, '[m-menu-submenu-toggle="click"] > .m-menu__toggle, [m-menu-submenu-toggle="click"] > .m-menu__link .m-menu__toggle', "click", r.handleSubmenuDropdownClick), n.eventHandlers.event_5 = mUtil.on(o, '[m-menu-submenu-toggle="tab"] > .m-menu__toggle, [m-menu-submenu-toggle="tab"] > .m-menu__link .m-menu__toggle', "click", r.handleSubmenuDropdownTabClick)), n.eventHandlers.event_6 = mUtil.on(o, ".m-menu__item:not(.m-menu__item--submenu) > .m-menu__link:not(.m-menu__toggle):not(.m-menu__link--toggle-skip)", "click", r.handleLinkClick), n.options.scroll && n.options.scroll.height && r.scrollerInit()
               },
               reset: function () {
                  mUtil.off(o, "click", n.eventHandlers.event_1), mUtil.off(o, "mouseover", n.eventHandlers.event_2), mUtil.off(o, "mouseout", n.eventHandlers.event_3), mUtil.off(o, "click", n.eventHandlers.event_4), mUtil.off(o, "click", n.eventHandlers.event_5), mUtil.off(o, "click", n.eventHandlers.event_6)
               },
               scrollerInit: function () {
                  n.options.scroll && n.options.scroll.height && (mUtil.scrollerDestroy(o), mUtil.scrollerInit(o, {
                     disableForMobile: !0,
                     resetHeightOnDestroy: !0,
                     handleWindowResize: !0,
                     height: n.options.scroll.height
                  }))
               },
               scrollerUpdate: function () {
                  n.options.scroll && n.options.scroll.height ? mUtil.scrollerUpdate(o) : mUtil.scrollerDestroy(o)
               },
               scrollerTop: function () {
                  n.options.scroll && n.options.scroll.height && mUtil.scrollerTop(o)
               },
               getSubmenuMode: function (e) {
                  return mUtil.isInResponsiveRange("desktop") ? e && mUtil.hasAttr(e, "m-menu-submenu-toggle") ? mUtil.attr(e, "m-menu-submenu-toggle") : mUtil.isset(n.options.submenu, "desktop.state.body") ? mUtil.hasClass(s, n.options.submenu.desktop.state.body) ? n.options.submenu.desktop.state.mode : n.options.submenu.desktop.default : mUtil.isset(n.options.submenu, "desktop") ? n.options.submenu.desktop : void 0 : mUtil.isInResponsiveRange("tablet") && mUtil.isset(n.options.submenu, "tablet") ? n.options.submenu.tablet : !(!mUtil.isInResponsiveRange("mobile") || !mUtil.isset(n.options.submenu, "mobile")) && n.options.submenu.mobile
               },
               isConditionalSubmenuDropdown: function () {
                  return !(!mUtil.isInResponsiveRange("desktop") || !mUtil.isset(n.options.submenu, "desktop.state.body"))
               },
               handleLinkClick: function (e) {
                  !1 === r.eventTrigger("linkClick", this) && e.preventDefault(), ("dropdown" === r.getSubmenuMode(this) || r.isConditionalSubmenuDropdown()) && r.handleSubmenuDropdownClose(e, this)
               },
               handleSubmenuDrodownHoverEnter: function (e) {
                  "accordion" !== r.getSubmenuMode(this) && !1 !== n.resumeDropdownHover() && ("1" == this.getAttribute("data-hover") && (this.removeAttribute("data-hover"), clearTimeout(this.getAttribute("data-timeout")), this.removeAttribute("data-timeout")), r.showSubmenuDropdown(this))
               },
               handleSubmenuDrodownHoverExit: function (e) {
                  if (!1 !== n.resumeDropdownHover() && "accordion" !== r.getSubmenuMode(this)) {
                     var t = this,
                        i = setTimeout(function () {
                           "1" == t.getAttribute("data-hover") && r.hideSubmenuDropdown(t, !0)
                        }, n.options.dropdown.timeout);
                     t.setAttribute("data-hover", "1"), t.setAttribute("data-timeout", i)
                  }
               },
               handleSubmenuDropdownClick: function (e) {
                  if ("accordion" !== r.getSubmenuMode(this)) {
                     var t = this.closest(".m-menu__item");
                     "accordion" != t.getAttribute("m-menu-submenu-mode") && (!1 === mUtil.hasClass(t, "m-menu__item--hover") ? (mUtil.addClass(t, "m-menu__item--open-dropdown"), r.showSubmenuDropdown(t)) : (mUtil.removeClass(t, "m-menu__item--open-dropdown"), r.hideSubmenuDropdown(t, !0)), e.preventDefault())
                  }
               },
               handleSubmenuDropdownTabClick: function (e) {
                  if ("accordion" !== r.getSubmenuMode(this)) {
                     var t = this.closest(".m-menu__item");
                     "accordion" != t.getAttribute("m-menu-submenu-mode") && (0 == mUtil.hasClass(t, "m-menu__item--hover") && (mUtil.addClass(t, "m-menu__item--open-dropdown"), r.showSubmenuDropdown(t)), e.preventDefault())
                  }
               },
               handleSubmenuDropdownClose: function (e, t) {
                  if ("accordion" !== r.getSubmenuMode(t)) {
                     var n = o.querySelectorAll(".m-menu__item.m-menu__item--submenu.m-menu__item--hover:not(.m-menu__item--tabs)");
                     if (n.length > 0 && !1 === mUtil.hasClass(t, "m-menu__toggle") && 0 === t.querySelectorAll(".m-menu__toggle").length)
                        for (var i = 0, s = n.length; i < s; i++) r.hideSubmenuDropdown(n[0], !0)
                  }
               },
               handleSubmenuAccordion: function (e, t) {
                  var i, o = t || this;
                  if ("dropdown" === r.getSubmenuMode(t) && (i = o.closest(".m-menu__item")) && "accordion" != i.getAttribute("m-menu-submenu-mode")) e.preventDefault();
                  else {
                     var s = o.closest(".m-menu__item"),
                        l = mUtil.child(s, ".m-menu__submenu, .m-menu__inner");
                     if (!mUtil.hasClass(o.closest(".m-menu__item"), "m-menu__item--open-always") && s && l) {
                        e.preventDefault();
                        var a = n.options.accordion.slideSpeed;
                        if (!1 === mUtil.hasClass(s, "m-menu__item--open")) {
                           if (!1 === n.options.accordion.expandAll) {
                              var m = o.closest(".m-menu__nav, .m-menu__subnav"),
                                 u = mUtil.children(m, ".m-menu__item.m-menu__item--open.m-menu__item--submenu:not(.m-menu__item--expanded):not(.m-menu__item--open-always)");
                              if (m && u)
                                 for (var d = 0, c = u.length; d < c; d++) {
                                    var f = u[0],
                                       g = mUtil.child(f, ".m-menu__submenu");
                                    g && mUtil.slideUp(g, a, function () {
                                       r.scrollerUpdate(), mUtil.removeClass(f, "m-menu__item--open")
                                    })
                                 }
                           }
                           mUtil.slideDown(l, a, function () {
                              r.scrollToItem(o), r.scrollerUpdate(), r.eventTrigger("submenuToggle", l)
                           }), mUtil.addClass(s, "m-menu__item--open")
                        } else mUtil.slideUp(l, a, function () {
                           r.scrollToItem(o), r.eventTrigger("submenuToggle", l)
                        }), mUtil.removeClass(s, "m-menu__item--open")
                     }
                  }
               },
               scrollToItem: function (e) {
                  mUtil.isInResponsiveRange("desktop") && n.options.accordion.autoScroll && "1" !== o.getAttribute("m-menu-scrollable") && mUtil.scrollTo(e, n.options.accordion.autoScrollSpeed)
               },
               hideSubmenuDropdown: function (e, t) {
                  t && (mUtil.removeClass(e, "m-menu__item--hover"), mUtil.removeClass(e, "m-menu__item--active-tab")), e.removeAttribute("data-hover"), e.getAttribute("m-menu-dropdown-toggle-class") && mUtil.removeClass(s, e.getAttribute("m-menu-dropdown-toggle-class"));
                  var n = e.getAttribute("data-timeout");
                  e.removeAttribute("data-timeout"), clearTimeout(n)
               },
               showSubmenuDropdown: function (e) {
                  var t = o.querySelectorAll(".m-menu__item--submenu.m-menu__item--hover, .m-menu__item--submenu.m-menu__item--active-tab");
                  if (t)
                     for (var n = 0, i = t.length; n < i; n++) {
                        var l = t[n];
                        e !== l && !1 === l.contains(e) && !1 === e.contains(l) && r.hideSubmenuDropdown(l, !0)
                     }
                  r.adjustSubmenuDropdownArrowPos(e), mUtil.addClass(e, "m-menu__item--hover"), e.getAttribute("m-menu-dropdown-toggle-class") && mUtil.addClass(s, e.getAttribute("m-menu-dropdown-toggle-class"))
               },
               createSubmenuDropdownClickDropoff: function (e) {
                  var t, n = (t = mUtil.child(e, ".m-menu__submenu") ? mUtil.css(t, "z-index") : 0) - 1,
                     i = document.createElement('<div class="m-menu__dropoff" style="background: transparent; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: ' + n + '"></div>');
                  s.appendChild(i), mUtil.addEvent(i, "click", function (t) {
                     t.stopPropagation(), t.preventDefault(), mUtil.remove(this), r.hideSubmenuDropdown(e, !0)
                  })
               },
               adjustSubmenuDropdownArrowPos: function (e) {
                  var t = mUtil.child(e, ".m-menu__submenu"),
                     n = mUtil.child(t, ".m-menu__arrow.m-menu__arrow--adjust");
                  if (mUtil.child(t, ".m-menu__subnav"), n) {
                     var i = 0;
                     mUtil.child(e, ".m-menu__link"), mUtil.hasClass(t, "m-menu__submenu--classic") || mUtil.hasClass(t, "m-menu__submenu--fixed") ? (mUtil.hasClass(t, "m-menu__submenu--right") ? (i = mUtil.outerWidth(e) / 2, mUtil.hasClass(t, "m-menu__submenu--pull") && (mUtil.isRTL() ? i += Math.abs(parseFloat(mUtil.css(t, "margin-left"))) : i += Math.abs(parseFloat(mUtil.css(t, "margin-right")))), i = parseInt(mUtil.css(t, "width")) - i) : mUtil.hasClass(t, "m-menu__submenu--left") && (i = mUtil.outerWidth(e) / 2, mUtil.hasClass(t, "m-menu__submenu--pull") && (mUtil.isRTL() ? i += Math.abs(parseFloat(mUtil.css(t, "margin-right"))) : i += Math.abs(parseFloat(mUtil.css(t, "margin-left"))))), mUtil.isRTL() ? mUtil.css(n, "right", i + "px") : mUtil.css(n, "left", i + "px")) : (mUtil.hasClass(t, "m-menu__submenu--center") || mUtil.hasClass(t, "m-menu__submenu--full")) && (i = mUtil.offset(e).left - (mUtil.getViewPort().width - parseInt(mUtil.css(t, "width"))) / 2, i += mUtil.outerWidth(e) / 2, mUtil.css(n, "left", i + "px"), mUtil.isRTL() && mUtil.css(n, "right", "auto"))
                  }
               },
               pauseDropdownHover: function (e) {
                  var t = new Date;
                  n.pauseDropdownHoverTime = t.getTime() + e
               },
               resumeDropdownHover: function () {
                  return (new Date).getTime() > n.pauseDropdownHoverTime
               },
               resetActiveItem: function (e) {
                  for (var t, i, s = 0, l = (t = o.querySelectorAll(".m-menu__item--active")).length; s < l; s++) {
                     var r = t[0];
                     mUtil.removeClass(r, "m-menu__item--active"), mUtil.hide(mUtil.child(r, ".m-menu__submenu"));
                     for (var a = 0, m = (i = mUtil.parents(r, ".m-menu__item--submenu")).length; a < m; a++) {
                        var u = i[s];
                        mUtil.removeClass(u, "m-menu__item--open"), mUtil.hide(mUtil.child(u, ".m-menu__submenu"))
                     }
                  }
                  if (!1 === n.options.accordion.expandAll && (t = o.querySelectorAll(".m-menu__item--open")))
                     for (s = 0, l = t.length; s < l; s++) mUtil.removeClass(i[0], "m-menu__item--open")
               },
               setActiveItem: function (e) {
                  r.resetActiveItem(), mUtil.addClass(e, "m-menu__item--active");
                  for (var t = mUtil.parents(e, ".m-menu__item--submenu"), n = 0, i = t.length; n < i; n++) mUtil.addClass(t[n], "m-menu__item--open")
               },
               getBreadcrumbs: function (e) {
                  var t, n = [],
                     i = mUtil.child(e, ".m-menu__link");
                  n.push({
                     text: t = mUtil.child(i, ".m-menu__link-text") ? t.innerHTML : "",
                     title: i.getAttribute("title"),
                     href: i.getAttribute("href")
                  });
                  for (var o = mUtil.parents(e, ".m-menu__item--submenu"), s = 0, l = o.length; s < l; s++) {
                     var r = mUtil.child(o[s], ".m-menu__link");
                     n.push({
                        text: t = mUtil.child(r, ".m-menu__link-text") ? t.innerHTML : "",
                        title: r.getAttribute("title"),
                        href: r.getAttribute("href")
                     })
                  }
                  return n.reverse()
               },
               getPageTitle: function (e) {
                  var t;
                  return mUtil.child(e, ".m-menu__link-text") ? t.innerHTML : ""
               },
               eventTrigger: function (e, t) {
                  for (var i = 0; i < n.events.length; i++) {
                     var o = n.events[i];
                     o.name == e && (1 == o.one ? 0 == o.fired && (n.events[i].fired = !0, o.handler.call(this, n, t)) : o.handler.call(this, n, t))
                  }
               },
               addEvent: function (e, t, i) {
                  n.events.push({
                     name: e,
                     handler: t,
                     one: i,
                     fired: !1
                  })
               },
               removeEvent: function (e) {
                  n.events[e] && delete n.events[e]
               }
            };
         return n.setDefaults = function (e) {
            l = e
         }, n.scrollerUpdate = function () {
            return r.scrollerUpdate()
         }, n.scrollerTop = function () {
            return r.scrollerTop()
         }, n.setActiveItem = function (e) {
            return r.setActiveItem(e)
         }, n.reload = function () {
            return r.reload()
         }, n.update = function (e) {
            return r.update(e)
         }, n.getBreadcrumbs = function (e) {
            return r.getBreadcrumbs(e)
         }, n.getPageTitle = function (e) {
            return r.getPageTitle(e)
         }, n.getSubmenuMode = function (e) {
            return r.getSubmenuMode(e)
         }, n.hideDropdown = function (e) {
            r.hideSubmenuDropdown(e, !0)
         }, n.pauseDropdownHover = function (e) {
            r.pauseDropdownHover(e)
         }, n.resumeDropdownHover = function () {
            return r.resumeDropdownHover()
         }, n.on = function (e, t) {
            return r.addEvent(e, t)
         }, n.off = function (e) {
            return r.removeEvent(e)
         }, n.one = function (e, t) {
            return r.addEvent(e, t, !0)
         }, r.construct.apply(n, [t]), mUtil.addResizeHandler(function () {
            i && n.reload()
         }), i = !0, n
      }
   },
   mOffcanvas = function (e, t) {
      var n = this,
         i = mUtil.get(e),
         o = mUtil.get("body");
      if (i) {
         var s = {},
            l = {
               construct: function (e) {
                  return mUtil.data(i).has("offcanvas") ? n = mUtil.data(i).get("offcanvas") : (l.init(e), l.build(), mUtil.data(i).set("offcanvas", n)), n
               },
               init: function (e) {
                  n.events = [], n.options = mUtil.deepExtend({}, s, e), n.overlay, n.classBase = n.options.baseClass, n.classShown = n.classBase + "--on", n.classOverlay = n.classBase + "-overlay", n.state = mUtil.hasClass(i, n.classShown) ? "shown" : "hidden"
               },
               build: function () {
                  if (n.options.toggleBy) {
                     if ("string" == typeof n.options.toggleBy) mUtil.addEvent(n.options.toggleBy, "click", l.toggle);
                     else if (n.options.toggleBy && n.options.toggleBy[0] && n.options.toggleBy[0].target)
                        for (var e in n.options.toggleBy) mUtil.addEvent(n.options.toggleBy[e].target, "click", l.toggle);
                     else n.options.toggleBy && n.options.toggleBy.target && mUtil.addEvent(n.options.toggleBy.target, "click", l.toggle)
                  }
                  var t = mUtil.get(n.options.closeBy);
                  t && mUtil.addEvent(t, "click", l.hide)
               },
               toggle: function () {
                  l.eventTrigger("toggle"), "shown" == n.state ? l.hide(this) : l.show(this)
               },
               show: function (e) {
                  "shown" != n.state && (l.eventTrigger("beforeShow"), l.togglerClass(e, "show"), mUtil.addClass(o, n.classShown), mUtil.addClass(i, n.classShown), n.state = "shown", n.options.overlay && (n.overlay = mUtil.insertAfter(document.createElement("DIV"), i), mUtil.addClass(n.overlay, n.classOverlay), mUtil.addEvent(n.overlay, "click", function (t) {
                     t.stopPropagation(), t.preventDefault(), l.hide(e)
                  })), l.eventTrigger("afterShow"))
               },
               hide: function (e) {
                  "hidden" != n.state && (l.eventTrigger("beforeHide"), l.togglerClass(e, "hide"), mUtil.removeClass(o, n.classShown), mUtil.removeClass(i, n.classShown), n.state = "hidden", n.options.overlay && n.overlay && mUtil.remove(n.overlay), l.eventTrigger("afterHide"))
               },
               togglerClass: function (e, t) {
                  var i, o = mUtil.attr(e, "id");
                  if (n.options.toggleBy && n.options.toggleBy[0] && n.options.toggleBy[0].target)
                     for (var s in n.options.toggleBy) n.options.toggleBy[s].target === o && (i = n.options.toggleBy[s]);
                  else n.options.toggleBy && n.options.toggleBy.target && (i = n.options.toggleBy);
                  if (i) {
                     var l = mUtil.get(i.target);
                     "show" === t && mUtil.addClass(l, i.state), "hide" === t && mUtil.removeClass(l, i.state)
                  }
               },
               eventTrigger: function (e, t) {
                  for (var i = 0; i < n.events.length; i++) {
                     var o = n.events[i];
                     o.name == e && (1 == o.one ? 0 == o.fired && (n.events[i].fired = !0, o.handler.call(this, n, t)) : o.handler.call(this, n, t))
                  }
               },
               addEvent: function (e, t, i) {
                  n.events.push({
                     name: e,
                     handler: t,
                     one: i,
                     fired: !1
                  })
               }
            };
         return n.setDefaults = function (e) {
            s = e
         }, n.hide = function () {
            return l.hide()
         }, n.show = function () {
            return l.show()
         }, n.on = function (e, t) {
            return l.addEvent(e, t)
         }, n.one = function (e, t) {
            return l.addEvent(e, t, !0)
         }, l.construct.apply(n, [t]), n
      }
   };
! function (e) {
   e.fn.mDatatable = e.fn.mDatatable || {}, e.fn.mDatatable.checkbox = function (t, n) {
      var i = {
         selectedAllRows: !1,
         selectedRows: [],
         unselectedRows: [],
         init: function () {
            i.selectorEnabled() && (t.setDataSourceParam(n.vars.selectedAllRows, !1), t.stateRemove("checkbox"), n.vars.requestIds && t.setDataSourceParam(n.vars.requestIds, !0), e(t).on("m-datatable--on-reloaded", function () {
               t.stateRemove("checkbox"), t.setDataSourceParam(n.vars.selectedAllRows, !1), i.selectedAllRows = !1, i.selectedRows = [], i.unselectedRows = []
            }), i.selectedAllRows = t.getDataSourceParam(n.vars.selectedAllRows), e(t).on("m-datatable--on-layout-updated", function (n, o) {
               o.table == e(t.wrap).attr("id") && t.ready(function () {
                  i.initVars(), i.initEvent(), i.initSelect()
               })
            }), e(t).on("m-datatable--on-check", function (n, o) {
               o.forEach(function (e) {
                  i.selectedRows.push(e), i.unselectedRows = i.remove(i.unselectedRows, e)
               });
               var s = {};
               s.selectedRows = e.unique(i.selectedRows), s.unselectedRows = e.unique(i.unselectedRows), t.stateKeep("checkbox", s)
            }), e(t).on("m-datatable--on-uncheck", function (n, o) {
               o.forEach(function (e) {
                  i.unselectedRows.push(e), i.selectedRows = i.remove(i.selectedRows, e)
               });
               var s = {};
               s.selectedRows = e.unique(i.selectedRows), s.unselectedRows = e.unique(i.unselectedRows), t.stateKeep("checkbox", s)
            }))
         },
         initEvent: function () {
            e(t.tableHead).find('.m-checkbox--all > [type="checkbox"]').click(function (o) {
               if (i.selectedRows = i.unselectedRows = [], t.stateRemove("checkbox"), e(this).is(":checked") ? i.selectedAllRows = !0 : i.selectedAllRows = !1, !n.vars.requestIds) {
                  e(this).is(":checked") && (i.selectedRows = e.makeArray(e(t.tableBody).find('.m-checkbox--single > [type="checkbox"]').map(function (t, n) {
                     return e(n).val()
                  })));
                  var s = {};
                  s.selectedRows = e.unique(i.selectedRows), t.stateKeep("checkbox", s)
               }
               t.setDataSourceParam(n.vars.selectedAllRows, i.selectedAllRows), e(t).trigger("m-datatable--on-click-checkbox", [e(this)])
            }), e(t.tableBody).find('.m-checkbox--single > [type="checkbox"]').click(function (o) {
               var s = e(this).val();
               e(this).is(":checked") ? (i.selectedRows.push(s), i.unselectedRows = i.remove(i.unselectedRows, s)) : (i.unselectedRows.push(s), i.selectedRows = i.remove(i.selectedRows, s)), !n.vars.requestIds && i.selectedRows.length < 1 && e(t.tableHead).find('.m-checkbox--all > [type="checkbox"]').prop("checked", !1);
               var l = {};
               l.selectedRows = e.unique(i.selectedRows), l.unselectedRows = e.unique(i.unselectedRows), t.stateKeep("checkbox", l), e(t).trigger("m-datatable--on-click-checkbox", [e(this)])
            })
         },
         initSelect: function () {
            i.selectedAllRows && n.vars.requestIds ? (t.hasClass("m-datatable--error") || e(t.tableHead).find('.m-checkbox--all > [type="checkbox"]').prop("checked", !0), t.setActiveAll(!0), i.unselectedRows.forEach(function (e) {
               t.setInactive(e)
            })) : (i.selectedRows.forEach(function (e) {
               t.setActive(e)
            }), !t.hasClass("m-datatable--error") && e(t.tableBody).find('.m-checkbox--single > [type="checkbox"]').not(":checked").length < 1 && e(t.tableHead).find('.m-checkbox--all > [type="checkbox"]').prop("checked", !0))
         },
         selectorEnabled: function () {
            return e.grep(t.options.columns, function (e, t) {
               return e.selector || !1
            })[0]
         },
         initVars: function () {
            var e = t.stateGet("checkbox");
            void 0 !== e && (i.selectedRows = e.selectedRows || [], i.unselectedRows = e.unselectedRows || [])
         },
         getSelectedId: function (e) {
            if (i.initVars(), i.selectedAllRows && n.vars.requestIds) {
               void 0 === e && (e = n.vars.rowIds);
               var o = t.getObject(e, t.lastResponse) || [];
               return o.length > 0 && i.unselectedRows.forEach(function (e) {
                  o = i.remove(o, parseInt(e))
               }), o
            }
            return i.selectedRows
         },
         remove: function (e, t) {
            return e.filter(function (e) {
               return e !== t
            })
         }
      };
      return t.checkbox = function () {
         return i
      }, "object" == typeof n && (n = e.extend(!0, {}, e.fn.mDatatable.checkbox.default, n), i.init.apply(this, [n])), t
   }, e.fn.mDatatable.checkbox.default = {
      vars: {
         selectedAllRows: "selectedAllRows",
         requestIds: "requestIds",
         rowIds: "meta.rowIds"
      }
   }
}(jQuery);
var mLayout = function () {
   var e, t, n;
   return {
      init: function () {
         this.initHeader(), this.initAside()
      },
      initHeader: function () {
         var e, t, i;
         t = mUtil.get("m_header"), i = {
            offset: {},
            minimize: {}
         }, "minimize" == mUtil.attr(t, "m-minimize-mobile") ? (i.minimize.mobile = {}, i.minimize.mobile.on = "m-header--minimize-on", i.minimize.mobile.off = "m-header--minimize-off") : i.minimize.mobile = !1, "minimize" == mUtil.attr(t, "m-minimize") ? (i.minimize.desktop = {}, i.minimize.desktop.on = "m-header--minimize-on", i.minimize.desktop.off = "m-header--minimize-off") : i.minimize.desktop = !1, (e = mUtil.attr(t, "m-minimize-offset")) && (i.offset.desktop = e), (e = mUtil.attr(t, "m-minimize-mobile-offset")) && (i.offset.mobile = e), header = new mHeader("m_header", i), n = new mOffcanvas("m_header_menu", {
            overlay: !0,
            baseClass: "m-aside-header-menu-mobile",
            closeBy: "m_aside_header_menu_mobile_close_btn",
            toggleBy: {
               target: "m_aside_header_menu_mobile_toggle",
               state: "m-brand__toggler--active"
            }
         }), new mMenu("m_header_menu", {
            submenu: {
               desktop: "dropdown",
               tablet: "accordion",
               mobile: "accordion"
            },
            accordion: {
               slideSpeed: 200,
               expandAll: !1
            }
         }), $("#m_aside_header_topbar_mobile_toggle").click(function () {
            $("body").toggleClass("m-topbar--on")
         }), 0 !== $("#m_quicksearch").length && (quicksearch = new mQuicksearch("m_quicksearch", {
            mode: mUtil.attr("m_quicksearch", "m-quicksearch-mode"),
            minLength: 1
         })).on("search", function (e) {
            e.showProgress(), $.ajax({})
         })
      },
      initAside: function () {
         var n, i, o, s, l;
         n = mUtil.get("m_aside_left"), i = mUtil.hasClass(n, "m-aside-left--offcanvas-default") ? "m-aside-left--offcanvas-default" : "m-aside-left", t = new mOffcanvas("m_aside_left", {
            baseClass: i,
            overlay: !0,
            closeBy: "m_aside_left_close_btn",
            toggleBy: [{
               target: "m_aside_left_toggle",
               state: "m-aside-left-toggler--active"
            }, {
               target: "m_aside_left_toggle_mobile",
               state: "m-brand__toggler--active"
            }]
         }), s = mUtil.get("m_ver_menu"), l = "1" === mUtil.attr(s, "m-menu-dropdown") ? "dropdown" : "accordion", "1" === mUtil.attr(s, "m-menu-scrollable") && (o = {
            height: function () {
               if (mUtil.isInResponsiveRange("desktop")) return mUtil.getViewPort().height
            }
         }), e = new mMenu("m_ver_menu", {
            scroll: o,
            submenu: {
               desktop: {
                  default: l,
                  state: {
                     body: "m-aside-left--minimize",
                     mode: "dropdown"
                  }
               },
               tablet: "accordion",
               mobile: "accordion"
            },
            accordion: {
               autoScroll: !1,
               expandAll: !1
            }
         })
      },
      getAsideMenu: function () {
         return e
      },
      onLeftSidebarToggle: function (e) {},
      closeMobileAsideMenuOffcanvas: function () {
         mUtil.isMobileDevice() && t.hide()
      },
      closeMobileHorMenuOffcanvas: function () {
         mUtil.isMobileDevice() && n.hide()
      },
      closeAsideMenuOffcanvas: function () {
         t.hide()
      },
      closeHorMenuOffcanvas: function () {
         n.hide()
      }
   }
}();
$(document).ready(function () {
   !1 === mUtil.isAngularVersion() && mLayout.init()
});