<div class="slider-container rev_slider_wrapper" style="height: 100%;">
	<div id="revolutionSlider" class="slider rev_slider manual">
		<ul>
			@foreach ($Slider as $item)
			<li data-transition="fade">
				<img src="{{ $item->ver_imagen }}"
					alt=""
					data-bgposition="center center"
					data-bgfit="cover"
					data-bgrepeat="no-repeat"
					data-bgparallax="1"
					class="rev-slidebg">

				<h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light"
					data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
					data-y="center" data-voffset="['-80','-80','-80','-40']"
					data-start="800"
					data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">{{ $item->titulo1 }}</h1>

				<div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
					data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
					data-y="center" data-voffset="['-42','-42','-42','2']"
					data-start="800"
					data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">{{ $item->titulo2 }}</div>

				<a href="{{ $item->link }}" class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
					data-hash
					data-hash-offset="85"
					data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
					data-y="center" data-voffset="['60','60','60','100']"
					data-start="1500"
					style="font-size: 12px; padding: 15px 6px;"
					data-transform_in="y:[-300%];opacity:0;s:500;">Ver más</a>
			</li>
			@endforeach
		</ul>
	</div>
</div>
