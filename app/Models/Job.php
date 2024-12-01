<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

	public function tag(string $name): Tag {
		$tag	=	Tag::firstOrCreate([ "name" => $name ]);
		$this->tags()->attach($tag);
		return $tag;
	}

	public function tags(): BelongsToMany {
		return $this->belongsToMany(Tag::class);
	}

	public function employer(): BelongsTo {
		return $this->belongsTo(Employer::class);
	}
}
