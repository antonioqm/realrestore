@if($professional->trashed())
	<a class="button is-black is-small">
	  <span class="icon is-small">
	    <i class="fa fa-undo"></i>
	  </span>
	  </a>
@else
	@verbatim
		<a @click="onEditProfessional(<?=$professional->id . ", ". "'" . ($professional->pt ? $professional->pt .". " : "") . " " . $professional->name."'"?>)"
	@endverbatim

	class="button is-info is-small">
	  <span class="icon is-small">
	    <i class="fa fa-pencil"></i>
	  </span>
	  </a>
	{{-- Uma de mistura de javascript com PHP para capturar o id do profissional, que vem do BAckend PHP, e lançar esse id em um evento javascript via vue --}}
	@verbatim
		<a @click="onDeleteProfessional(<?=$professional->id . ", ". "'" . ($professional->pt ? $professional->pt .". " : "") . " " . $professional->name."'"?>)"
	@endverbatim
		class="button is-danger is-small {{$professional->trashed() ? 'is-disabled' : ''}}" >
	  <span class="icon is-small">
	    <i class="fa fa-times"></i>
	  </span>
	  </a>
@endif