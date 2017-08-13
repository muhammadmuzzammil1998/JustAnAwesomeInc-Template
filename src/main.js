/*
	MIT License

	Copyright (c) 2017 Muhammad Muzzammil (http://muzzammil.xyz)

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.
*/
$(document).ready(function(){
	$("#title, .navbar, .spacer5").fadeOut(1)
	$(".spacer10").slideUp(1000)
	$("#title").fadeIn(1500)
	$(".navbar").delay(1000).slideDown(1000)
	$(".spacer5").delay(1000).slideUp(1000)
	$("#aboutNav").delay(1000).addClass("active")
	$("#about").delay(1500).fadeIn(1000)
	$("#aboutNav").click(function(){
		$(".spacer5").slideDown(1)
		$("#team, #work, #hire").fadeOut(500)
		$(".spacer5").slideUp(1000)
		$("#about").fadeIn(1000)
		$("#teamNav, #workNav, #hireNav").removeClass("active")
		$("#aboutNav").addClass("active")
	})
	$("#teamNav").click(function(){
		$(".spacer5").slideDown(1)
		$("#about, #work, #hire").fadeOut(500)
		$(".spacer5").slideUp(1000)
		$("#team").fadeIn(1000)		
		$("#aboutNav, #workNav, #hireNav").removeClass("active")
		$("#teamNav").addClass("active")
	})
	$("#workNav").click(function(){
		$(".spacer5").slideDown(1)
		$("#about, #team, #hire").fadeOut(500)
		$(".spacer5").slideUp(1000)
		$("#work").fadeIn(1000)
		$("#teamNav, #aboutNav, #hireNav").removeClass("active")
		$("#workNav").addClass("active")
	})
	$("#hireNav").click(function(){
		$(".spacer5").slideDown(1)
		$("#about, #team, #work").fadeOut(500)
		$(".spacer5").slideUp(1000)
		$("#hire").fadeIn(1000)
		$("#teamNav, #workNav, #aboutNav").removeClass("active")
		$("#hireNav").addClass("active")
	})
})