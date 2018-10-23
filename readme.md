# Run this: #
sudo apt install -y xbindkeys php && git clone git@github.com:jgadd/linux_audio_switcher.git

cd linux_audio_switcher && cp ./* ~/

xbindkeys

# Basic config: #
Edit switch_audio_output.php to make your audio outputs.

Press ctrl + alt + a to swap between your devices.

## Optional Conf: ##
Edit .xbindkeysrc if you prefer a different shortcut.