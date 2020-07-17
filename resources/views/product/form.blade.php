<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($product->title) ? $product->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="text" id="category_id" value="{{ isset($product->category_id) ? $product->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($product->description) ? $product->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sku') ? 'has-error' : ''}}">
    <label for="sku" class="control-label">{{ 'Sku' }}</label>
    <input class="form-control" name="sku" type="text" id="sku" value="{{ isset($product->sku) ? $product->sku : ''}}" >
    {!! $errors->first('sku', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sale_price') ? 'has-error' : ''}}">
    <label for="sale_price" class="control-label">{{ 'Sale Price' }}</label>
    <input class="form-control" name="sale_price" type="text" id="sale_price" value="{{ isset($product->sale_price) ? $product->sale_price : ''}}" >
    {!! $errors->first('sale_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vat') ? 'has-error' : ''}}">
    <label for="vat" class="control-label">{{ 'Vat' }}</label>
    <input class="form-control" name="vat" type="text" id="vat" value="{{ isset($product->vat) ? $product->vat : ''}}" >
    {!! $errors->first('vat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unit') ? 'has-error' : ''}}">
    <label for="unit" class="control-label">{{ 'Unit' }}</label>
    <input class="form-control" name="unit" type="text" id="unit" value="{{ isset($product->unit) ? $product->unit : ''}}" >
    {!! $errors->first('unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ean') ? 'has-error' : ''}}">
    <label for="ean" class="control-label">{{ 'Ean' }}</label>
    <input class="form-control" name="ean" type="text" id="ean" value="{{ isset($product->ean) ? $product->ean : ''}}" >
    {!! $errors->first('ean', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('net_price') ? 'has-error' : ''}}">
    <label for="net_price" class="control-label">{{ 'Net Price' }}</label>
    <input class="form-control" name="net_price" type="text" id="net_price" value="{{ isset($product->net_price) ? $product->net_price : ''}}" >
    {!! $errors->first('net_price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('supplier') ? 'has-error' : ''}}">
    <label for="supplier" class="control-label">{{ 'Supplier' }}</label>
    <input class="form-control" name="supplier" type="text" id="supplier" value="{{ isset($product->supplier) ? $product->supplier : ''}}" >
    {!! $errors->first('supplier', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <select name="type" class="form-control" id="type" >
    @foreach (json_decode('{"product": "Product", "bundle": "Bundle", "matrix": "Matrix", "assembly": "Assembly"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($product->type) && $product->type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status" >
    @foreach (json_decode('{"1": "Active", "0": "Disabled"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($product->status) && $product->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
