//***************
// main
// for displaying current page - swapping content inside the <main>
var MainView = Backbone.View.extend({
	show: function(view){
		this.$view.remove();
        this.$view = view;
        this.$el.html(this.$view.render().$el);
	}
});

//***************
// header & navigation
var Header = Backbone.Model.extend({});
// var NavList = Backbone.Collection.extend({
// 	model: NavItem,
// });

var HeaderView = Backbone.View.extend({

	template: _.template('<button class="nav-button"><%= name %><span><%= title %></span></button><nav><ul><% _.each(pages, function(page){ %><li><a href="/<%= page.route %>"><span class="icon-<%= page.name %>"></span></a></li><%})%></ul></nav>'),
	
	initialize: function(){
		this.$el.append(this.render().$el);
		return this;
	},

	render: function(){
		this.$el.html(this.template(this.model.toJSON()));
		this.$el.on('load', this.onLoad());
		return this;
	},

	onLoad : function () {
	    console.log('onLoad');
	}

});

//***************
// about
var About = Backbone.Model.extend({
	urlRoot: '/about'
});

var AboutView = Backbone.View.extend({
	
	template: _.template('<section class="brief"><p><%= brief %></p></section><div class="content"><p><%= start %></p></div><ul class="resources"><% _.each(resourcelist, function(resource){ %><li><a href="<%= resource.link %>"><span class="<%= resource.icon %>"></span></a></li><% }) %></ul><div class="content"><p><%= future %></p></div>'),

	initialize: function(){
		this.$el.append(this.render().$el);
		return this;
	},

	render: function(){
		this.$el.html(this.template(this.model.toJSON()));
		this.$el.on('load', this.onLoad());
		return this;
	},

	onLoad : function () {
	    console.log('onLoad');
	}

});

//***************
// app

$(function() {
	var App = new (Backbone.View.extend({

		template: _.template('<header></header><main></main><footer></footer>'),

		events: {
			'click nav a': function(e){
				e.preventDefault();
				Backbone.history.navigate(e.target.pathname, {trigger: true});
			},
			'click .nav-button': function(){
				$('nav, .overlay').toggleClass('open');
			}
		},

		initialize: function(){
			var app = this;

			$(document).ready(function(){
				app.$el.append(app.render().$el);

				app.main = new MainView();
				app.header = new HeaderView({ model: new Header(data.main()), el: $('header') });

				$('header').append(app.header.render().$el);				
			});

			
		},

		render: function(){
			this.$el.html(this.template());
			return this;
		},

		start: function(){
			Backbone.history.start({ pushState: true });
		},

		Router: new (Backbone.Router.extend({
			routes: {
				'': 'home',
				'about': 'about',
				'timeline': 'timeline',
				'skills': 'skills',
				'portfolio': 'portfolio',
				'portfolio/:name': 'portfolioItem',
				'contact': 'contact'
			},

			home: function(){
				$('body').addClass('home');
				$('nav, .overlay').removeClass('open');
				$('main').empty();
			},

			about: function(){
				console.log('about');
				//this.loader();

				var aboutView = new AboutView({ model: new About(data.about), el: $('main') });

				$('body').removeClass('home');
				$('footer').before(aboutView.render().$el);

			},

			timeline: function(){
				console.log('tline');
			},

			skills: function(){
				console.log('skill');
			},

			portfolio: function(){
				console.log('port');
			},

			portfolioItem: function(name){
				console.log('pitem');
			},

			contact: function(){
				console.log('contact');
			}
		}))()

	}))({el: document.body});

	App.start();

});

$(window).load(function(){
	$('body').addClass('loaded');
});