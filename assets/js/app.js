




app ={


homeViewSwitch: function(type){
        if(type == 1){

            $("#home-third").hide();
            $("#home-second").hide();
            $("#home-first").show();
		}
		else if(type == 2){
			$("#home-first").hide();
            $("#home-third").hide();
            $("#home-second").show();
		}
		else if(type == 3){
			$("#home-first").hide();
            $("#home-second").hide();
            $("#home-third").show();


		}
}

}