<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

class Settings extends Component
{
    use WithFileUploads;
    #[Layout('layouts.backend')]
    public $metaTitle;
    public $metaDescription;
    public $metaKeywords;
    public $metaAuthor;
    public $metaRobots;
    public $metaGoogleSiteVerification;
    public $adsCode;
    public $logo;
    public $logoPath;
    public $oldLogoSetting;
    public $oldLogoPath;
    public function render()
    {
        return view('livewire.settings');
    }
    public function save()
    {
        $validatedData = $this->validate([
            'metaTitle' => 'required|max:255',
            'metaDescription' => 'required|max:255',
            'metaKeywords' => 'required|max:255',
            'metaAuthor' => 'required|max:255',
            'metaRobots' => 'required|max:255',
            'metaGoogleSiteVerification' => 'required|max:255',
            'adsCode' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $settings = [
            'metaTitle' => $this->metaTitle,
            'metaDescription' => $this->metaDescription,
            'metaKeywords' => implode(',', array_map('trim', explode(',', $this->metaKeywords))),
            'metaAuthor' => $this->metaAuthor,
            'metaRobots' => $this->metaRobots,
            'metaGoogleSiteVerification' => $this->metaGoogleSiteVerification,
            'adsCode' => $this->adsCode,

        ];
        $oldLogoSetting = Setting::where('key', 'logo')->first();
        if ($oldLogoSetting) {
            $oldLogoPath = public_path('storage/' . $oldLogoSetting->value);
            if (file_exists($oldLogoPath)) {
                Storage::delete($oldLogoPath);
            }
        }
        if ($this->logo) {
            $logoPath = $this->logo->store('logos', 'public');
            $settings['logo'] = $logoPath;
        }
        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        if (array_key_exists('logo', $validatedData) && $this->logo) {
            $logoPath = $this->logo->store('logos', 'public');
            $logoSetting = Setting::where('key', 'logo')->first();
            if ($logoSetting) {
                $logoSetting->update(['value' => $logoPath]);
            } else {
                Setting::create(['key' => 'logo', 'value' => $logoPath]);
            }
        }

        session()->flash('success', 'Settings Successfuly updated');
        $this->redirect('/settings', navigate: true);
    }

    public function mount()
    {
        $this->metaTitle = Setting::where('key', 'metaTitle')->first()->value ?? '';
        $this->metaDescription = Setting::where('key', 'metaDescription')->first()->value ?? '';
        $this->metaKeywords = Setting::where('key', 'metaKeywords')->first()->value ?? '';
        $this->metaAuthor = Setting::where('key', 'metaAuthor')->first()->value ?? '';
        $this->metaRobots = Setting::where('key', 'metaRobots')->first()->value ?? '';
        $this->metaGoogleSiteVerification = Setting::where('key', 'metaGoogleSiteVerification')->first()->value ?? '';
        $this->adsCode = Setting::where('key', 'adsCode')->first()->value ?? '';
    }
}
