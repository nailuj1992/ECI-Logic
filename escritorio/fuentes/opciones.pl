fuentes_conceptosTodos :- 
		wfcreate( titulo, arial, 40, 2 ), 
		wfcreate( subtitulo, arial, 25, 2 ), 
		wfcreate( grupo, arial, 18, 2 ), 
		wfcreate( grupo2, arial, 16, 0 ), 
		wfcreate( botonesNegrilla, arial, 18, 2 ), 
		wfcreate( textos, arial, 15, 0 ), 
		wfcreate( textosNegrilla, arial, 15, 2 ), 
		wfcreate( textos2, arial, 14, 0 ), 
		wfcreate( listas, arial, 13, 0 ), 
		wfcreate( resultados, arial, 24, 0 ), 
		wfcreate( botonAtras, arial, 30, 2 ).

% Definiendo UI - Opcion 1 de conceptos.
conceptos1 :- 
   _S1 = [ws_caption,ws_minimizebox,ws_sysmenu,ws_ex_appwindow,dlg_ownedbyprolog],
   _S2 = [ws_child,ws_visible,ss_center],
   _S3 = [ws_child,bs_groupbox,ws_visible,bs_center],
   _S4 = [ws_child,bs_groupbox,ws_visible,bs_left],
   _S5 = [ws_child,ws_visible,ss_left],
   _S6 = [ws_child,ws_visible,ss_right],
   _S7 = [ws_child,ws_tabstop,ws_visible,bs_pushbutton,bs_text,bs_center,bs_vcenter],
   wdcreate(  conceptos1,        `ECI-Logic`,                                                                                                                                          394, 151, 566, 388, _S1 ),
   wccreate( (conceptos1,11000), static, `Lógica Proposicional`,                                                                                                                        30,  10, 470,  40, _S2 ),
   wccreate( (conceptos1,12000), button, `Objetivo`,                                                                                                                                    10,  50, 540, 300, _S3 ),
   wccreate( (conceptos1,12002), button, `Ejemplo`,                                                                                                                                    110, 160, 330, 180, _S4 ),
   wccreate( (conceptos1,11001), static, `En la lógica proposicional se examinan las posibles relaciones entre proposiciones, sin tener en cuenta su contenido.`,                       20,  80, 520,  30, _S5 ),
   wccreate( (conceptos1,11002), static, `La finalidad de la lógica proposicional es la de reducir procedimientos verbales complicados en simples dispositivos de letras y símbolos.`,  20, 120, 520,  30, _S5 ),
   wccreate( (conceptos1,11004), static, `Proposición:`,                                                                                                                               120, 190,  70,  20, _S6 ),
   wccreate( (conceptos1,11003), static, `7 es un numero primo y 4 es par.`,                                                                                                           200, 190, 230,  20, _S5 ),
   wccreate( (conceptos1,11005), static, `p:`,                                                                                                                                         120, 220,  70,  20, _S6 ),
   wccreate( (conceptos1,11006), static, `7 es un numero primo.`,                                                                                                                      200, 220, 230,  20, _S5 ),
   wccreate( (conceptos1,11008), static, `q:`,                                                                                                                                         120, 250,  70,  20, _S6 ),
   wccreate( (conceptos1,11007), static, `4 es par.`,                                                                                                                                  200, 250, 230,  20, _S5 ),
   wccreate( (conceptos1,11009), static, `Símbolo:`,                                                                                                                                   120, 280,  70,  20, _S6 ),
   wccreate( (conceptos1,11010), static, `y`,                                                                                                                                          200, 280, 230,  20, _S5 ),
   wccreate( (conceptos1,11012), static, `Fórmula:`,                                                                                                                                   120, 310,  70,  20, _S6 ),
   wccreate( (conceptos1,11011), static, `p ∧ q`,                                                                                                                                      200, 310, 230,  20, _S5 ),
   wccreate( (conceptos1,25000), button, `←`,                                                                                                                                          510,  15,  40,  30, _S7 ).

iniciar_conceptos1 :- 
		fuentes_conceptosTodos, 
		pantalla_conceptos1, 
		!.

pantalla_conceptos1 :- 
		conceptos1,
		show_dialog(conceptos1), 
		window_handler(conceptos1,conceptos1), 
		define_brush_colours, 
		fuentesConceptos1.

fuentesConceptos1 :- 
		forall( member(V,[
			11000
		]), wfont((conceptos1, V), titulo)), 
		forall( member(V,[
			12000
		]), wfont((conceptos1, V), grupo)), 
		forall( member(V,[
			12002
		]), wfont((conceptos1, V), grupo2)), 
		forall( member(V,[
			11001, 11002, 11003, 11006, 11007, 11010, 11011
		]), wfont((conceptos1, V), textos)),
		forall( member(V,[
			11004, 11005, 11008, 11009, 11012
		]), wfont((conceptos1, V), textosNegrilla)),
		forall( member(V,[
			25000
		]), wfont((conceptos1, V), botonAtras)), 
		!.

% Definiendo UI - Opcion 2 de conceptos.
conceptos2 :- 
   _S1 = [ws_caption,ws_minimizebox,ws_sysmenu,ws_ex_appwindow,dlg_ownedbyprolog],
   _S2 = [ws_child,ws_visible,ss_center],
   _S3 = [ws_child,bs_groupbox,ws_visible,bs_center],
   _S4 = [ws_child,ws_visible,ss_left],
   _S5 = [ws_child,bs_groupbox,ws_visible,bs_left],
   _S6 = [ws_child,ws_tabstop,ws_visible,bs_pushbutton,bs_text,bs_center,bs_vcenter],
   wdcreate(  conceptos2,        `ECI-Logic`,                                                                                                                                                                                                                                                                                          336,  30, 706, 668, _S1 ),
   wccreate( (conceptos2,11000), static, `Proposiciones`,                                                                                                                                                                                                                                                                               50,  10, 590,  40, _S2 ),
   wccreate( (conceptos2,12000), button, `¿Qué es una proposición?`,                                                                                                                                                                                                                                                                    10,  50, 680, 310, _S3 ),
   wccreate( (conceptos2,11002), static, `Podemos definir una proposición como el significado de una oración declarativa que puede ser Verdadera o Falsa, por ser una afirmación.`,                                                                                                                                                     20,  80, 660,  30, _S4 ),
   wccreate( (conceptos2,11003), static, `Recuérdese, que las oraciones son conjuntos de palabras que expresan pensamientos completos, se dividen en declarativas, interrogativas y exclamativas.`,                                                                                                                                     20, 120, 660,  30, _S4 ),
   wccreate( (conceptos2,11007), static, `Las oraciones declarativas, que son las que nos interesan para nuestro estudio, son aquellas que indican afirmación, así que solo de éstas se puede decir que transmiten una proposición, que puede ser Verdadera o Falsa.`,                                                                  20, 160, 660,  30, _S4 ),
   wccreate( (conceptos2,12002), button, `Ejemplo`,                                                                                                                                                                                                                                                                                     20, 200, 660, 110, _S5 ),
   wccreate( (conceptos2,11008), static, `1. El ácido sulfúrico corroe la madera.`,                                                                                                                                                                                                                                                     80, 230, 250,  20, _S4 ),
   wccreate( (conceptos2,11009), static, `2. Dos más dos es igual a tres.`,                                                                                                                                                                                                                                                             80, 250, 250,  20, _S4 ),
   wccreate( (conceptos2,11010), static, `3. ¿Qué comen los marcianos?`,                                                                                                                                                                                                                                                               410, 230, 250,  20, _S4 ),
   wccreate( (conceptos2,11011), static, `4. ¡Que buena es mi suerte!`,                                                                                                                                                                                                                                                                410, 250, 250,  20, _S4 ),
   wccreate( (conceptos2,11012), static, `Las dos últimas no son oraciones declarativas, pues las órdenes, preguntas o exclamaciones no son verdaderas o falsas.`,                                                                                                                                                                      30, 270, 640,  30, _S4 ),
   wccreate( (conceptos2,11013), static, `Las proposiciones se simbolizan con simples literales y las expresiones mediante las cuales son relacionadas, son signos cuyo significado es constante.`,                                                                                                                                     20, 320, 660,  30, _S4 ),
   wccreate( (conceptos2,12001), button, `Tipos de proposiciones`,                                                                                                                                                                                                                                                                      10, 360, 680, 270, _S3 ),
   wccreate( (conceptos2,12004), button, `Simples o atómicas`,                                                                                                                                                                                                                                                                          20, 380, 330, 240, _S5 ),
   wccreate( (conceptos2,11005), static, `En ellas no es posible distinguir partes componentes que sean, a su vez, también proposiciones, es decir afirmaciones verdaderas o falsas; en otras palabras, tienen un sujeto y un predicado, no tienen claúsulas componentes unidas por conjunciones como "Y", "O", y "SI ... ENTONCES".`,  30, 410, 310, 100, _S4 ),
   wccreate( (conceptos2,12003), button, `Ejemplo`,                                                                                                                                                                                                                                                                                     30, 510, 310, 100, _S5 ),
   wccreate( (conceptos2,11001), static, `1. 4 es un número natural.`,                                                                                                                                                                                                                                                                  40, 540, 290,  20, _S4 ),
   wccreate( (conceptos2,11004), static, `2. La ballena tiene respiración pulmonar.`,                                                                                                                                                                                                                                                   40, 560, 290,  20, _S4 ),
   wccreate( (conceptos2,11014), static, `3. 1976 fue año bisiesto.`,                                                                                                                                                                                                                                                                   40, 580, 290,  20, _S4 ),
   wccreate( (conceptos2,12005), button, `Compuestas`,                                                                                                                                                                                                                                                                                 350, 380, 330, 240, _S5 ),
   wccreate( (conceptos2,11006), static, `Están construidas a partir de otras proposiciones simples o atómicas, asociandolas con una lista de conjunciones lógicas. Estas conjunciones son: "Y", "O", y "SI ... ENTONCES".`,                                                                                                           360, 410, 310,  90, _S4 ),
   wccreate( (conceptos2,12006), button, `Ejemplo`,                                                                                                                                                                                                                                                                                    360, 500, 310, 110, _S5 ),
   wccreate( (conceptos2,11015), static, `1. Turquía es un país europeo o Turquía es un país asiático.`,                                                                                                                                                                                                                               370, 530, 290,  20, _S4 ),
   wccreate( (conceptos2,11016), static, `2. Si la ballena es un mamífero, entonces la ballena tiene respiración pulmonar.`,                                                                                                                                                                                                           370, 550, 290,  30, _S4 ),
   wccreate( (conceptos2,11017), static, `3. 4 es un número natural y 4 es un número par.`,                                                                                                                                                                                                                                            370, 580, 290,  20, _S4 ),
   wccreate( (conceptos2,25000), button, `←`,                                                                                                                                                                                                                                                                                          650,  15,  40,  30, _S6 ).

iniciar_conceptos2 :- 
		fuentes_conceptosTodos, 
		pantalla_conceptos2, 
		!.

pantalla_conceptos2 :- 
		conceptos2,
		show_dialog(conceptos2), 
		window_handler(conceptos2,conceptos2), 
		define_brush_colours, 
		fuentesConceptos2.

fuentesConceptos2 :- 
		forall( member(V,[
			11000
		]), wfont((conceptos2, V), titulo)), 
		forall( member(V,[
			12000, 12001
		]), wfont((conceptos2, V), grupo)), 
		forall( member(V,[
			12002, 12003, 12006, 
			12004, 12005
		]), wfont((conceptos2, V), grupo2)), 
		forall( member(V,[
			11002, 11003, 11007, 11012, 11013, 
			11005, 11006
		]), wfont((conceptos2, V), textos)),
		forall( member(V,[
			11008, 11009, 11010, 11011,  
			11001, 11004, 11014, 
			11015, 11016, 11017
		]), wfont((conceptos2, V), listas)),
		forall( member(V,[
			25000
		]), wfont((conceptos2, V), botonAtras)), 
		!.

% Acciones de botones.
conceptos1( (conceptos1,25000), msg_button,_,_ ) :- 
		cambioVentanas(conceptos1, iniciar_conceptos).

conceptos2( (conceptos2,25000), msg_button,_,_ ) :- 
		cambioVentanas(conceptos2, iniciar_conceptos).








