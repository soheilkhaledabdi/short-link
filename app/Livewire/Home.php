<?php

namespace App\Livewire;

use App\Models\Link;
use Carbon\Carbon;
use Livewire\Component;

class Home extends Component
{
    public $longUrl = '';
    public $linkType = 'random';
    public $customUrl = '';
    public $expiryDate = '';

    public function submit()
    {
        $this->validate([
            'longUrl' => 'required|url',
            'linkType' => $this->linkType === 'custom' ? 'required|alpha_num|min:3|max:20' : '',
            'customUrl' => 'nullable|alpha_num|min:3|max:20',
            'expiryDate' => 'nullable|integer',
        ]);

        $link = env('APP_URL') . '/';
        $shortLink = '';
        if ($this->linkType === 'random') {
            $shortLink .= $this->generateRandomLink();
        } else {
            $shortLink .= $this->customUrl;
        }

        if (Link::query()->where('shortened_url', $shortLink)->exists()) {
            session()->flash('error', 'این لینک اختصاصی قبلا استفاده شده است.');
            return;
        }


        Link::query()->create([
            'url' => $this->longUrl,
            'shortened_url' => $shortLink,
            'expires_at' => Carbon::now()->addDays(intval($this->expiryDate)),
        ]);

        session()->flash('success', 'لینک شما با موفقیت کوتاه شد:' . $link.$shortLink);
    }

    public function handleLinkTypeChange($type)
    {
        $this->linkType = $type;

        if ($type === 'random') {
            $this->customUrl = '';
        }
    }

    private function generateRandomLink()
    {
        return substr(md5(uniqid(rand(), true)), 0, 6);
    }

    public function render()
    {
        return view('livewire.home');
    }
}
