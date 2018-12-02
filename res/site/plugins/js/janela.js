function abreJanela(url){
	window.open(url, 'windowname', 'width=1080,screenX='+((window.screen.width-1080)/2)+', screenY='+((window.screen.height-650)/2)+',height=550,menubar=no,scrollbars=no,scrolling=no');
}

function abreJanelaImpressao (url){
	window.open(url, 'windowname', 'width=890,screenX='+((window.screen.width-890)/2)+', screenY='+((window.screen.height-650)/2)+',height=550,menubar=no,scrollbars=no,scrolling=no');
}

function abreJanelaIndicar (url){
	window.open(url, 'windowname', 'width=700,screenX='+((window.screen.width-700)/2)+', screenY='+((window.screen.height-400)/2)+',height=400,menubar=no,scrollbars=no,scrolling=no');
}


function abreJanelaContador(url, tabela_id, action){
	tabela_id = tabela_id.split('/');
	tabela = tabela_id[0];
	ID = tabela_id[1];
	$.ajax({
        type: "POST",
        dataType: "json",
        url: action,
        data: 'tabela='+tabela+'&ID='+ID,
        success: function( data ) {
        	console.log('Contado acesso ao arquivo.')
        },
        error: function( data ) { }
    });
	window.open(url, 'windowname', 'width=890,screenX='+((window.screen.width-890)/2)+', screenY='+((window.screen.height-650)/2)+',height=550,menubar=no,scrollbars=no,scrolling=no');
}
