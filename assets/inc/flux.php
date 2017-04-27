<?php // rss2Parser.as
//
// @author: BlackWizzard
// @description: analyse un flux rss 2.0
class rss2Parser {
    public var xmlFile:String;
    public var x:XML;
    public var nObject:Object;
    public var nArray:Array;
    //
    function rss2Parser(xml:String) {
        System.useCodepage = true;
        nObject = new Object();
        nArray = new Array();
        x = new XML();
        x.ignoreWhite = true;
        x.parseXML(xml);
        parse();
    }
    //
    function rssInfo() {
        var tmpO:Object = new Object();
        tmpO.title = getValueByRef(x.childNodes[0].childNodes[0], "title");
        tmpO.link = getValueByRef(x.childNodes[0].childNodes[0], "link");
        tmpO.description = getValueByRef(x.childNodes[0].childNodes[0], "description");
        return tmpO;
    }
    //
    function parse() {
        var i:Number = getNodeNumberByRef(x.childNodes[0].childNodes[0], "item");
        while (x.childNodes[0].childNodes[0].childNodes[i] != undefined) {
            var tmpO:Object = new Object();
            tmpO.titre = getValueByRef(x.childNodes[0].childNodes[0].childNodes[i], "title");
            tmpO.description = ereg_replace(getValueByRef(x.childNodes[0].childNodes[0].childNodes[i], "description"), "n", "");
            tmpO.description = ereg_replace(tmpO.description, "a>", "a>");
            tmpO.description = ereg_replace(tmpO.description, "<a", "<a");
            tmpO.description = ereg_replace(tmpO.description, "u>", "u>");
            tmpO.description = ereg_replace(tmpO.description, "<u", "<u");
            tmpO.description = ereg_replace(tmpO.description, "i>", "i>");
            tmpO.description = ereg_replace(tmpO.description, "<i", "<i");
            tmpO.description = ereg_replace(tmpO.description, "b>", "b>");
            tmpO.description = ereg_replace(tmpO.description, "<b", "<b");
            tmpO.description = ereg_replace(tmpO.description, "img>", "img>");
            tmpO.description = ereg_replace(tmpO.description, "<img", "<img");
            tmpO.description = ereg_replace(tmpO.description, "&apos;", "'");
            tmpO.description = ereg_replace(tmpO.description, """, """);
            tmpO.link = getValueByRef(x.childNodes[0].childNodes[0].childNodes[i], "link");
            tmpO.source = getValueByRef(x.childNodes[0].childNodes[0].childNodes[i], "source");
            nArray.push(tmpO);
            i++;
        }
        return true;
    }
    //
    function getValueByRef(xm:XML, s:String) {
        var i:Number = 0;
        while (xm.childNodes[i] != undefined) {
            if (xm.childNodes[i].nodeName == s) {
                return (xm.childNodes[i].childNodes[0].toString());
            }
            i++;
        }
        return "";
    }
    //
    function getNodeNumberByRef(xm:XML, s:String) {
        var i:Number = 0;
        while (xm.childNodes[i] != undefined)
            if (xm.childNodes[i].nodeName == s) {
                return i;
            }
            i++;
        }
    }
    //
    function getValue():Object {
        return nArray;
    }
    //
    function isLoaded() {
        if (x.getBytesLoaded() == x.getBytesTotal()) {
            return 100;
        } else {
            return x.getBytesLoaded()/x.getBytesTotal()*100;
        }
    }
    //
    function ereg_replace(s, str, rep, chr) {
        var t = (chr<0) ? s.substr(chr) : s.substr(0, chr);
        var s = str.length;
        var r = rep.length;
        var p = t.indexOf(str);
        while (p != -1) {
            t = t.substr(0, p)+rep+t.substr(p+s);
            p = t.indexOf(str, p+r);
        }
        return (chr) ? (chr<0) ? s.substr(0, s.length+chr)+t : t+s.substr(chr) : t;
    }
} ?>
