% Definiendo UI.
creditos :- 
   _S1 = [ws_caption,ws_dlgframe,ws_sysmenu,ws_ex_topmost,dlg_ownedbyprolog],
   _S2 = [ws_child,ws_border,ws_visible],
   wdcreate(  creditos,        `Créditos`,        546, 212, 206, 328, _S1 ),
   wccreate( (creditos,10000), grafix, `Grafix1`,   0,   0, 200, 300, _S2 ).

iniciar_creditos :- 
		pantalla_creditos, 
		!.

pantalla_creditos :- 
		creditos,
		show_dialog(creditos), 
		window_handler(creditos,creditos), 
		define_brush_colours, 
		define_image_cred.

define_image_cred :- 
		load_images(img_creditos, 'imagenes/creditos.bmp'), 
		!.

%% Cargar imagenes.
creditos( (creditos,10000), msg_paint,_,_ ) :- 
		gfx_paint((creditos,10000)), 
		gfx(bitmap(0,0,200,300,0,0,img_creditos)), 
		gfx_end((creditos,10000)).

% Acciones de botones.
creditos(_, msg_close, _, _) :- 
		wclose(creditos).
