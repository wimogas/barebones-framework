{$folder_id = $FOLDER_DATA.folder_id}
{$folder_name = $FOLDER_DATA.name} 
{$folder_parent = $FOLDER_DATA.path}

<div
	class="sl-c-folder-block sl-l-block py-2 hover-light w-100"
	style="padding-left: {(($folder_parent + 1 ) * 16)}px"
>
	<div class="sl-l-block flex-grow-100">
		<div class="sl-c-folder-name">
			<div class="sl-l-block">
				<a class="sl-c-folder-name--arrow mr-2" href="#">
					<i class="icon medium">
						<img src="./assets/icons/arrow2.svg" />
					</i>
				</a>
				<a class="color-text" href="#">
					<i class="sl-c-folder-name--icon icon medium mr-1">
						<img src="./assets/icons/folder-close.svg" />
					</i>
					<span class="sl-c-folder-name--text"
						>{$folder_name}</span
					>
				</a>
			</div>
		</div>
	</div>
	<div class="sl-c-folder-menu sl-c-block">
		<a
			class="sl-c-folder-menu--toggler sl-js-dropdown"
			href="#"
			data-dropdown_name="{$folder_id}"
			data-dropdown_align="center"
		>
			<i class="icon medium">
				<img src="./assets/icons/more.svg" />
			</i>
		</a>
		<div class="sl-c-dropdown-menu" data-dropdown_parent="{$folder_id}">
			<ul>
				<li class="hover-light">
					<a class="p-3 w-100" href="#">Item 1</a>
				</li>
				<li class="hover-light">
					<a class="p-3 w-100" href="#">Item 2</a>
				</li>
				<li class="hover-light">
					<a class="p-3 w-100" href="#">Item 3</a>
				</li>
			</ul>
		</div>
	</div>
</div>
