<div class="aula">

	<button class="abrir_menu"> <i class="fa fa-bars"></i> </button>

	<div class="menu">
		<i class="fa fa-times" id="fechar_menu"></i>
		<h3> Aulas </h3>
		<ul>
			<li class="menu-active" > <a href="#aula1" > Aula teórica </a> </li>
			<li> <a href="#aula2" > Aula em vídeo </a> </li>
			<li> <a href="#questionario" > Questionário </a> </li>
		</ul>
	</div>

	<div class="aula1" id="aula1" >
		<div class="conteudo">
			<h2> Aula teórica </h2>
			<p>Na aulas de hoje será ensinando a maneira correta de achar a questão certa
			em questões de verdadeiro ou falso. A técnica se consiste em analisar as colunas 
			das alternativas apresentadas, e em cada coluna destaca-se a alternativa que apresenta
			a resposta predominante, depois de analisar todas as alternativas restará apenas 
			uma letra, esta que, terá todas as colunas com respostas predominantes, ou seja, está
			alternativa será a correta.
			</p>
		</div>
	</div>
	
	<div class="aula2" id="aula2" >
		<div class="conteudo">
			<h2> Aula em vídeo </h2>
			<iframe
				src="https://www.youtube.com/embed/8H1ZsP5X6Gk">
			</iframe>
		</div>	
	</div>

	<div class="questionario" id="questionario" >
		<div class="conteudo">
			<h2> Questionário </h2>

			<div id="questao1">
				<h4> 1 - Os humanos e as angiospermas: <br><br> </h4>
				<p>
					(&nbsp;&nbsp;) têm corpos pluricelulares organizados em tecidos e órgãos.<br>
					(&nbsp;&nbsp;) compartilham o mesmo tipo de nutrição.<br>
					(&nbsp;&nbsp;) reproduzem-se de forma sexuada e assexuada.<br>
					(&nbsp;&nbsp;) formam gametas masculinos e femininos.<br><br>
					A sequência correta é: <br>
				</p>
				<label class="radio">
					<input type="radio" name="q1" value="1" data-correto="0">
					<span> F – V – F – V. </span>
				</label>
				<label class="radio">
					<input type="radio" name="q1" value="2" data-correto="1">
					<span>V – F – F – V.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q1" value="3" data-correto="0">
					<span>V – F – V – F.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q1" value="4" data-correto="0">
					<span>F – F – V – V.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q1" value="5" data-correto="0">
					<span>V – V – F – F.</span>
				</label>
			</div>

			<div id="questao2">
				<h4> 2 - assinale com V (verdadeiro) ou F (falso) as afirmações abaixo. <br><br> </h4>
				<p>
					(&nbsp;&nbsp;) O DNA original atua como molde, e cada novo DNA possui uma fita antiga e outra nova.<br>
					(&nbsp;&nbsp;) Os quatro ribonucleosídeos trifosfatados, dATP, dGTP, dCTP e dUTP, devem estar presentes.<br>
					(&nbsp;&nbsp;) O DNA deve ser desnaturado (desenrolado) para tornar-se acessível ao pareamento das novas bases.<br>
					(&nbsp;&nbsp;) A enzima DNA polimerase adiciona nucleotídeos novos de acordo com o molde de DNA.<br><br>
					A sequência correta é: <br>
				</p>
				<label class="radio">
					<input type="radio" name="q2" value="1" data-correto="0">
					<span> V – V – F – F. </span>
				</label>
				<label class="radio">
					<input type="radio" name="q2" value="2" data-correto="0">
					<span>F – F – V – V.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q2" value="3" data-correto="1">
					<span>V – F – V – V.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q2" value="4" data-correto="0">
					<span>F – V – F – V.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q2" value="5" data-correto="0">
					<span>V – F – V – F.</span>
				</label>
			</div>
			
			<div id="questao3">
				<h4> 3 - Identifique abaixo as afirmativas verdadeiras ( V ) e as falsas ( F ) referentes à Maiêutica. <br><br> </h4>
				<p>
					(&nbsp;&nbsp;) Teoria segundo a qual a realidade é constituída por uma única substância e os seres redutíveis à unidade.<br>
					(&nbsp;&nbsp;) Método socrático de induzir as pessoas a descobrirem suas próprias verdades.<br>
					(&nbsp;&nbsp;) Crença de que o conhecimento individual resulta de reminiscências inconscientes herdadas de experiências de vidas passadas.<br>
					(&nbsp;&nbsp;) Método de conhecimento que resulta dos hábitos racionais que são organizados e acumulados pela memória e exteriorizados pela reflexão.<br><br>
					(&nbsp;&nbsp;) Processo dialético e pedagógico socrático em que se multiplicam as perguntas a fim de se obter, por indução dos casos particulares e concretos, um conceito geral do objeto em questão.<br><br>
					A sequência correta é: <br>
				</p>
				<label class="radio">
					<input type="radio" name="q3" value="1" data-correto="0">
					<span> V - F - F - V - V.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q3" value="2" data-correto="0">
					<span> F - V - F - F - F.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q3" value="3" data-correto="0">
					<span> V - V - V - F - V.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q3" value="4" data-correto="1">
					<span> F - V - F - F - V.</span>
				</label>
				<label class="radio">
					<input type="radio" name="q3" value="5" data-correto="0">
					<span>F - F - V - V - F.</span>
				</label>
			</div>
			
			<h3 id="feedback"></h3>
			<button id="btn_correcao" > Conferir respostas </button> 
		</div>
	</div>
</div>
