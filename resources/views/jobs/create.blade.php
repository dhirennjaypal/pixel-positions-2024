<x-layout>
	<x-page-heading>New Job</x-page-heading>
	<x-forms.form method="POST" action="/jobs">
		<x-forms.input label="Title" name="title" placeholder="Web Developer" />
		<x-forms.input label="Salary" name="salary" placeholder="$60,000" />
		<x-forms.input label="Location" name="location" placeholder="Ahmedabad, Gujarat, India" />

		<x-forms.select label="Schedule" name="schedule">
			<option>Full Time</option>
			<option>Part Time</option>
		</x-forms.select>

		<x-forms.input label="URL" name="url" placeholder="http://acme.com/jobs/ceo-wanted" />
		<x-forms.checkbox label="Feature (costs extra)" name="featured" />

		<x-forms.divider />

		<x-forms.input label="Tags (comma separated)" name="tags" placeholder="Backend, Frontend, API" />

		<x-forms.button>Publish</x-forms.button>
	</x-forms.form>
</x-layout>
