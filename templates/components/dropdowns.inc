<div class="sl-l-block py-5">
	<h1>Dropdowns</h1>
</div>

<div class="sl-l-block py-3 mb-4">
	<div class="sl-l-block-item">
		<a
			class="sl-js-dropdown pr-3"
			data-dropdown_name="dropdown1"
			data-color="text"
			data-icon="arrow"
			href="#"
		>
			Dropdown Link
		</a>
		<div
			class="sl-c-dropdown-menu"
			data-dropdown_parent="dropdown1"
			data-background="dark"
			data-color="light"
		>
			<ul>
				<li data-hover="dark">
					<a class="p-3" href="#">Item 1</a>
				</li>
				<li data-hover="dark">
					<a class="p-3" href="#">Item 2</a>
				</li>
				<li data-hover="dark">
					<a class="p-3" href="#">Item 3</a>
				</li>
				<li data-hover="dark">
					<a class="p-3" href="#">Item 4</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sl-l-block-item">
		<a
			class="sl-js-dropdown pr-3"
			data-dropdown_name="dropdown2"
			data-color="text"
			data-icon="arrow"
			href="#"
		>
			Dropdown Link
		</a>
		<div class="sl-c-dropdown-menu" data-dropdown_parent="dropdown2">
			<ul>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 1</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 2</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 3</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 4</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sl-l-block-item">
		<a
			class="sl-js-dropdown pr-3"
			data-dropdown_name="dropdown3"
			data-color="text"
			data-icon="arrow"
			data-variant="center"
			href="#"
		>
			Centered
		</a>
		<div class="sl-c-dropdown-menu" data-dropdown_parent="dropdown3">
			<ul>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 1</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 2</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 3</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 4</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sl-l-block-item">
		<a
			class="sl-js-dropdown"
			data-dropdown_name="icon"
			data-icon="lang"
			data-variant="center"
			href="#"
		>
		</a>

		<div class="sl-c-dropdown-menu" data-dropdown_parent="icon">
			<ul>
				<li class="p-3" data-border="normal-bottom">
					<span>Not a link</span>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 1</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 2</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 3</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="sl-l-block">
	<div class="sl-l-block-item pr-3">
		<button
			class="sl-e-button sl-js-dropdown"
			data-variant="primary"
			data-dropdown_name="primary"
			data-icon="arrow-white"
		>
			Primary
		</button>

		<div class="sl-c-dropdown-menu" data-dropdown_parent="primary">
			<ul>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 1</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sl-l-block-item pr-3">
		<button
			class="sl-e-button sl-js-dropdown"
			data-variant="secondary"
			data-dropdown_name="secondary"
			data-icon="arrow-white"
		>
			Secondary
		</button>

		<div class="sl-c-dropdown-menu" data-dropdown_parent="secondary">
			<ul>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 1</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 2</a>
				</li>
				<li data-hover="light">
					<a class="p-3 w-100" href="#">Item 3</a>
				</li>
			</ul>
		</div>
	</div>
</div>
