:- consult(logica).
:- consult(expresiones).
:- consult(calculadora).
:- consult(deduccion).
:- consult(arbol).
:- consult(conectores).
:- consult(tablas).
:- consult(conceptos).
:- consult(evaluacion).
:- consult(retos).
:- consult(trivial).
:- consult(puzzle).
:- consult(opciones).
:- consult(creditos).

:- dynamic(archivos/2).

aumentarHeap :- 
		B is 512 * 2, % B = 64
		L is 512 * 2, % L = 64
		R is 512 * 2, % R = 64
		H is 256 * 2, % H = 256
		T is 8192 * 2, % T = 2048
		P is 16384 * 2, % P = 8192
		S is 512 * 2, % S = 64
		I is 512 * 2, % I = 256
		O is 512 * 2, % O = 256
		xinit(B, L, R, H, T, P, S, I, O),
		!.

fverd :- 
		aumentarHeap, 
		fverd(iniciar_programa).
cerrando :- cerrarTodo.

% Definiendo UI.
eci_logic :- 
   _S1 = [ws_caption,ws_minimizebox,ws_sysmenu,ws_ex_appwindow,dlg_ownedbyprolog],
   _S2 = [ws_child,ws_visible,ss_center],
   _S3 = [ws_child,bs_groupbox,ws_visible,bs_center],
   _S4 = [ws_child,ws_tabstop,ws_visible,bs_pushbutton,bs_text,bs_center,bs_vcenter],
   wdcreate(  eci_logic,        `ECI-Logic`,            450, 201, 446, 298, _S1 ),
   wccreate( (eci_logic,11000), static, `ECI-Logic`,    130,  20, 200,  40, _S2 ),
   wccreate( (eci_logic,11001), static, `¡Bienvenido!`, 130,  80, 200,  30, _S2 ),
   wccreate( (eci_logic,12000), button, `Módulos`,       20, 140, 400,  90, _S3 ),
   wccreate( (eci_logic,1000),  button, `Conceptos`,     40, 170, 100,  40, _S4 ),
   wccreate( (eci_logic,1001),  button, `Evaluación`,   170, 170, 100,  40, _S4 ),
   wccreate( (eci_logic,1002),  button, `Retos`,        300, 170, 100,  40, _S4 ).

iniciar_programa :- 
		fuentes_inicio, 
		pantalla_inicio, 
		menu_inicio, 
		absolute_file_name(reglasInferencia, Reglas), 
		asserta(( archivos(`reglasInferencia`, Reglas) )), 
		!.

fuentes_inicio :- 
		wfcreate( titulo, arial, 40, 2 ), 
		wfcreate( subtitulo, arial, 25, 2 ), 
		wfcreate( grupo, arial, 20, 0 ), 
		wfcreate( botonesNegrilla, arial, 18, 2 ).

pantalla_inicio :- 
		eci_logic, 
		show_dialog(eci_logic), 
		window_handler(eci_logic,eci_logic), 
		define_brush_colours, 
		fuentesInicio.

fuentesInicio :- 
		forall( member(V,[
			11000
		]), wfont((eci_logic, V), titulo)), 
		forall( member(V,[
			11001
		]), wfont((eci_logic, V), subtitulo)), 
		forall( member(V,[
			12000
		]), wfont((eci_logic, V), grupo)), 
		forall( member(V,[
			1000, 1001, 1002
		]), wfont((eci_logic, V), botonesNegrilla)), 
		!.

% Manejo de los menus.

%% Declaracion de la barra de menus.
menu_inicio :- 
		wmcreate( menu_inic ),
		wmnuadd( menu_inic, -1, `Salir`, 1001 ),

		wmcreate( menu1_inic ),
		wmnuadd( menu1_inic, -1, `Créditos`, 1000 ),
		
		winapi( (user32,'CreateMenu'), [], 0, DialogMenuHandle ),

		wmnuadd( menu(DialogMenuHandle),-1, `Archivo`, menu_inic ),
		wmnuadd( menu(DialogMenuHandle),-1, `Acerca de`, menu1_inic ),

		wndhdl(eci_logic,H),
		winapi( (user32,'SetMenu'), [H,DialogMenuHandle ], 0, _ ),
		winapi( (user32,'DrawMenuBar'), [H], 0, _ ).

eci_logic( Win, msg_menu, ID, _ ) :- 
		menus_inicio(Item,ID), 
		eci_logic( Item, Win ).

add_menu( eci_logic, Name, Item ) :-
		winapi( (user32,'CreateMenu'), [], 0, DialogMenuHandle ),
		wmnuadd( menu(DialogMenuHandle), -1, Name, Item ).

%% Declaracion de los menus.
menus_inicio(`Créditos`,1000).
menus_inicio(`Salir`,1001).

%% Acciones de los elementos de los menus.
eci_logic(`Créditos`, Win) :- 
		iniciar_creditos.

eci_logic(`Salir`, Win) :- 
		accionCerrar.

% Acciones de botones.
eci_logic(_, msg_close, _, _) :- 
		accionCerrar.

accionCerrar :- cerrando.

%% Boton de conceptos.
eci_logic( (eci_logic,1000), msg_button, _, _ ) :- 
		cambioVentanas(eci_logic, iniciar_conceptos).

%% Boton de evaluacion.
eci_logic( (eci_logic,1001), msg_button, _, _ ) :- 
		cambioVentanas(eci_logic, iniciar_evaluacion).

%% Boton de retos.
eci_logic( (eci_logic,1002), msg_button, _, _ ) :- 
		cambioVentanas(eci_logic, iniciar_retos).
