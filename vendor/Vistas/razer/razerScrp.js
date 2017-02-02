
var num_coches=5;

var final=100;

var coches=new Array;

function Coche( _num ) {
  this.num=_num;
  this.pos=0;

  this.avanza=function( _incPos ) {
    this.pos+=_incPos;
    $('#c'+this.num ).animate( {'margin-left': this.pos+'%'}, 2000 );
    return this.pos;
  }


  this.reinicia=function( ) {
    this.pos=0;
    $('#c'+this.num ).animate( {'margin-left': this.pos}, 2000 );
    
  }

} 

function iniciar_coches() {
  for( var i=0; i<num_coches; ++i) {
    coches[i]=new Coche( i+1 );
  }
}


function empezar_carrera() {
  var max=0;
  var tmpPos;
  while( coches[max].pos<final ) {
    for( var j=0; j<num_coches; ++j ) {
      tmpPos=coches[j].avanza( Math.floor( Math.random()*40+1) );
      max=(tmpPos<coches[max].pos)?max:j;
    }
  }
}



function reiniciar_coches() {
  for( var i=0; i<num_coches; ++i) {
    coches[i].reinicia();
  }
}



$(document).ready( function() {
  iniciar_coches();
    $('#empezar').click( function() {
    $(this).hide();
    $('#reiniciar').show();
    empezar_carrera();
    });
    $('#reiniciar').click( function() {
    $(this).hide();
    $('#empezar').show();    
    reiniciar_coches();
    });

});