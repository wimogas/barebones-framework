<div class="sl-c-tree-panel border-right">

    <div class="sl-l-block column align-start" >

        <div class="sl-l-block p-3 justify-between w-100">
            <h3>Folders<H3>
            <a class="icon medium" href="#">
			    <img src="./assets/icons/add.svg"/>
		    </a>
        </div>


        <div class="sl-l-block justify-between w-100">
            {foreach from=$FOLDER_LIST item=item}
                {include 'components/dam_folder.inc' FOLDER_DATA=$item}
            {/foreach}
            

        </div>

    </div>
</div>
