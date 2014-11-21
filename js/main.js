// Inicialização do script
window.onload = init;
function init(){
	featured.init();
}

//******************************************************************//
//							Featured								//
//******************************************************************//
var featured = {
	// Atributos
	index : 1,
	intervalInMilli : 10000,
	interval : null,
	transitionIntervalInMilli : 500,
	progressBarTimeElapsed : 0,
	progressBarIntervalInMilli : 10,
	progressBarInterval : null,
	idPrefix : "#featPost",
	numOfFeatured : 5,
	// Métodos
	/**
	 * Inicializador
	 */
	init : function(){
		for(var i = 2; i <= featured.numOfFeatured; i++){
			$(featured.idPrefix+i).hide();
		}
		// Atrela listeners para os elementos do featured
		$("#featured").on("mouseenter", featured.pause);
		$("#featured").on("mouseleave", featured.play);
		$("#next").on("click", featured.next);
		$("#prev").on("click", featured.prev);
		
		// Incializa os timer listener
		featured.interval = $.timer(featured.next);
		featured.progressBarInterval = $.timer(featured.progressBar);
		featured.progressBarInterval.set({time : featured.progressBarIntervalInMilli, autostart : true});
		featured.interval.set({time : featured.intervalInMilli, autostart : true});
	},
	/**
	 * Método para trocar o post do featured para um próximo (loop encadeado)
	 */
	next : function(){
		// Fecha os listener durante as transições.
		featured.interval.stop();
		featured.progressBarInterval.stop();
		
		// Transição dos posts
		$(featured.idPrefix+featured.index).fadeOut(featured.transitionIntervalInMilli);
		featured.index++;
		if(featured.index > featured.numOfFeatured)	featured.index = 1;
		$(featured.idPrefix+featured.index).fadeIn(featured.transitionIntervalInMilli);
		// Delay para dar tempo das transições serem completadas.
		setTimeout(function(){
			// zera a barra de progresso;
			featured.progressBarTimeElapsed = 0;
			featured.progressBar();
			// reinicia os timer listener
			featured.progressBarInterval.play();
			featured.interval.play();
		},featured.transitionIntervalInMilli);
	},
	
	prev : function(){
		// Fecha os listener durante as transições.
		featured.interval.stop();
		featured.progressBarInterval.stop();
		
		// Transição dos posts
		$(featured.idPrefix+featured.index).fadeOut(featured.transitionIntervalInMilli);
		featured.index--;
		if(featured.index < 1)	featured.index = featured.numOfFeatured;
		$(featured.idPrefix+featured.index).fadeIn(featured.transitionIntervalInMilli);
		// Delay para dar tempo das transições serem completadas.
		setTimeout(function(){
			// zera a barra de progresso;
			featured.progressBarTimeElapsed = 0;
			featured.progressBar();
			// reinicia os timer listener
			featured.progressBarInterval.play();
			featured.interval.play();
		},featured.transitionIntervalInMilli);
	},
	/**
	 * Método para atualização da barra de progresso (tempo para o próximo post)
	 */
	progressBar : function(){
		featured.progressBarTimeElapsed += featured.progressBarIntervalInMilli+1.55;
		var width = featured.progressBarTimeElapsed * 100 / featured.intervalInMilli;
		$("#progressBar").css({"width" : width+"%"});
	},
	
	pause : function(){
		featured.progressBarInterval.pause();
		featured.interval.pause();
	},
	
	play : function(){
		featured.progressBarInterval.play();
		featured.interval.play();
	}
};
