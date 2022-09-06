<x-app-layout title="Bins" :active="route('bin.index')">
				
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">
			Bins
		</h1>
	
		<div class="row">
			<div class="col-12 col-lg-6 col-xxl-4 d-flex">
				<div class="card flex-fill w-100">
					<div class="card-body px-4">
						<div id="world_map" style="height:350px;"></div>
					</div>
					<div class="card-footer">
						<h5 class="card-title mb-0">
							Chitawira Bin
						</h5>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];

			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});

			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>

</x-app-layout>