<div class="bl_devToolBox" id="js_toolBox">
	<div class="bl_devToolBox_btn">
		<input type="checkbox" name="is-show" id="js_toolBox_chkbox">
	</div>
	<!-- /.bl_devToolBox_btn -->
	<div class="bl_devToolBox_utils">
		<div id="js_fontSize_controller">
			<label for="js_fontSize_range">サイズ(px)</label>
			<input type="range" name="font-size" id="js_fontSize_range" value="16" max="32" min="10" step="1">
			<output id="js_fontSize_result"></output>
		</div>
		<hr style="border-top: 1px dotted #aaaaaa;">
		<div class="bl_toggleArea">
			<input
				type="checkbox"
				name="enabled-font-size"
				id="js_fontSize_chkbox"
				class="bl_toggleArea_chkbox"
			>
			<label for="js_fontSize_chkbox" class="bl_toggleArea_label">
				font-size 手動
			</label>
		</div>
		<hr style="border-top: 2px solid #0000be;">
		<div id="js_colorMode_controller" class="bl_toggleArea">
			<input
				type="checkbox"
				name="is-dark-mode"
				id="js_darkMode"
				class="bl_toggleArea_chkbox"
			>
			<label for="js_darkMode" class="bl_toggleArea_label">ダークモード</label>
		</div>
		<hr style="border-top: 1px dotted #aaaaaa;">
		<div class="bl_toggleArea">
			<input
				type="checkbox"
				name="enable-color-mode"
				id="js_colorMode_chkbox"
				class="bl_toggleArea_chkbox"
			>
			<label for="js_colorMode_chkbox" class="bl_toggleArea_label">
				color-mode 手動
			</label>
		</div>
	</div>
	<!-- /.bl_debToolBox_utils -->
</div>
<!-- /.bl_devToolBox -->
