<template>
	<Head title="Welcome" />

	<div>
		<div class="container-fluid fixed-top p-4">
			<div class="col-12">
				<div v-if="canLogin" class="d-flex justify-content-end">
					<div>
						<Link v-if="$page.props.user" :href="route('dashboard')" class="text-muted"> Dashboard </Link>

						<template v-else>
							<Link :href="route('login')" class="text-muted"> Log in </Link>

							<Link v-if="canRegister" :href="route('register')" class="ms-4 text-muted"> Register </Link>
						</template>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid my-5 pt-5 px-5">
			<div class="row justify-content-center px-4">
				<div class="col-span-full col-lg-9 text-lg">অনলাইন সার্টিফিকেট সিস্টেম</div>
			</div>
		</div>
	</div>
</template>

<style scoped></style>

<script>
import {defineComponent} from "vue"
import {Head, Link} from "@inertiajs/inertia-vue3"

export default defineComponent({
	components: {
		Head,
		Link,
	},

	props: {
		canLogin: Boolean,
		canRegister: Boolean,
		laravelVersion: String,
		phpVersion: String,
	},
})
</script>
