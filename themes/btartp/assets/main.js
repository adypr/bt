 (function(){const r=document.createElement("link").relList;if(r&&r.supports&&r.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))s(e);new MutationObserver(e=>{for(const t of e)if(t.type==="childList")for(const o of t.addedNodes)o.tagName==="LINK"&&o.rel==="modulepreload"&&s(o)}).observe(document,{childList:!0,subtree:!0});function c(e){const t={};return e.integrity&&(t.integrity=e.integrity),e.referrerPolicy&&(t.referrerPolicy=e.referrerPolicy),e.crossOrigin==="use-credentials"?t.credentials="include":e.crossOrigin==="anonymous"?t.credentials="omit":t.credentials="same-origin",t}function s(e){if(e.ep)return;e.ep=!0;const t=c(e);fetch(e.href,t)}})();console.log("Footer");

const domElem = (selector) => document.querySelector(selector);
const addEvent = (...args) => args[0].addEventListener(...args.slice(1));
const body = domElem('body');


const burger = domElem('.nav__burger');
const overlay = domElem('.nav__overlay');

function toggle() {
    burger.classList.toggle('open');
    overlay.classList.toggle('open');
    body.classList.toggle('open');
}

function toggleMenu(e) {
    toggle();
    e.preventDefault();
    return false;
}

addEvent(burger, 'click', toggleMenu);
addEvent(overlay, 'click', toggleMenu);

