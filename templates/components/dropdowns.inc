<div class="sl-l-block py-5">
	<h1>Dropdowns</h1>
</div>

<div class="sl-l-block py-3 mb-4">
	<div class="sl-l-block-item">
		<a
			class="sl-js-dropdown pr-3"
			data-dropdown_name="dropdown1"
			data-color="text"
			href="#"
		>
			Dropdown Link
			<i class="icon small ml-2">
				<?php include './assets/icons/arrow.svg' ?>
			</i>
		</a>
		<div
			class="sl-c-dropdown-menu"
			data-dropdown_parent="dropdown1"
			data-background="dark"
			data-color="light"
		>
			<ul>
				<li data-hover="dark">
					<a class="p-3" data-width="100" href="#">Item 1</a>
				</li>
				<li data-hover="dark">
					<a class="p-3" data-width="100" href="#">Item 2</a>
				</li>
				<li data-hover="dark">
					<a class="p-3" data-width="100" href="#">Item 3</a>
				</li>
				<li data-hover="dark">
					<a class="p-3" data-width="100" href="#">Item 4</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sl-l-block-item">
		<a class="sl-js-dropdown pr-3" data-dropdown_name="dropdown2" href="#">
			Dropdown Link
			<i class="icon small ml-2" data-filter="primary">
				<?php include './assets/icons/arrow.svg' ?>
			</i>
		</a>
		<div class="sl-c-dropdown-menu" data-dropdown_parent="dropdown2">
			<ul>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 1</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 2</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 3</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 4</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sl-l-block-item">
		<a
			class="sl-js-dropdown pr-3"
			data-dropdown_name="dropdown3"
			data-color="text"
			data-dropdown_align="center"
			href="#"
		>
			Centered
			<i class="icon small ml-2">
				<?php include './assets/icons/arrow.svg' ?>
			</i>
		</a>
		<div class="sl-c-dropdown-menu" data-dropdown_parent="dropdown3">
			<ul>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 1</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 2</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 3</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 4</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="sl-l-block-item">
		<a
			class="icon sl-js-dropdown"
			data-dropdown_name="icon"
			data-dropdown_align="center"
			href="#"
		>
			<?php include './assets/icons/lang.svg' ?>
		</a>

		<div class="sl-c-dropdown-menu" data-dropdown_parent="icon">
			<ul>
				<li class="p-3" data-width="100" data-border="normal-bottom">
					<span>Not a link</span>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 1</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 2</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-width="100" href="#">Item 3</a>
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
			<i class="icon small ml-2" data-filter="white">
				<?php include './assets/icons/arrow.svg' ?>
			</i>
		</button>

		<div class="sl-c-dropdown-menu" data-dropdown_parent="primary">
			<div class="sl-l-block">
				<div class="sl-l-block-item p-3" data-direction="column">
					<h3 class="pb-3" data-border="normal-bottom">Features</h3>

					<div class="sl-l-block">
						<div class="sl-l-block-item">
							<div class="sl-l-block pt-3" data-direction="row">
								<div class="sl-l-block-item">
									<i class="icon medium mr-3">
										<?php include './assets/icons/lang.svg' ?>
									</i>
								</div>
								<div>
									<h4>PIM</h4>
									<p>Lorem Ipsum</p>
								</div>
							</div>

							<div class="sl-l-block pt-3" data-direction="row">
								<div class="sl-l-block-item">
									<i class="icon medium mr-3">
										<?php include './assets/icons/lang.svg' ?>
									</i>
								</div>
								<div>
									<h4>PIM</h4>
									<p>Lorem Ipsum</p>
								</div>
							</div>

							<div class="sl-l-block pt-3" data-direction="row">
								<div class="sl-l-block-item">
									<i class="icon medium mr-3">
										<?php include './assets/icons/lang.svg' ?>
									</i>
								</div>
								<div>
									<h4>PIM</h4>
									<p>Lorem Ipsum</p>
								</div>
							</div>
						</div>
						<div class="sl-l-block-item ml-3">
							<div class="sl-l-block pt-3" data-direction="row">
								<div class="sl-l-block-item">
									<i class="icon medium mr-3">
										<?php include './assets/icons/lang.svg' ?>
									</i>
								</div>
								<div>
									<h4>PIM</h4>
									<p>Lorem Ipsum</p>
								</div>
							</div>

							<div class="sl-l-block pt-3" data-direction="row">
								<div class="sl-l-block-item">
									<i class="icon medium mr-3">
										<?php include './assets/icons/lang.svg' ?>
									</i>
								</div>
								<div>
									<h4>PIM</h4>
									<p>Lorem Ipsum</p>
								</div>
							</div>

							<div class="sl-l-block pt-3" data-direction="row">
								<div class="sl-l-block-item">
									<i class="icon medium mr-3">
										<?php include './assets/icons/lang.svg' ?>
									</i>
								</div>
								<div>
									<h4>PIM</h4>
									<p>Lorem Ipsum</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div
					class="sl-l-block p-3"
					data-height="100"
					data-background="light"
					data-direction="column"
				>
					<div class="sl-l-block" data-flex="1" data-direction="row">
						<div class="sl-l-block-item">
							<i class="icon medium mr-3">
								<?php include './assets/icons/lang.svg' ?>
							</i>
						</div>
						<div class="sl-l-block-item">
							<h4>PIM</h4>
							<p>Lorem Ipsum</p>
						</div>
					</div>
					<div class="sl-l-block" data-flex="1" data-direction="row">
						<div class="sl-l-block-item">
							<i class="icon medium mr-3">
								<?php include './assets/icons/lang.svg' ?>
							</i>
						</div>
						<div class="sl-l-block-item">
							<h4>PIM</h4>
							<p>Lorem Ipsum</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="sl-l-block-item pr-3">
		<button
			class="sl-e-button sl-js-dropdown"
			data-variant="secondary"
			data-dropdown_align="center"
			data-dropdown_name="secondary"
			data-icon="arrow-white"
		>
			Secondary
			<i class="icon small ml-2" data-filter="white">
				<?php include './assets/icons/arrow.svg' ?>
			</i>
		</button>

		<div class="sl-c-dropdown-menu" data-dropdown_parent="secondary">
			<ul>
				<li data-hover="light">
					<a class="p-3" data-color="text" data-width="100" href="#">Item 1</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-color="text" data-width="100" href="#">Item 2</a>
				</li>
				<li data-hover="light">
					<a class="p-3" data-color="text" data-width="100" href="#">Item 3</a>
				</li>
			</ul>
		</div>
	</div>
</div>
