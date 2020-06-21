<?php


namespace Backpack\CRUD\app\Library\CrudPanel {

    use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\AddressAlgoliaField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\AddressGoogleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\BrowseField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\BrowseMultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Base64ImageField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\CheckboxField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ChecklistField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ChecklistDependencyField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\CkeditorField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ColorField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ColorPickerField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\CustomHtmlField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DateField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DatePickerField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DateRangeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DatetimeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\DatetimePickerField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\EasymdeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\EmailField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\EnumField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\HiddenField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\IconPickerField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ImageField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\MonthField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\NumberField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\PageOrLinkField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\PasswordField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\RadioField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\RangeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\RelationshipField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\RepeatableField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectGroupedField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2Field;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectMultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2MultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2NestedField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2GroupedField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectAndOrderField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SelectFromArrayField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2FromArrayField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2FromAjaxField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\Select2FromAjaxMultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SimplemdeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\SummernoteField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TableField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TextField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TextareaField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TimeField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\TinymceField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\UploadField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\UploadMultipleField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\UrlField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\VideoField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\ViewField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\WeekField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Fields\WysiwygField;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ArrayColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ArrayCountColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\BooleanColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\CheckColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\CheckboxColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ClosureColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\DateColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\DatetimeColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\EmailColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ImageColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\MarkdownColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ModelFunctionColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ModelFunctionAttributeColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\MultidimensionalArrayColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\NumberColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\PhoneColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\RadioColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\RelationshipColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\RelationshipCountColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\RowNumberColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\TextColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\SelectColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\SelectFromArrayColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\SelectMultipleColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\TableColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\UploadMultipleColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\VideoColumn;
use SergeYugai\Laravel\Backpack\FieldsAsClasses\Columns\ViewColumn;


    if (false) {
        /**
         * Class CrudPanel
         * @package Backpack\CRUD\app\Library\CrudPanel
         *
         */
        class CrudPanel {
            public static function addressAlgoliaField(string $name): AddressAlgoliaField 
            {
                return AddressAlgoliaField::make($name);
            }
            public static function addressGoogleField(string $name): AddressGoogleField 
            {
                return AddressGoogleField::make($name);
            }
            public static function browseField(string $name): BrowseField 
            {
                return BrowseField::make($name);
            }
            public static function browseMultipleField(string $name): BrowseMultipleField 
            {
                return BrowseMultipleField::make($name);
            }
            public static function base64ImageField(string $name): Base64ImageField 
            {
                return Base64ImageField::make($name);
            }
            public static function checkboxField(string $name): CheckboxField 
            {
                return CheckboxField::make($name);
            }
            public static function checklistField(string $name): ChecklistField 
            {
                return ChecklistField::make($name);
            }
            public static function checklistDependencyField(string $name): ChecklistDependencyField 
            {
                return ChecklistDependencyField::make($name);
            }
            public static function ckeditorField(string $name): CkeditorField 
            {
                return CkeditorField::make($name);
            }
            public static function colorField(string $name): ColorField 
            {
                return ColorField::make($name);
            }
            public static function colorPickerField(string $name): ColorPickerField 
            {
                return ColorPickerField::make($name);
            }
            public static function customHtmlField(string $name): CustomHtmlField 
            {
                return CustomHtmlField::make($name);
            }
            public static function dateField(string $name): DateField 
            {
                return DateField::make($name);
            }
            public static function datePickerField(string $name): DatePickerField 
            {
                return DatePickerField::make($name);
            }
            public static function dateRangeField(string $name): DateRangeField 
            {
                return DateRangeField::make($name);
            }
            public static function datetimeField(string $name): DatetimeField 
            {
                return DatetimeField::make($name);
            }
            public static function datetimePickerField(string $name): DatetimePickerField 
            {
                return DatetimePickerField::make($name);
            }
            public static function easymdeField(string $name): EasymdeField 
            {
                return EasymdeField::make($name);
            }
            public static function emailField(string $name): EmailField 
            {
                return EmailField::make($name);
            }
            public static function enumField(string $name): EnumField 
            {
                return EnumField::make($name);
            }
            public static function hiddenField(string $name): HiddenField 
            {
                return HiddenField::make($name);
            }
            public static function iconPickerField(string $name): IconPickerField 
            {
                return IconPickerField::make($name);
            }
            public static function imageField(string $name): ImageField 
            {
                return ImageField::make($name);
            }
            public static function monthField(string $name): MonthField 
            {
                return MonthField::make($name);
            }
            public static function numberField(string $name): NumberField 
            {
                return NumberField::make($name);
            }
            public static function pageOrLinkField(string $name): PageOrLinkField 
            {
                return PageOrLinkField::make($name);
            }
            public static function passwordField(string $name): PasswordField 
            {
                return PasswordField::make($name);
            }
            public static function radioField(string $name): RadioField 
            {
                return RadioField::make($name);
            }
            public static function rangeField(string $name): RangeField 
            {
                return RangeField::make($name);
            }
            public static function relationshipField(string $name): RelationshipField 
            {
                return RelationshipField::make($name);
            }
            public static function repeatableField(string $name): RepeatableField 
            {
                return RepeatableField::make($name);
            }
            public static function selectField(string $name): SelectField 
            {
                return SelectField::make($name);
            }
            public static function selectGroupedField(string $name): SelectGroupedField 
            {
                return SelectGroupedField::make($name);
            }
            public static function select2Field(string $name): Select2Field 
            {
                return Select2Field::make($name);
            }
            public static function selectMultipleField(string $name): SelectMultipleField 
            {
                return SelectMultipleField::make($name);
            }
            public static function select2MultipleField(string $name): Select2MultipleField 
            {
                return Select2MultipleField::make($name);
            }
            public static function select2NestedField(string $name): Select2NestedField 
            {
                return Select2NestedField::make($name);
            }
            public static function select2GroupedField(string $name): Select2GroupedField 
            {
                return Select2GroupedField::make($name);
            }
            public static function selectAndOrderField(string $name): SelectAndOrderField 
            {
                return SelectAndOrderField::make($name);
            }
            public static function selectFromArrayField(string $name): SelectFromArrayField 
            {
                return SelectFromArrayField::make($name);
            }
            public static function select2FromArrayField(string $name): Select2FromArrayField 
            {
                return Select2FromArrayField::make($name);
            }
            public static function select2FromAjaxField(string $name): Select2FromAjaxField 
            {
                return Select2FromAjaxField::make($name);
            }
            public static function select2FromAjaxMultipleField(string $name): Select2FromAjaxMultipleField 
            {
                return Select2FromAjaxMultipleField::make($name);
            }
            public static function simplemdeField(string $name): SimplemdeField 
            {
                return SimplemdeField::make($name);
            }
            public static function summernoteField(string $name): SummernoteField 
            {
                return SummernoteField::make($name);
            }
            public static function tableField(string $name): TableField 
            {
                return TableField::make($name);
            }
            public static function textField(string $name): TextField 
            {
                return TextField::make($name);
            }
            public static function textareaField(string $name): TextareaField 
            {
                return TextareaField::make($name);
            }
            public static function timeField(string $name): TimeField 
            {
                return TimeField::make($name);
            }
            public static function tinymceField(string $name): TinymceField 
            {
                return TinymceField::make($name);
            }
            public static function uploadField(string $name): UploadField 
            {
                return UploadField::make($name);
            }
            public static function uploadMultipleField(string $name): UploadMultipleField 
            {
                return UploadMultipleField::make($name);
            }
            public static function urlField(string $name): UrlField 
            {
                return UrlField::make($name);
            }
            public static function videoField(string $name): VideoField 
            {
                return VideoField::make($name);
            }
            public static function viewField(string $name): ViewField 
            {
                return ViewField::make($name);
            }
            public static function weekField(string $name): WeekField 
            {
                return WeekField::make($name);
            }
            public static function wysiwygField(string $name): WysiwygField 
            {
                return WysiwygField::make($name);
            }
            public static function arrayColumn(string $name): ArrayColumn 
            {
                return ArrayColumn::make($name);
            }
            public static function arrayCountColumn(string $name): ArrayCountColumn 
            {
                return ArrayCountColumn::make($name);
            }
            public static function booleanColumn(string $name): BooleanColumn 
            {
                return BooleanColumn::make($name);
            }
            public static function checkColumn(string $name): CheckColumn 
            {
                return CheckColumn::make($name);
            }
            public static function checkboxColumn(string $name): CheckboxColumn 
            {
                return CheckboxColumn::make($name);
            }
            public static function closureColumn(string $name): ClosureColumn 
            {
                return ClosureColumn::make($name);
            }
            public static function dateColumn(string $name): DateColumn 
            {
                return DateColumn::make($name);
            }
            public static function datetimeColumn(string $name): DatetimeColumn 
            {
                return DatetimeColumn::make($name);
            }
            public static function emailColumn(string $name): EmailColumn 
            {
                return EmailColumn::make($name);
            }
            public static function imageColumn(string $name): ImageColumn 
            {
                return ImageColumn::make($name);
            }
            public static function markdownColumn(string $name): MarkdownColumn 
            {
                return MarkdownColumn::make($name);
            }
            public static function modelFunctionColumn(string $name): ModelFunctionColumn 
            {
                return ModelFunctionColumn::make($name);
            }
            public static function modelFunctionAttributeColumn(string $name): ModelFunctionAttributeColumn 
            {
                return ModelFunctionAttributeColumn::make($name);
            }
            public static function multidimensionalArrayColumn(string $name): MultidimensionalArrayColumn 
            {
                return MultidimensionalArrayColumn::make($name);
            }
            public static function numberColumn(string $name): NumberColumn 
            {
                return NumberColumn::make($name);
            }
            public static function phoneColumn(string $name): PhoneColumn 
            {
                return PhoneColumn::make($name);
            }
            public static function radioColumn(string $name): RadioColumn 
            {
                return RadioColumn::make($name);
            }
            public static function relationshipColumn(string $name): RelationshipColumn 
            {
                return RelationshipColumn::make($name);
            }
            public static function relationshipCountColumn(string $name): RelationshipCountColumn 
            {
                return RelationshipCountColumn::make($name);
            }
            public static function rowNumberColumn(string $name): RowNumberColumn 
            {
                return RowNumberColumn::make($name);
            }
            public static function textColumn(string $name): TextColumn 
            {
                return TextColumn::make($name);
            }
            public static function selectColumn(string $name): SelectColumn 
            {
                return SelectColumn::make($name);
            }
            public static function selectFromArrayColumn(string $name): SelectFromArrayColumn 
            {
                return SelectFromArrayColumn::make($name);
            }
            public static function selectMultipleColumn(string $name): SelectMultipleColumn 
            {
                return SelectMultipleColumn::make($name);
            }
            public static function tableColumn(string $name): TableColumn 
            {
                return TableColumn::make($name);
            }
            public static function uploadMultipleColumn(string $name): UploadMultipleColumn 
            {
                return UploadMultipleColumn::make($name);
            }
            public static function videoColumn(string $name): VideoColumn 
            {
                return VideoColumn::make($name);
            }
            public static function viewColumn(string $name): ViewColumn 
            {
                return ViewColumn::make($name);
            }

        }
    }
}