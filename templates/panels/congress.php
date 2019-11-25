<div id="thematicCongress">
	{{ congreso.tematica }}
</div>
<h1 id="titleCongress">
	{{ congreso.titulo }}
</h1>
<div id="subContentCongress">
	<div id="dateCongress">{{ congreso.date }}</div>
	<div id="specialtyCongress"> {{ congreso.especialidad }}</div>
	<div id="cityCountry"> {{ congreso.ciudad }} | {congreso.pais} </div>
	<div class="listCongress" id="listadoTemas">
		<h2 class="subTitle">
			{{ theme.subTituloListadoTemas }}
		</h2>
		{% if congreso.subjectsExpose|lenght > 0 %}
		<ul id="congressSubjectsExpose" class="subjectsExpose">
			{% for itemListTemas in congreso.listTemas %}
			<li class="itemList">
				{{ itemListTemas.nombreTema }}
			</li>				
			{% endfor %}
		</ul>
		{% endif %}
	</div>
	<div class="listCongress" id="listadoExpositores">
		{% if congreso.listExpositores|lenght > 0 %}
		<h2 class="subTitle">
			{{ theme.subtituloListadoExpositores }}
		</h2>
		<ul id="congressExhibitors" class="listExhibitors">
			{% for itemExhibitors in congreso.listaExpositores %}
			<li class="itemList">
				{{ itemExhibitors.nombre }}
			</li>
			{% endfor %}
		</ul>
		{% endif %}
	</div>
	<div id="downloads">
		{% if congreso.downloads|lenght > 0 %}
			<h2 class="subTitle">
				{{ theme.download }}
			</h2>
			{% for itemListDownload in congresos.downloads %}
				<li class="listDownload">
					<a href="{{ itemListDownload.url }}" class="itemDownload">{{ itemListDownload.tituloDownload }}</a>
				</li>
			{% endfor %}
		{% endif %}
	</div>

</div>
